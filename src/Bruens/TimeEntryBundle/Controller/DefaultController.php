<?php

namespace Bruens\TimeEntryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    
    public function indexAction(Request $request)
    {
         $time_entry = new \Bruens\TimeEntryBundle\Entity\TimeEntry();
//        $company->setName("Bruens IT");
        $form = $this->createForm(new \Bruens\TimeEntryBundle\Form\Type\TimeEntryType(), $time_entry);
        $labels = array('test' => 1, 'test2'=>2);
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
//$company = $form->getData();
//print_r($company);
            if ($form->isValid()) {
                $company = $form->getData();
                // perform some action, such as saving the task to the database
                // 
               $user = $this->get('security.context')->getToken()->getUser();
                $em = $this->getDoctrine()->getEntityManager();
                $test = $em->getRepository('BruensTimeEntryBundle:TimeEntry')
                        ->save($time_entry, $user);
//                $em->persist($company);
//                $em->flush();
                 //return $this->redirect($this->generateUrl('BruensCompanyBundle_success'));
            }else{
                echo "form is not valid";
            }
        }
        
        return $this->render('BruensTimeEntryBundle:Default:index.html.twig', array(
                    'form' => $form->createView(),'labels' => $labels,
                ));
        
    }
}
