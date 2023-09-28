<?php

namespace PS\GestionBundle\Controller;

use PS\GestionBundle\Entity\ConsultationCancer;
use PS\GestionBundle\Repository\ConsultationCancerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use APY\DataGridBundle\Grid\Source\Entity;
use DateTime;
use PS\GestionBundle\Entity\Consultation;
use PS\GestionBundle\Entity\RendezVous;
use PS\GestionBundle\Entity\FichePatientCancer;
use PS\GestionBundle\Entity\RendezVousConsultation;
use PS\GestionBundle\Entity\ConsultationInfirmier;
use PS\GestionBundle\Entity\Patient;
use PS\GestionBundle\Form\SearchType;
use PS\GestionBundle\Form\InfoConsultationType;
use PS\GestionBundle\Entity\InfoConsultation;
use PS\GestionBundle\Entity\PatientAntecedent;
use PS\GestionBundle\Form\ConsultationCancerType;
use PS\ParametreBundle\Entity\Constante;
use PS\ParametreBundle\Entity\PatientAffections;
use PS\SiteBundle\Form\PatientRechercherForm;

class ConsultationCancerController extends Controller
{

    public function getCurrentPatient(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->getSession()->get('patient')) {
            return $em->getRepository(Patient::class)->find($request->getSession()->get('patient'));
        }
    }

    /**
     * @Route("/admin/consultation/cancer/patient/search", name="admin_consultation_cancer_search", methods={"GET", "POST"})
     *
     */
    public function search(Request $request): Response
    {
        $form = $this->createPatientForm();

        $form->handleRequest($request);
        $session = $request->getSession();
        $smsMtarget  = $this->get('app.mtarget_sms');

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $identifiant = $form->get('identifiant')->getData();

            $pin = $form->get('pin')->getData();

            $count = $em->getRepository('GestionBundle:Patient')->findByPass($identifiant, $pin);

            if ($count[0][1] > 0) {
                $patient = $em->getRepository('GestionBundle:Patient')->findByParam($identifiant, $pin);

                if (!$patient) {
                    $this->addFlash(
                        'patient',
                        'Ce patient n\'existe pas dans la base de données!'
                    );
                } else {
                    $user = $this->getUser();
                    $assurance = $user->getAssurance();
                    /**
                     * @todo: A prendre pour le medecin conseil
                     */
                    $patient = $patient[0];
                    if ($contact = $patient->getPersonne()->getSmsContact()) {
                        $user       = $this->getUser();

                        $personne   = $user->getPersonne();
                        $nom        = $user->getUsername();
                        $hopital    = $user->getHopital();

                        if ($personne->getNomComplet()) {
                            $nom = '(' . $personne->getNomComplet() . ')';
                        }

                        $message    = sprintf("Votre historique médical est entrain d'être consulté par le Medecin %s ", $nom);

                        if ($assurance) {
                            $label = $assurance ? $assurance->getNom() : $hopital->getNom();
                            $message    = sprintf("Votre historique médical est entrain d'être consulté par le Medecin conseil de l'assurance %s", $label);
                        } else {
                            $label = $assurance ? $assurance->getNom() : $hopital->getNom();
                            $message   = sprintf("Votre historique médical est entrain d'être consulté par le Medecin %s de l'hopital ou du centre de Santé %s", $nom, $label);
                        }

                        $smsMtarget->sendSMS($contact, $message, null);
                    }

                    $session->set('patient', $patient->getId());

                    if ($assurance) {
                        $route = $this->generateUrl('admin_consultation_liste');
                    } else {
                        $route = $this->generateUrl('admin_consultation_cancer_new');
                    }


                    if ($patient->getAssocies()->count()) {
                        $session->set('patient_url_action', $route);
                        return $this->redirectToRoute('admin_gestion_patient_associe');
                    }

                    return $this->redirect($route);
                }
            } else {
                $this->addFlash(
                    'patient',
                    'Ce patient n\'existe pas dans la base de données!'
                );
            }
        }

        return $this->render('consultation/search.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/consultation/cancer/patient/", name="admin_consultation_cancer_index", methods={"GET"})
     */
    public function index(ConsultationCancerRepository $consultationCancerRepository): Response
    {
        return $this->render('consultation/cancer/index.html.twig', [
            'consultations' => $consultationCancerRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/consultation/cancer/patient/nouvelle", name="admin_consultation_cancer_new", methods={"GET", "POST"})
     */
    public function new(Request $request, Patient $patient = null): Response
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        $patient = $patient ? $patient: $this->getCurrentPatient($request);

        if (!$patient) {
            return $this->redirectToRoute('gestion_fichedepistagecancer_search');
        }

        $consultationCancer = new ConsultationCancer();
        $consultationCancer->setPatient($patient);
       
        $form = $this->createForm(ConsultationCancerType::class, $consultationCancer, [
            'action' => $this->generateUrl('admin_consultation_cancer_new'),
            'method' => 'POST',
        ]);

        $medecin = $em->getRepository('GestionBundle:Medecin')->findOneByPersonne($this->getUser()->getPersonne());
        $consultationCancer->setMedecin($medecin);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ficheCancer = $patient->getFichePatientCancer();
            $numeroDossier = $ficheCancer->getNumeroDossier();
            $ficheCancer = $em->getRepository(FichePatientCancer::class)->findOneByNumeroDossier($numeroDossier);

            if (!empty($numeroDossier) && $ficheCancer) {
                $ficheCancer->setDerniereChimiotherapie(new \DateTime())
                    ->setDerniereRadiotherapie(new \DateTime());
                $em->persist($ficheCancer);
            }else{
                $ficheCancer = new FichePatientCancer();
                $ficheCancer->setDerniereChimiotherapie(new \DateTime())
                    ->setDerniereRadiotherapie(new \DateTime())
                    ->setPatient($patient);
                $em->persist($ficheCancer);
            }

            $em->persist($consultationCancer);
            $em->flush();

            return $this->redirectToRoute('admin_consultation_cancer_historique', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('consultation/cancer/new.html.twig', [
            'patient' => $patient,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/consultation/cancer/patient/{id}/afficher", name="admin_consultation_cancer_show", methods={"GET"})
     */
    public function show(ConsultationCancer $consultationCancer): Response
    {
        return $this->render('consultation/cancer/show.html.twig', [
            'consultation' => $consultationCancer,
        ]);
    }

    /**
     * @Route("/admin/consultation/cancer/patient/{id}/edit", name="admin_consultation_cancer_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ConsultationCancer $consultationCancer, ConsultationCancerRepository $consultationCancerRepository): Response
    {
        $form = $this->createForm(ConsultationCancerType::class, $consultationCancer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $consultationCancerRepository->add($consultationCancer);
            return $this->redirectToRoute('admin_consultation_cancer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('consultation/cancer/edit.html.twig', [
            'consultation' => $consultationCancer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/consultation/cancer/patient/{id}/delete", name="admin_consultation_cancer_delete", methods={"POST"})
     */
    public function delete(Request $request, ConsultationCancer $consultationCancer, ConsultationCancerRepository $consultationCancerRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$consultationCancer->getId(), $request->request->get('_token'))) {
            $consultationCancerRepository->remove($consultationCancer);
        }

        return $this->redirectToRoute('admin_consultation_cancer_index', [], Response::HTTP_SEE_OTHER);
    }

     /**
     * @return mixed
     */
    private function createPatientForm()
    {
        $form = $this->createForm(SearchType::class, [
            'action' => $this->generateUrl('admin_consultation_search'),
            'method' => 'POST',
        ]);

        $form->add('submit', 'submit', ['label' => 'Rechercher']);

        return $form;
    }

    /**
     * Creates a form to create a Consultation entity.
     *
     * @param Consultation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Consultation $entity, Patient $patient, $edit = true, $options = [])
    {
        $defaultOptions = [
            'action' => $this->generateUrl('admin_consultation_new', ['id' => $patient->getId()]),
            'method' => 'POST',
            'patient' => $patient,
            'edit' => $edit,
            'doc_options' => [
                'folder' => '../data/',
                'mime_types' => ['application/pdf', 'image/png', 'image/jpeg', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
                'upload_dir' => $this->getUploadDir('consultations')
            ]
        ];

        $options = array_merge($defaultOptions, $options);
        $form = $this->createForm($this->get('app.consultation_type'), $entity, $options);

        $form->add('submit', 'submit', ['label' => 'Enregistrer']);

        return $form;
    }

     /**
     * Lists all consultation entities.
     * @Route("/admin/consultation/cancer/patient/liste/{id}", name="admin_consultation_cancer_liste", methods={"GET", "POST"})
     */
    public function listeAction(Request $request, Patient $patient = null)
    {
        $patient = $patient ? $patient : $this->getCurrentPatient($request);
        if (!$patient) {
            return $this->generateUrl('admin_consultation_cancer_search');
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $liste_consultations = $em->getRepository('GestionBundle:ConsultationCancer')->findByPatient($patient->getId(), $user);
        $consultations = $this->get('knp_paginator')->paginate(
            $liste_consultations,
            $request->query->get('page', 1) /*page number*/,
            5/*limit per page*/
        );

        return $this->render('consultation/cancer/liste.html.twig', [
            'consultations' => $consultations,
            'patient'       => $patient,
            'user' => $user
        ]);
    }

     /**
     * Lists all consultation entities.
     * @Route("/admin/consultation/cancer/patient/historique", name="admin_consultation_cancer_historique", methods={"GET", "POST"})
     */
    public function historiqueAction(Request $request)
    {
        $em         = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('GestionBundle:ConsultationCancer');
        $source     = new Entity('GestionBundle:ConsultationCancer');
        $user       = $this->getUser();
        $id         = $user->getPersonne()->getId();
        $statut     = true;

        $grid = $this->get('grid');

        $source->manipulateQuery(function ($qb) use ($user, $id, $statut) {

            if ($user->hasRole('ROLE_MEDECIN')) {
                $qb->andWhere("_medecin_personne.id = {$id}");
            } else {
                $qb->andWhere("_patient_personne.id = {$id}");
            }

            $qb->orderBy('_a.dateConsultation', 'DESC');
        });

        $grid->setSource($source);

        // $rowAction = new RowAction('Détails', 'admin_consultation_show');


        // $rowAction->manipulateRender(function ($action, $row) {

        //     $action->setRouteParameters([
        //         'id1' => $row->getField('id'), 'id' => $row->getField('patient.id'),
        //     ]);
        //     $action->setAttributes(['class' => 'btn btn-default btn-sm']);
        //     $action->setTitle('<i class="fa fa-list-alt"></i>');
        //     return $action;
        // });
        // $grid->addRowAction($rowAction);

        /*if ($user->hasRole('ROLE_MEDECIN')) {
            $rowAction = new RowAction('Modifier', 'admin_consultation_edit');
            $rowAction->manipulateRender(function ($action, $row) {
                if (!$this->isGranted('ROLE_EDIT_CONSULTATION', $row->getEntity())) {
                    return;
                }
                $action->setRouteParameters([
                    'id1' => $row->getField('id')
                    , 'id' => $row->getField('patient.id'),
                ]);
                $action->setAttributes(['class' => 'btn btn-warning btn-sm']);
                $action->setTitle('<i class="fa fa-edit"></i>');
                return $action;
            });
            $grid->addRowAction($rowAction);
        }*/

        // $rowAction = new RowAction('Imprimer', 'admin_consultation_preview_print');
        // $rowAction->manipulateRender(function ($action, $row) {
        //     if ($row->getField('statut') != -1) {
        //         $action->setRouteParameters([
        //             'id1' => $row->getField('id'), 'id' => $row->getField('patient.id'),
        //         ]);
        //         $action->setAttributes(['class' => 'btn btn-success btn-sm']);
        //         $action->setTitle('<i class="fa fa-print"></i>');
        //         return $action;
        //     }
        // });
        // $grid->addRowAction($rowAction);


        /*$rowAction = new RowAction('RDV', 'admin_consultation_rdv');

        $rowAction->manipulateRender(function ($action, $row) {
            if ($row->getField('statut') != -1) {
                $action->setRouteParameters([
                    'id' => $row->getField('id')
                ]);
                $action->setAttributes(['class' => 'btn bg-black btn-sm']);
                $action->setTitle('<i class="fa fa-calendar"></i>');
                return $action;
            }

        });

        $grid->addRowAction($rowAction);*/

        // $grid->getColumn('statut')->manipulateRenderCell(function ($value) {
        //     if ($value == -1) {
        //         return '<span class="label label-default">En attente du medecin</span>';
        //     }
        //     return '<span class="label label-success">Validé</span>';
        // });

        //$grid->getColumn('statut')

        //$grid->getColumn('statut')->setSize();
        //$grid->getColumn('dateConsultation')->setSize(20);
        $grid->getColumn('patient_nom_complet')->setVisible($user->hasRole('ROLE_MEDECIN'));
        // $grid->getColumn('consultant.hopital.nom')->setVisible($user->hasRole('ROLE_CUSTOMER') || $user->hasRole('ROLE_ADMIN'));
        $grid->getColumn('medecin_nom_complet')->setVisible($user->hasRole('ROLE_CUSTOMER') || $user->hasRole('ROLE_ADMIN'));

        return $grid->getGridResponse('consultation/historique-cancer_grid.html.twig', compact('role'));
    }

     /**
     * Lists all consultation entities.
     * @Route("/cnrao/profil-cancer", name="patient_profil_cancer", methods={"GET", "POST"})
     */
    public function profilCancerAction(Request $request)
    {
        $em          = $this->getDoctrine()->getManager();
        $patient     = '';
        $form        = $request->request->get('patient_recherche');
        $identifiant = $request->query->get('identifiant');
        $pin         = $request->query->get('pin');
        $localisation = $request->query->get('localisation');
        $contact     = '';
        $user        = $this->getUser();
        $error       = '';
        $count       = false;

        $isPost = false;

        $session = $this->get('session');

        if ($request->isMethod('POST')) {

            $isPost = true;

            $identifiant = $form['identifiant'];
            $smsManager  = $this->get('app.ps_sms');
            $smsMtarget  = $this->get('app.mtarget_sms');

            $patient = $em->getRepository(Patient::class)->findOneByMatricule($identifiant);


            $logger = $this->get('app.action_logger');

            $pin     = $form['pin'] ?? '';
            $contact = $form['contact'] ?? '';
            $localisation = $form['localisation'] ?? '';
            $urgence = $form['urgence'] ?? false;

            if ($pin && $contact && $identifiant) {

                if ($session->get('c_' . $identifiant) > 3) {
                    $error = sprintf('Nombre maximum d\'essais atteint', $identifiant);
                } else {

                    $patient = $em->getRepository(Patient::class)->findOneBy(compact('identifiant', 'pin'));

                    if ($patient) {
                        $logger->add("Votre profil médical a été consulté par le N° {$contact}", $patient, true);

                        $telephones = array_slice($patient->getTelephones()->toArray(), 0, 2);



                        $session->set('profile_identifiant', $identifiant);
                        $session->set('profile_pin', $pin);

                        $personne = $patient->getPersonne();
                        $contactPersonne = $personne->getSmsContact();

                        if ($contactPersonne && $contactPersonne != $contact) {
                            $msg = sprintf("Votre profil médical vient d'être consulté par le Numero %s\nPASS SANTE(https://santemousso.net)", $contact);
                            $smsMtarget->sendSMS($contactPersonne, $msg, null);
                        }

                        if ($urgence) {
                            $nameSender = "URGENCE PSM";
                            foreach ($telephones as $telephone) {
                                $nomComplet = $personne->getNomComplet();
                                $numeroParent = $telephone->getNumero();
                                $msg = sprintf( "Urgence possible concernant %s. Contactez le %s\nPASS MOUSSO", $nomComplet, $contact);
                                $smsMtarget->sendSMS($numeroParent, $msg, $nameSender);


                                if ($localisation) {
                                    $msg = sprintf(
                                        "Localisation estimée de %s,\n%s:",
                                        $nomComplet,
                                        $localisation
                                    );
                                    $smsMtarget->sendSMS($numeroParent, $msg, $nameSender);
                                    
                                }
                            }
                        }

                        $session->set('sms_' . $identifiant, new \DateTime());
                        // dump($contact);
                        // die();

                        return $this->render('patient/info.html.twig', [
                            'patient' => $patient,
                        ]);
                    } else {
                        $logger->add('Erreur ID/PIN', $patient, true, Historique::PROFILE_ID_ERROR, $identifiant);
                        $session->set('c_' . $identifiant, intval($session->get('c_' . $identifiant) + 1));
                        if ($patient) {
                            $contactPersonne = $patient->getPersonne()->getSmsContact();
                            $msg = sprintf("Tentative d'accès à votre par le numéro %s\nPASS SANTE(https://santemousso.net)", $contact);
                            $smsMtarget->sendSMS($contactPersonne, $msg, null);
                        }
                        $error = sprintf('Ce ID/PIN n\'existe pas dans notre base de données! ou n\'est pas associé à un compte patient. <a href="%s">Connexion</a>', $this->generateUrl('fos_user_security_login'));
                    }
                }
            } else {
                $error = 'Veuillez renseigner l\'ID, le PIN et votre contact pour continuer';
            }
        }

        $form = $this->createForm(PatientRechercherForm::class, null, [
            'action' => $this->generateUrl('patient_profil', ['pin' => $pin]),
        ]);

        $form->get('identifiant')->setData($identifiant);
        $form->get('pin')->setData($pin);
        $form->get('contact')->setData($contact);

        return $this->render(
            'consultation/cancer/recherche-profil-cancer.html.twig',
            [
                'form' => $form->createView(), 
                'identifiant' => $identifiant, 
                'pin' => $pin, 
                'error' => $error, 
                'is_post' => $isPost,
            ]
        );
    }
}
