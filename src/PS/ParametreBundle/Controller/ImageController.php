<?php

namespace PS\ParametreBundle\Controller;

use PS\ParametreBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PS\GestionBundle\Service\RowAction;

/**
 * Image controller.
 *
 */
class ImageController extends Controller
{
    /**
     * Lists all image entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $liste_images = $em->getRepository('ParametreBundle:Image')->findAll();

        $images  = $this->get('knp_paginator')->paginate(
            $liste_images,
            $request->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('image/index.html.twig', array(
            'images' => $images,
        ));
    }

    /**
     * Creates a new image entity.
     *
     */
    public function newAction(Request $request)
    {
        $image = new Image();
        $form = $this->createForm('PS\ParametreBundle\Form\ImageType', $image, array(
            'action' => $this->generateUrl('admin_parametre_image_new'),
            'method' => 'POST'
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();

            return $this->redirectToRoute('admin_parametre_image_index');
        }

        return $this->render('image/new.html.twig', array(
            'image' => $image,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a image entity.
     *
     */
    public function showAction(Image $image)
    {
        $showForm = $this->createForm('PS\ParametreBundle\Form\ImageType', $image);

        $deleteForm = $this->createDeleteForm($image);

        return $this->render('image/show.html.twig', array(
            'image' => $image,
            'show_form' => $showForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing image entity.
     *
     */
    public function editAction(Request $request, Image $image)
    {
        $deleteForm = $this->createDeleteForm($image);
        $editForm = $this->createForm('PS\ParametreBundle\Form\ImageType', $image, array(
            'action' => $this->generateUrl('admin_parametre_image_edit', array('id' => $image->getId())),
            'method' => 'POST'
        ));
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_parametre_image_index');
        }

        return $this->render('image/edit.html.twig', array(
            'image' => $image,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a image entity.
     *
     */
    public function deleteAction(Request $request, Image $image)
    {
        $form = $this->createDeleteForm($image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();
        }

        return $this->redirectToRoute('admin_parametre_image_index');
    }

    /**
     * Creates a form to delete a image entity.
     *
     * @param Image $image The image entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Image $image)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_parametre_image_delete', array('id' => $image->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
