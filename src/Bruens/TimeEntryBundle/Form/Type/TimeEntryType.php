<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Bruens\TimeEntryBundle\Form\Type;

/**
 * Description of CompanyType
 *
 * @author berjan
 */
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TimeEntryType extends AbstractType {

    //put your code here
    public function buildForm(FormBuilder $builder, array $options) {

        $builder->add('description');
        $builder->add('off', 'time', array('widget'=>'single_text', 'input' => 'datetime'));
        $builder->add('till', 'time', array('widget'=>'single_text', 'input' => 'datetime'));
        $builder->add('date_entry', 'date', array('widget'=>'single_text', 'input' => 'datetime', 'format' => "dd-M-yyyy"));
    }

    public function getName() {
        return 'time_entry';
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Bruens\TimeEntryBundle\Entity\TimeEntry',
            'csrf_protection' => false,
            'csrf_field_name' => '_token',
            // a unique key to help generate the secret token
            'intention'       => 'task_item',
        );
    }

}

?>
