<?php

namespace Partage\PartageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Partage\PartageBundle\Entity\Atelier;
use Partage\PartageBundle\Form\AtelierType;
use Partage\PartageBundle\Entity\StatutAtelier;

/**
* Atelier controller.
*
* @Route("/atelier")
*/
class AtelierController extends Controller
{
  /**
 * Lists all Atelier entities.
 *
 * @Route("/liste", name="atelier_index")
 * @Method("GET")
 */
 public function indexAction()
 {
   $em = $this->getDoctrine()->getManager();
   $atelier = $em->getRepository('PartagePartageBundle:Atelier')->findBy(array('available'=> 1));

     return $this->render('PartagePartageBundle:atelier:indexAtelier.html.twig', array(
       'atelier' => $atelier,
     ));

 }

  /**
   * Creates a new Atelier entity.
   *
   * @Route("/new", name="atelier_new")
   * @Method({"GET", "POST"})
   */
   public function newAction(Request $request)
   {
     $atelier = new Atelier();
     $form = $this->createForm('Partage\PartageBundle\Form\AtelierType', $atelier);
     $form->handleRequest($request);
     $user = $this->getUser();
     $user->getId();
     $atelier->setUser($user);
     if ($form->isSubmitted() && $form->isValid()) {
      $atelier->setAvailable(true);
       $em = $this->getDoctrine()->getManager();
       $em->persist($atelier);
       $em->flush();
       return $this->redirectToRoute('atelier_index');
     }
     return $this->render('PartagePartageBundle:atelier:new.html.twig', array(
       'atelier' => $atelier,
       'form' => $form->createView(),
     ));
   }

   /**
  * @Route("/atelier/accepte/{id}", name="atelier_accepte")
  * @Method("GET")
* le cuisinier accepte
  */
  public function atelierAccepteAction(Request $request, Atelier $atelier)
  {
    $statut = new StatutAtelier();
    $user = $this->getDoctrine()->getManager()->getRepository('PartagePartageBundle:Users')->find($atelier->getId());
    $statut->setUser($user);
    $statut->setStatut('Accepte');
    $statut->setAtelier($atelier);

    $userId = $this->getUser();
    $userId->getId();
    $statut->setUser($userId);
    $statut->setAtelier($atelier);
    $atelier->setAvailable(false);

    $em = $this->getDoctrine()->getManager();
    $em->persist($statut);
    $em->persist($atelier);
    $em->flush();

    return $this->render('PartagePartageBundle:Default:atelierAccepte.html.twig',  array('id' => $atelier->getId()
  ));
}



/**
* @Route("/atelier/refuse/{id}", name="atelier_refuse")
* @Method("GET")
* Le particulier refuse l'atelier
*/
public function atelierRefuseAction(Request $request, Atelier $atelier)
{
  $statut = new StatutAtelier();
  $user = $this->getDoctrine()->getManager()->getRepository('PartagePartageBundle:Users')->find($atelier->getId());
  $statut->setUser($user);
  $statut->setStatut('Refuse');
  $statut->setAtelier($atelier);

  $userId = $this->getUser();
  $userId->getId();
  $statut->setUser($userId);
  $statut->setAtelier($atelier);

  $em = $this->getDoctrine()->getManager();
  $em->persist($statut);
  $em->flush();
  return $this->render('PartagePartageBundle:Default:atelierRefuse.html.twig',  array(
    'id' => $atelier->getId(),
  ));
}

/**
* Displays a form to edit an existing Dons entity.
*
* @Route("/{id}/edit", name="atelier_edit")
* @Method({"GET", "POST"})
*/
public function editAction(Request $request, Atelier $atelier)
{
  $deleteForm = $this->createDeleteForm($atelier);
  $editForm = $this->createForm('Partage\PartageBundle\Form\AtelierType', $atelier);
  $editForm->handleRequest($request);
  if ($editForm->isSubmitted() && $editForm->isValid()) {
    $em = $this->getDoctrine()->getManager();
    $em->persist($atelier);
    $em->flush();
    return $this->redirectToRoute('accueil');
  }
  return $this->render('PartagePartageBundle:atelier:edit.html.twig', array(
    'atelier' => $atelier,
    'edit_form' => $editForm->createView(),
    'delete_form' => $deleteForm->createView(),
  ));
}


/**
* Deletes a Atelier entity.
*
* @Route("/delete/{id}/", name="atelier_delete")
* @Method({"GET","DELETE"})
*/
public function deleteAction(Atelier $atelier)
{


    $em = $this->getDoctrine()->getManager();
    $em->remove($atelier);
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
private function createDeleteForm(Atelier $atelier)
{
  return $this->createFormBuilder()
  ->setAction($this->generateUrl('atelier_delete', array('id' => $atelier->getId())))
  ->setMethod('DELETE')
  ->getForm()
  ;
}

/**
     * @Route("/accept/", name="accept")
     */
    public function choixCuisinier()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $choix = $em->getRepository('PartagePartageBundle:StatutAtelier')
            ->findBy(array('user' => $user, 'statut' => 'Accepte'));
        return $this->render(
            'PartagePartageBundle:atelier:accept.html.twig',
            array(
                'choix' => $choix,
            )
        );
    }


}
