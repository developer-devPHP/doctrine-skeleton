<?php
return array(
    'zf-mvc-auth' => array(
        'authentication' => array(
            'adapters' => array(
                'oauth2_doctrine' => array(
                    'adapter' => 'ZF\\MvcAuth\\Authentication\\OAuth2Adapter',
                    'storage' => array(
                        'storage' => 'oauth2.doctrineadapter.default',
                        'route' => 'oauth',
                    ),
                ),
                'oauth2_doctrine_second' => array(
                    'adapter' => 'ZF\\MvcAuth\\Authentication\\OAuth2Adapter',
                    'storage' => array(
                        'storage' => 'oauth2.doctrineadapter.second',
                        'route' => 'oauth-second',
                    ),
                ),
            ),
            'map' => array(
                'DbApi\\V1' => 'oauth2_doctrine',
            ),
        ),
    ),
    'zf-oauth2' => array(
        'allow_implicit' => false,
        'access_lifetime' => 3600,
        'enforce_state' => true,
        'storage' => 'oauth2.doctrineadapter.default',
    ),
);
