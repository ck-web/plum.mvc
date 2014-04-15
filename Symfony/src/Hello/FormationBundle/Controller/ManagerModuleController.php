<?php
 
namespace Hello\FormationBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
use Hello\FormationBundle\Entity\Module;
 
class ManagerModuleController extends Controller
{
    public function indexAction()
    {
	$message="Bienvenu sur le manager Module";
        return $this->render('HelloFormationBundle:Default:index.html.twig', array('message' => $message));
    }
 
	public function creerAction()
	{
		$module=new Module();
		$module->setNomM("Symfony");
		$module->setDuree(2);
		$module->setDateDebut(new \DateTime('2013-06-17')); //objet DateTime de PHP
		$em=$this->getDoctrine()->getManager();
		$em->persist($module); //Demande à Doctrine de gérer l'objet
 
		$em->flush(); //Mémorisation dans la table Module
 
		return new Response("Le module ".$module->getId()." a été créé");
	}
	
	public function afficherAction($id)
	{
	  $module = $this->getDoctrine()
	  ->getRepository('HelloFormationBundle:Module')
	  ->find($id);
	 
	  if (!$module) {
		throw $this->createNotFoundException(
		'Aucun module trouvé pour cet id : '.$id);
	  }
	 
	  //un template est de la forme :namespace:répertoire:nom.type_fichier.twig
	  return $this->render('HelloFormationBundle:Module:info.html.twig', 
			 array('id' => $module->getId(),
		 'nomM' => $module->getnomM(),
		 'dateDebut' => $module->getDateDebut()->format('d/m/Y'),
		 'duree' => $module->getDuree(),)
		 );
	}
	
	public function modifierAction($id,$nouveauNom)
    {
       $em = $this->getDoctrine()->getManager();
       $module = $em->getRepository('HelloFormationBundle:Module')->find($id);
 
       if (!$module) {
           throw $this->createNotFoundException(
               'Aucun module trouvé pour cet id : '.$id
           );
       }
 
       $module->setnomM($nouveauNom);
       $em->flush();
 
       return $this->redirect($this->generateUrl('module_afficher',array('id' => $id)));
    }
	
	public function supprimerAction($id)
    {
	   $em = $this->getDoctrine()->getManager();
	   $module = $em->getRepository('HelloFormationBundle:Module')->find($id);
	   
       $em->remove($module);
       $em->flush();
	   
	   return $this->redirect($this->generateUrl('module_liste'));
    }
	
	public function listerAction()
    {
       $em = $this->getDoctrine()->getManager();
       $modules = $em->getRepository('HelloFormationBundle:Module')->findAll();
 
       if (!$modules) {
           throw $this->createNotFoundException(
               'Aucun module trouvé'
           );
       }
 
       return $this->render('HelloFormationBundle:Module:liste.html.twig', array('modules' => $modules));
    }
}