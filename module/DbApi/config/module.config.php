<?php
return array(
    'router' => array(
        'routes' => array(
            'db-api.rest.doctrine.artist' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/artist[/:artist_id]',
                    'defaults' => array(
                        'controller' => 'DbApi\\V1\\Rest\\Artist\\Controller',
                    ),
                ),
            ),
            'db-api.rest.doctrine.album' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/album[/:album_id]',
                    'defaults' => array(
                        'controller' => 'DbApi\\V1\\Rest\\Album\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'db-api.rest.doctrine.artist',
            1 => 'db-api.rest.doctrine.album',
        ),
    ),
    'zf-rest' => array(
        'DbApi\\V1\\Rest\\Artist\\Controller' => array(
            'listener' => 'DbApi\\V1\\Rest\\Artist\\ArtistResource',
            'route_name' => 'db-api.rest.doctrine.artist',
            'route_identifier_name' => 'artist_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'artist',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Db\\Entity\\Artist',
            'collection_class' => 'DbApi\\V1\\Rest\\Artist\\ArtistCollection',
            'service_name' => 'Artist',
        ),
        'DbApi\\V1\\Rest\\Album\\Controller' => array(
            'listener' => 'DbApi\\V1\\Rest\\Album\\AlbumResource',
            'route_name' => 'db-api.rest.doctrine.album',
            'route_identifier_name' => 'album_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'album',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Db\\Entity\\Album',
            'collection_class' => 'DbApi\\V1\\Rest\\Album\\AlbumCollection',
            'service_name' => 'Album',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'DbApi\\V1\\Rest\\Artist\\Controller' => 'HalJson',
            'DbApi\\V1\\Rest\\Album\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'DbApi\\V1\\Rest\\Artist\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\Album\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'DbApi\\V1\\Rest\\Artist\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ),
            'DbApi\\V1\\Rest\\Album\\Controller' => array(
                0 => 'application/vnd.db-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Db\\Entity\\Artist' => array(
                'route_identifier_name' => 'artist_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.artist',
                'hydrator' => 'DbApi\\V1\\Rest\\Artist\\ArtistHydrator',
            ),
            'DbApi\\V1\\Rest\\Artist\\ArtistCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.artist',
                'is_collection' => true,
            ),
            'Db\\Entity\\Album' => array(
                'route_identifier_name' => 'album_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.album',
                'hydrator' => 'DbApi\\V1\\Rest\\Album\\AlbumHydrator',
            ),
            'DbApi\\V1\\Rest\\Album\\AlbumCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'db-api.rest.doctrine.album',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'DbApi\\V1\\Rest\\Artist\\ArtistResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbApi\\V1\\Rest\\Artist\\ArtistHydrator',
            ),
            'DbApi\\V1\\Rest\\Album\\AlbumResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'DbApi\\V1\\Rest\\Album\\AlbumHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'DbApi\\V1\\Rest\\Artist\\ArtistHydrator' => array(
            'entity_class' => 'Db\\Entity\\Artist',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'DbApi\\V1\\Rest\\Album\\AlbumHydrator' => array(
            'entity_class' => 'Db\\Entity\\Album',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'DbApi\\V1\\Rest\\Artist\\Controller' => array(
            'input_filter' => 'DbApi\\V1\\Rest\\Artist\\Validator',
        ),
        'DbApi\\V1\\Rest\\Album\\Controller' => array(
            'input_filter' => 'DbApi\\V1\\Rest\\Album\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'DbApi\\V1\\Rest\\Artist\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'DbApi\\V1\\Rest\\Album\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
    ),
);
