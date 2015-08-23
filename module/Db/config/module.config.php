<?php

return array(
    'doctrine' => array(
        'driver' => array(
            'db_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => array(
                    0 => __DIR__ . '/orm',
                ),
            ),
            'orm_default' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\DriverChain',
                'drivers' => array(
                    'Db\Entity' => 'db_driver',
                ),
            ),
        ),
    ),
);
