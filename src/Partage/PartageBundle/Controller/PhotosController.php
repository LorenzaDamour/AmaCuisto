<?php

namespace Partage\PartageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\HttpFoundation\Request;
use Partage\PartageBundle\Entity\Photos;

class PhotosController extends Controller
{
  /**
   * @Route("/photos", name="photos")
   */
  public function PhotosAction(Request $request){
    $photos = new Photos();
    $form = $this->createFormBuilder($photos)
    ->add('imageFile', VichImageType::class, array('label' => 'Photo','required' => false))
        ->getForm();

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      // Get connected user
      $user = $this->get('security.token_storage')->getToken()->getUser();


      $em = $this->getDoctrine()->getEntityManager();
      $em->persist($photos);
      $em->flush();
      return $this->redirectToRoute('accueil');
    }
    // Create the form view
    return $this->render('PartagePartageBundle:Photos:photos.html.twig', array(
      'form' => $form->createView(),
    ));


  }
  /**
 * @Route("/galerie")
 */

 public function GalerieAction()
 {

$photos = $this->getDoctrine()->getRepository(Photos::class)->findAll();
return $this->render('PartagePartageBundle:Photos:galerie.html.twig', array(
  'galeriephoto' => $photos,

));


 }

}
