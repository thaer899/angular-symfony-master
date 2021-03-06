<?php

namespace AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Description of Administrator
 *
 * @author thaer
 */
class SpecialityAdmin extends Admin {

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('title')
            ->add('description')
                ->add('image')
                ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
   ->add('id')
   ->add('title')
            ->add('description')
             ->add('image') 
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
     ->add('id')
     ->add('title')
            ->add('description')
              ->add('image')
                ->add('_action', 'actions', array(
                    'actions' => array(
                         'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }


}
