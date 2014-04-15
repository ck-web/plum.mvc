<?php

namespace Hello\FormationBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class DefaultController extends Controller
{
    public function indexAction()
    {
	$message="Bienvenue sur l'application FORMATION";
        return $this->render('HelloFormationBundle:Default:index.html.twig', array('message' => $message));
    }
}
