<?php
 
namespace Hello\FormationBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hello\FormationBundle\Entity\Module;
use Hello\FormationBundle\Form\ModuleType;
use Symfony\Component\HttpFoundation\Request;
 
class ManagerFormModuleController extends Controller
{
  public function creerAction(Request $request)
  {
    $module=new Module();
 
    $form = $this->createFormBuilder($module)
      ->add('nomM', 'text',array('label'=>'Nom module'))
      ->add('dateDebut','date',array('label'=>'Date début','format'=>'dd/MM/yyyy'))
      ->add('duree','integer',array('invalid_message'=>'Saisir un entier'))
      ->add('Ajouter', 'submit')
      ->getForm();
 
    $form->handleRequest($request);
 
    if ($form->isValid()) {
       $em=$this->getDoctrine()->getManager();
       $em->persist($module);
       $em->flush();
 
    return $this->redirect($this->generateUrl('module_creer_form'));
    }
 
 
    return $this->render('HelloFormationBundle:Module:form.html.twig', array(
      'form' => $form->createView()));
  }
  
   public function modifierAction($id)
    {
       $em = $this->getDoctrine()->getManager();
       $module = $em->getRepository('HelloFormationBundle:Module')->find($id);
 
       if (!$module) {
           throw $this->createNotFoundException(
               'Aucun module trouvé pour cet id : '.$id
           );
       }
 
       $form = $this->createForm(new ModuleType(), $module);
      // $em->flush();
 
      // return $this->redirect($this->generateUrl('module_liste'));
      return $this->render('HelloFormationBundle:Module:form.html.twig', array(
        'form' => $form->createView()));
    }
}
?>