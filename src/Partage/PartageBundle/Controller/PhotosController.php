<?php

namespace Partage\PartageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\HttpFoundation\Request;
use Partage\PartageBundle\Entity\Photos;
use Partage\PartageBundle\Entity\Atelier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class PhotosController extends Controller
{

    /**
     * @Route("/galerie")
     */

    public function GalerieAction()
    {

        $em = $this->getDoctrine()->getManager();
        $atelier = $em->getRepository('PartagePartageBundle:Atelier')->findAll();

        return $this->render('PartagePartageBundle:Photos:galerie.html.twig', array(
            'atelier' => $atelier,
        ));


    }

    /**
     * @Route("/voir/{id}", name="voir")
     * @Method({"GET", "POST" })
     */

    public function PhotoAtelierAction($id,Request $request, Atelier $atelier)
    {

        $atelier = $this->getDoctrine()->getRepository(Atelier::class)->find($id);
        $photos = new Photos();

        $form = $this->createFormBuilder($photos)
            ->add('imageFile', VichImageType::class, array('label' => 'Photo', 'required' => false))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $photos->setAtelier($atelier);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($photos);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }
        // Create the form view
        $photoos = $this->getDoctrine()->getRepository(Photos::class)->findBy(['atelier'=>$atelier]);
        return $this->render('PartagePartageBundle:Photos:photoatelier.html.twig', array(
            'form' => $form->createView(),
            'galeriephoto' => $photoos,
        ));


    }
    /**
    * Deletes a Photos entity.
    *
    * @Route("/delete/{id}/", name="photos_delete")
    * @Method({"GET","DELETE"})
    */
    public function deleteAction(Photos $photos)
    {


        $em = $this->getDoctrine()->getManager();
        $em->remove($photos);
        $em->flush();

      return $this->redirectToRoute('accueil');
    }

      /**
    * Creates a form to delete a Atelier entity.
    *
    * @param Atelier $atelier The Atelier entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createDeleteForm(Photos $photos)
    {
      return $this->createFormBuilder()
      ->setAction($this->generateUrl('photos_delete', array('id' => $photos->getId())))
      ->setMethod('DELETE')
      ->getForm()
      ;
    }


  }
