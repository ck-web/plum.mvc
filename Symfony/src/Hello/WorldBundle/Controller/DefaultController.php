<?php

namespace Hello\WorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HelloWorldBundle:Default:index.html.twig', array('name' => $name));
    }
}
