<?php 
return array(
    'elements' => array(
        // la saisie du login (type text)
        array(
            'spec' => array(
                'type' => 'Zend\Form\Element\Text',
                'name' => 'login',
                
                'attributes' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Login...'
                ),
            ),
        ),
        // le boutton de validation
        array(
            'spec' => array(
                'type' => 'Zend\Form\Element\Submit',
                'name' => 'submit',
                
                'attributes' => array(
                    'value' => 'Se connecter',
                    'class' => 'btn btn-primary',
                    'style' => 'margin-left: 20px'
                ),
            ),
        ),
    ),
    /*'input_filter' => array(
        'login' => array(
            'validators' => array(
                array(
                    'name' => 'Zend\I18n\Validator\Alpha',
                ),
            ),
            'filters' => array(
                array(
                  'name' => 'Zend\I18n\Filter\Alpha'
                ),
            ),
        ),
    ),*/
);