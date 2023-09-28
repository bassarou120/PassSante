<?php

namespace PS\GestionBundle\Controller;

use PS\GestionBundle\Entity\FichePatientCancer;
use PS\GstionBundle\Form\FichePatientCancerType;
use PS\GestionBundle\Repository\FichePatientCancerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gestion/bundle/fiche/patient/cancer")
 */
class FichePatientCancerController extends AbstractController
{
    /**
     * @Route("/", name="app_gestion_bundle_fiche_patient_cancer_index", methods={"GET"})
     */
    public function index(FichePatientCancerRepository $fichePatientCancerRepository): Response
    {
        return $this->render('gestion_bundle/fiche_patient_cancer/index.html.twig', [
            'fiche_patient_cancers' => $fichePatientCancerRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_gestion_bundle_fiche_patient_cancer_new", methods={"GET", "POST"})
     */
    public function new(Request $request, FichePatientCancerRepository $fichePatientCancerRepository): Response
    {
        $fichePatientCancer = new FichePatientCancer();
        $form = $this->createForm(FichePatientCancerType::class, $fichePatientCancer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fichePatientCancerRepository->add($fichePatientCancer);
            return $this->redirectToRoute('app_gestion_bundle_fiche_patient_cancer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_bundle/fiche_patient_cancer/new.html.twig', [
            'fiche_patient_cancer' => $fichePatientCancer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_bundle_fiche_patient_cancer_show", methods={"GET"})
     */
    public function show(FichePatientCancer $fichePatientCancer): Response
    {
        return $this->render('gestion_bundle/fiche_patient_cancer/show.html.twig', [
            'fiche_patient_cancer' => $fichePatientCancer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_gestion_bundle_fiche_patient_cancer_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, FichePatientCancer $fichePatientCancer, FichePatientCancerRepository $fichePatientCancerRepository): Response
    {
        $form = $this->createForm(FichePatientCancerType::class, $fichePatientCancer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fichePatientCancerRepository->add($fichePatientCancer);
            return $this->redirectToRoute('app_gestion_bundle_fiche_patient_cancer_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_bundle/fiche_patient_cancer/edit.html.twig', [
            'fiche_patient_cancer' => $fichePatientCancer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_bundle_fiche_patient_cancer_delete", methods={"POST"})
     */
    public function delete(Request $request, FichePatientCancer $fichePatientCancer, FichePatientCancerRepository $fichePatientCancerRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fichePatientCancer->getId(), $request->request->get('_token'))) {
            $fichePatientCancerRepository->remove($fichePatientCancer);
        }

        return $this->redirectToRoute('app_gestion_bundle_fiche_patient_cancer_index', [], Response::HTTP_SEE_OTHER);
    }
}
