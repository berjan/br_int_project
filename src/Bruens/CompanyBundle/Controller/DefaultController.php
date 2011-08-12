<?php

namespace Bruens\CompanyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bruens\CompanyBundle\Entity\Company;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormBuilder;

class DefaultController extends Controller {

    public function indexAction() {
        $company = new Company();
        
        
        $form = $this->createForm(new \Bruens\CompanyBundle\Form\Type\CompanyType(), $company);

        return $this->render('BruensCompanyBundle:Default:index.html.twig', array(
                    'form' => $form->createView(),
                ));
    }

    public function newAction(Request $request) {
       $company = new Company();
//        $company->setName("Bruens IT");
        $form = $this->createForm(new \Bruens\CompanyBundle\Form\Type\CompanyType(), $company);
       
        
        
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
                $test = $em->getRepository('BruensCompanyBundle:Company')
                        ->save($company, $user);
//                $em->persist($company);
//                $em->flush();
                 //return $this->redirect($this->generateUrl('BruensCompanyBundle_success'));
            }else{
                echo "form is not valid";
            }
        }
        return $this->render('BruensCompanyBundle:Default:new.html.twig', array(
                    'form' => $form->createView(),
                ));
        //return $this->render('BruensCompanyBundle:Default:new.html.twig');
    }
    
    public function successAction() {
        return $this->render('BruensCompanyBundle:Default:success.html.twig');
    }

}
