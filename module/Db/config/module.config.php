<?php

return array(
    'doctrine' => array(
        'fixture' => array(
            'Db_fixture' => __DIR__ . '/../src/Db/Fixture',
        ),
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
