<?php
namespace MiniModule\Element;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Zend\InputFilter\InputProviderInterface;
use Zend\Form\Element;
use Zend\Form\Form;
/**
 * Description of Login
 *
 * @author Julien
 */
class Login extends Element\Text implements InputProviderInterface {
    public function __construct() {
        $options = array(
            'label' => 'Login : ',
        );
        parent::__construct('login');
        $this->setOptions($options);
        $this->setLabel('Login :');
        $this->setAttribute('size', 20);
    }
    
    public function getInputSpecification() {
        return array(
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\Alpha',
                ),
            ),
            'filters' => array(
                array(
                  'name' => 'Zend\I18n\Filter\Alpha'
                ),
            )
        );
    }
}
