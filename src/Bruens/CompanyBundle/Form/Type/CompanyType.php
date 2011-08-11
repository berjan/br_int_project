<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Bruens\CompanyBundle\Form\Type;

/**
 * Description of CompanyType
 *
 * @author berjan
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CompanyType extends AbstractType {

    //put your code here
    public function buildForm(FormBuilder $builder, array $options) {

        $builder->add('name');
    }

    public function getName() {
        return 'company';
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Bruens\CompanyBundle\Entity\Company',
            'csrf_protection' => false,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'task_item',
        );
    }

}

?>
