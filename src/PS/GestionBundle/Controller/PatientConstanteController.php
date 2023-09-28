<?php

namespace PS\GestionBundle\Controller;

use PS\GestionBundle\Entity\PatientConstante;
use PS\GestionBundle\Entity\Patient;
use PS\GestionBundle\Form\SearchType;
use Symfony\Component\HttpFoundation\Request;
use PS\GestionBundle\Form\PatientConstanteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use APY\DataGridBundle\Grid\Source\Entity;
use PS\GestionBundle\Service\RowAction;
use Symfony\Component\HttpFoundation\RedirectResponse;
use PS\ParametreBundle\Entity\Constante;


/**
 * PatientConstante controller.
 *
 * @Route("admin/patient/constante", options={"expose"=true})
 */
class PatientConstanteController extends Controller
{

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->getDoctrine()->getManager();
    }

    /**
     * @param $class
     * @return mixed
     */
    public function getRepository($class)
    {
        return $this->getManager()->getRepository($class);
    }
    /**
     * Lists all patientConstante entities.
     *
     * @Route("/", name="gestion_patientconstante_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $hopitals = $user->getUtilisateurHopital();
        $constantes = $this->getRepository(Constante::class)->findAll();
        if ($this->isGranted('ROLE_MEDECIN') && !is_null($hopitals)) {
            if($this->checkCnraohopital($hopitals))
            {
                $constantes = array_filter($constantes, function($constante){
                    $liste_constances = [
                        "Poids",
                        "Température",
                        "Taille",
                        "Surface Corporelle",
                    ];
                    if(in_array($constante->getLibelle(), $liste_constances))
                    {
                        return $constante;
                    }
                }, ARRAY_FILTER_USE_BOTH);
            }
        }
        
        return $this->render('gestion/patientconstante/index.html.twig', [
            'constantes' => $constantes
        ]);
    }

    public function checkCnraohopital($hopitals):bool
    {
        foreach ($hopitals as $value) {
            $hopital = $value->getHopital();
            if($hopital->getNom() === "Centre National d'Oncologie Médicale et de Radiothérapie Alassane Ouattara (CNRAO)")
            {
                return true;
            }
        }

        return false;
    }


     /**
     * Creates a new patientConstante entity.
     *
     * @Route("/data/{id}", name="gestion_patientconstante_data", options={"expose"=true})
     * @Route("/data/{id}/{patient}", name="gestion_patientconstante_data_patient", options={"expose"=true})
     * @Method({"GET", "POST"})
     */
    public function dataAction(Request $request, Constante $constante, Patient $patient = null)
    {
        $annee = $request->query->get('annee');
        

        if ($constante->getValType() == 1) {
            $data = $this->getRepository(PatientConstante::class)->data($constante, $this->getPatient($patient, null), $annee);

            $result = [];
            $values = [];
    
           foreach ($data as $annee => $values) {
                $mois = array_column($values, 'mois');
                $valeurs = array_column($values, 'val_moy');
    
                $map = array_combine($mois, $valeurs);
    
                $result[$annee] = [];
    
                for ($i = 1; $i <= 12; $i++) {
                    if (!isset($map[$i])) {
                        $result[$annee][] = 0;
                    } else {
                       $result[$annee][] = intval($map[$i]);
                    }
                }
            }
                
           
    
            return new JsonResponse($result);
        }


        $data = $this->getRepository(PatientConstante::class)->calendarData($constante, $this->getPatient($patient), $annee);
        
        return new JsonResponse($data);

      
    }


    /**
     * Creates a new patientConstante entity.
     *
     * @Route("/new/{id}", name="gestion_patientconstante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Constante $constante, Patient $patient = null)
    {
         $annee = $request->query->get('annee');
        $patientConstante = new PatientConstante();
        $patientConstante->setPatient($this->getPatient($patient));
        $patientConstante->setConstante($constante);
        $params = ['id' => $constante->getId(), 'annee' => $annee];
        $form = $this->createForm(PatientConstanteType::class, $patientConstante, [
                'action' => $this->generateUrl('gestion_patientconstante_new', $params),
                'method' => 'POST',
                'constante' => $constante
            ]);
        $form->handleRequest($request);

         

        $ajax = true;
        if ($form->isSubmitted()) {
            $response = [];
            //$params = [];
            $redirectRoute = 'gestion_patientconstante_show';
            $redirect = $this->generateUrl($redirectRoute, $params);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($patientConstante);
                $em->flush();
                $message       = 'Opération effectuée avec succès';
                $statut = 1;
                $this->addFlash('success', $message);
                $ajax = false;
            } else {
                $message = $this->get('app.form_error')->all($form);
                $statut = 0;
                $this->addFlash('warning', $message);
            }

            

            if ($request->isXmlHttpRequest()) {
                $response = compact('statut', 'message', 'redirect', 'ajax');
                return new JsonResponse($response);
            } else {
                
                if ($statut == 1) {
                    return $this->redirect($redirect);
                }
            }

        }


        return $this->render('gestion/patientconstante/new.html.twig', [
            'patientConstante' => $patientConstante,
            'constante' => $constante,
            'form' => $form->createView(),
        ]);
    }


    public function getPatient($patient = null, $request = null)
    {
        $_patient = $this->getUser()->getPatient();
        if ($this->isGranted('ROLE_MEDECIN')) {
            $_patient = $patient ? $patient : $this->getCurrentPatient($request);
        }
        return $patient && $_patient->isParentOf($patient) ? $patient: $_patient; 
    }

    /**
     * Finds and displays a patientConstante entity.
     *
     * @Route("/{id}/show", name="gestion_patientconstante_show")
     * @Method("GET")
     */
    public function showAction(Request $request, Constante $constante)
    {
        $em =  $this->getDoctrine()->getManager();
        $patient = $this->getPatient(null, $request);
        if ($this->isGranted('ROLE_MEDECIN')) {
            $patient = $patient ? $patient : $this->getCurrentPatient($request);
        }
        $annees = range($this->getRepository(PatientConstante::class)->minYear($constante, $patient), date('Y'));
        $annee  = $request->query->get('annee');

        $constantes = $em->getRepository(Patient::class)->lastConstantes($patient, true);

        return $this->render('gestion/patientconstante/show.html.twig', [
            'constante'  => $constante,
            'constantes'  => $constantes,
            'patient' => $patient,
            'annee'   => $annee,
            'annees'  => $annees,
        ]);
    }

    public function getCurrentPatient(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository(Patient::class)->find($request->getSession()->get('patient'));
    }

    /**
     * Displays a form to edit an existing patientConstante entity.
     *
     * @Route("/{id}/edit", name="gestion_patientconstante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PatientConstante $patientConstante)
    {
        //$deleteForm = $this->createDeleteForm($patientConstante);
        $form = $this->createForm(PatientConstanteType::class, $patientConstante, [
                'action' => $this->generateUrl('gestion_patientconstante_edit', ['id' => $patientConstante->getId()]),
                'method' => 'POST',
            ]);
        $form->handleRequest($request);
       
        if ($form->isSubmitted()) {
            $response = [];
            $params = [];
            $redirectRoute = 'gestion_patientconstante_index';
            $redirect = $this->generateUrl($redirectRoute, $params);
            if ($form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
                $message       = 'Opération effectuée avec succès';
                $statut = 1;
                $this->addFlash('success', $message);
            } else {
                $message = $this->get('app.form_error')->all($form);
                $statut = 0;
                $this->addFlash('warning', $message);
            }


            if ($request->isXmlHttpRequest()) {
                $response = compact('statut', 'message', 'redirect');
                return new JsonResponse($response);
            } else {
                if ($statut == 1) {
                    return $this->redirect($redirect);
                }
            }

            
        }

        return $this->render('gestion/patientconstante/edit.html.twig', [
            'patientConstante' => $patientConstante,
            'form' => $form->createView()
        ]);
    }

    /**
     * Deletes a patientConstante entity.
     *
     * @Route("/{id}/delete", name="gestion_patientconstante_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, PatientConstante $patientConstante)
    {
        $form = $this->createDeleteForm($patientConstante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($patientConstante);
            $em->flush();

            $redirect = $this->generateUrl('gestion_patientconstante_index');

            $message = 'Opération effectuée avec succès';

            $response = [
                'statut'   => 1,
                'message'  => $message,
                'redirect' => $redirect,
            ];

            $this->addFlash('success', $message);

            if (!$request->isXmlHttpRequest()) {
                return $this->redirect($redirect);
            } else {
                return new JsonResponse($response);
            }
        }

        return $this->render('gestion/patientconstante/delete.html.twig', [
            'patientConstante' => $patientConstante,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Creates a form to delete a patientConstante entity.
     *
     * @param PatientConstante $patientConstante The patientConstante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PatientConstante $patientConstante)
    {
        return $this->createFormBuilder()
            ->setAction(
                $this->generateUrl(
                'gestion_patientconstante_delete'
                ,   [
                        'id' => $patientConstante->getId()
                    ]
                )
            )
            ->setMethod('DELETE')
            ->getForm()
        ;
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
     * Deletes a patientConstante entity.
     *
     * @Route("/suivi-consultation-search", name="gestion_patientconstante_search")
     * @Method({"POST", "GET"})
     */
    public function searchAction(Request $request)
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
                        $nomComplet = $patient->getPersonne()->getNomComplet();

                        $personne   = $user->getPersonne();
                        $nom        = $user->getUsername();
                        $hopital    = $user->getHopital();

                        if ($personne->getNomComplet()) {
                            $nom = '(' . $personne->getNomComplet() . ')';
                        }

                        $smsManager = $this->get('app.ps_sms');

                        $message    = sprintf("Votre historique médical est entrain d'être consulté par le Medecin %s ", $nom);

                        if ($assurance) {
                            $label = $assurance ? $assurance->getNom() : $hopital->getNom();
                            $message    = sprintf("Votre historique médical est entrain d'être consulté par le Medecin conseil de l'assurance %s", $label);
                        } else {
                            $label = $assurance ? $assurance->getNom() : $hopital->getNom();
                            $message   = sprintf("Votre historique médical est entrain d'être consulté par le Medecin %s de l'hopital ou du centre de Santé %s", $nom, $label);
                        }

                        $smsMtarget->sendSMS($contact, $message, null);

                        if ($patient->getFichePatientCancer()) {
                            $dossierCancer = $patient->getFichePatientCancer();
                            $numeroDossier = $dossierCancer->getNumeroDossier();
                            $message   = sprintf("Le historique médical du patient CNRAO \n%s\nNuméro dossier: %s\nest entrain d'être consulté par le Medecin %s de l'hopital ou du centre de Santé %s.", $nomComplet, $numeroDossier, $nom, $label);
                            $smsMtarget->sendSMS('0708289006', $message, null);
                        }
                    }
                    // dump($patient->getFichePatientCancer());
                    // die();
                    $session->set('patient', $patient->getId());

                    return $this->redirectToRoute('gestion_patientconstante_index');

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
}
