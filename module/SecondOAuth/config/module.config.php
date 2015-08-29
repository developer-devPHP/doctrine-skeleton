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
);
