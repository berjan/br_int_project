<?php

namespace Bruens\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BruensDashboardBundle:Default:index.html.twig');
    }
}
