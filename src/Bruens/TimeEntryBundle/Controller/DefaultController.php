<?php

namespace Bruens\TimeEntryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('BruensTimeEntryBundle:Default:index.html.twig');
    }
}
