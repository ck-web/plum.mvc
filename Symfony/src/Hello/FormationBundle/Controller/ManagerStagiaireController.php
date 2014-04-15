<?php
 
namespace Hello\FormationBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
use Hello\FormationBundle\Entity\Stagiaire;
use Hello\FormationBundle\Entity\Module;
 
class ManagerStagiaireController extends Controller
{
    public function indexAction()
    {
		$message="Bienvenue sur le manager Stagiaire";
        return $this->render('HelloFormationBundle:Default:index.html.twig', array('message' => $message));
    }
 
	public function creerAction()
	{
		$em = $this->getDoctrine()->getManager();
		$module = $em->getRepository('HelloFormationBundle:Module')->find(1);
		
		$stagiaire=new Stagiaire();
		$stagiaire->setModule($module);
		$stagiaire->setNom("Stagiaire");
		$stagiaire->setPrenom("Stagiaire");
		$stagiaire->setAge(18);
		$em=$this->getDoctrine()->getManager();
		$em->persist($stagiaire); //Demande à Doctrine de gérer l'objet
 
		$em->flush(); //Mémorisation dans la table stagiaire
 
		return new Response("Le stagiaire ".$stagiaire->getId()." a été créé");
	}
	
	public function modifierAction($id,$nouveauNom)
    {
       $em = $this->getDoctrine()->getManager();
       $stagiaire = $em->getRepository('HelloFormationBundle:Stagiaire')->find($id);
 
       if (!$stagiaire) {
           throw $this->createNotFoundException(
               'Aucun stagiaire trouvé pour cet id : '.$id
           );
       }
 
       $stagiaire->setNom($nouveauNom);
       $em->flush();
 
       return $this->redirect($this->generateUrl('stagiaire_liste'));
    }
	
	public function supprimerAction($id)
    {
	   $em = $this->getDoctrine()->getManager();
	   $stagiaire = $em->getRepository('HelloFormationBundle:Stagiaire')->find($id);
	   
       $em->remove($stagiaire);
       $em->flush();
	   
	   return $this->redirect($this->generateUrl('stagiaire_liste'));
    }
	
	public function listerAction()
    {
       $em = $this->getDoctrine()->getManager();
       $stagiaires = $em->getRepository('HelloFormationBundle:Stagiaire')->findAll();
 
       if (!$stagiaires) {
           throw $this->createNotFoundException(
               'Aucun stagiaire trouvé'
           );
       }
 
       return $this->render('HelloFormationBundle:Stagiaire:liste.html.twig', array('stagiaires' => $stagiaires));
    }
}