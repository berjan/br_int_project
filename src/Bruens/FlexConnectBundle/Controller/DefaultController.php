<?php

namespace Bruens\FlexConnectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('BruensFlexConnectBundle:Default:index.html.twig', array('name' => $name));
    }
}
