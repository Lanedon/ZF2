<?php

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'MiniModule\Controller\Index',
                        'action' => 'index'
                    )
                )
            ),
            'default' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                  'route' => '/:action',
                    'constraints' => array(),
                    'defaults' => array(
                        'controller' => 'MiniModule\Controller\Index',
                        'action' => 'index'
                    ),
                ),
            ),
        )
    ),

    'view_manager' => array(
        'template_map' => array(
            '404' => __DIR__ . '/../view/404.phtml',
            'error' => __DIR__ . '/../view/error.phtml',
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'layout/layoutForm' => __DIR__ . '/../view/layout/layoutForm.phtml',

            'mini-module/index/index' => __DIR__ . '/../view/index/index.phtml',
            'mini-module/index/form' => __DIR__ . '/../view/index/form.phtml',
            'mini-module/index/traite' => __DIR__ . '/../view/index/traite.phtml',
            'mini-module/index/formauth' => __DIR__ . '/../view/index/formauth.phtml'

        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'MiniModule\Controller\Index' => 'MiniModule\Controller\IndexController',
        )
    ),
    
    'service_manager' => array(
        'factories' => array(
            'MiniModule\Form\Authentification' => 'MiniModule\Form\AuthentificationFormFactory',
            'MiniModule\Form\Navbar' => 'MiniModule\Form\NavbarFormFactory',

        ),
        'services' => array (
            'config_authentification_form' => include __DIR__.'/authentification.form.config.php',
            'navbar_config_form' => include __DIR__.'/navbar.form.config.php'
        ),
    ),
    
);