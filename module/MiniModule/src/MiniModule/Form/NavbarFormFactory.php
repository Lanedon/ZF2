<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MiniModule\Form;

use Zend\Form\Factory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Form\Form;

/**
 * Description of NavbarFormFactory
 *
 * @author Julien
 */
class NavbarFormFactory implements  FactoryInterface {
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $config = $serviceLocator->get('navbar_config_form');
        $factory = new Factory();
        $form = $factory->createForm( $config );
        return $form;
    }
}
