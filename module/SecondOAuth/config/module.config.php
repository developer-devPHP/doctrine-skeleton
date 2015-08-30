<?php

return array(
    'doctrine' => array(
        'driver' => array(
            'second_oauth_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => array(
                    0 => __DIR__ . '/orm',
                ),
            ),
            'orm_default' => array(
                'drivers' => array(
                    'SecondOAuth\Entity' => 'second_oauth_driver',
                ),
            ),
        ),
    ),

    'controllers' => array(
        'factories' => array(
            'SecondOAuth\Controller\Auth' => 'SecondOAuth\Controller\AuthControllerFactory',
        ),
    ),

    'router' => array(
        'routes' => array(
            'second-oauth' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/second-oauth',
                    'defaults' => array(
                        'controller' => 'SecondOAuth\Controller\Auth',
                        'action'     => 'token',
                    ),
                ),
            ),
        ),
    ),

    'service_manager' => [
        'factories' => [
            'SecondOAuth\Service\OAuth2Server'  => 'SecondOAuth\Factory\OAuth2ServerFactory'
        ],
    ],
);
