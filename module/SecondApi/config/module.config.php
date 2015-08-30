<?php
return array(
    'router' => array(
        'routes' => array(
            'second-api.rest.doctrine.second-artist' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/second-artist[/:second_artist_id]',
                    'defaults' => array(
                        'controller' => 'SecondApi\\V1\\Rest\\SecondArtist\\Controller',
                    ),
                ),
            ),
            'second-api.rest.doctrine.second-album' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/second-album[/:second_album_id]',
                    'defaults' => array(
                        'controller' => 'SecondApi\\V1\\Rest\\SecondAlbum\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'second-api.rest.doctrine.second-artist',
            1 => 'second-api.rest.doctrine.second-album',
        ),
    ),
    'zf-rest' => array(
        'SecondApi\\V1\\Rest\\SecondArtist\\Controller' => array(
            'listener' => 'SecondApi\\V1\\Rest\\SecondArtist\\SecondArtistResource',
            'route_name' => 'second-api.rest.doctrine.second-artist',
            'route_identifier_name' => 'second_artist_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'second_artist',
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
            'entity_class' => 'Db\\Entity\\SecondArtist',
            'collection_class' => 'SecondApi\\V1\\Rest\\SecondArtist\\SecondArtistCollection',
            'service_name' => 'SecondArtist',
        ),
        'SecondApi\\V1\\Rest\\SecondAlbum\\Controller' => array(
            'listener' => 'SecondApi\\V1\\Rest\\SecondAlbum\\SecondAlbumResource',
            'route_name' => 'second-api.rest.doctrine.second-album',
            'route_identifier_name' => 'second_album_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'second_album',
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
            'entity_class' => 'Db\\Entity\\SecondAlbum',
            'collection_class' => 'SecondApi\\V1\\Rest\\SecondAlbum\\SecondAlbumCollection',
            'service_name' => 'SecondAlbum',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'SecondApi\\V1\\Rest\\SecondArtist\\Controller' => 'HalJson',
            'SecondApi\\V1\\Rest\\SecondAlbum\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'SecondApi\\V1\\Rest\\SecondArtist\\Controller' => array(
                0 => 'application/vnd.second-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'SecondApi\\V1\\Rest\\SecondAlbum\\Controller' => array(
                0 => 'application/vnd.second-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'SecondApi\\V1\\Rest\\SecondArtist\\Controller' => array(
                0 => 'application/vnd.second-api.v1+json',
                1 => 'application/json',
            ),
            'SecondApi\\V1\\Rest\\SecondAlbum\\Controller' => array(
                0 => 'application/vnd.second-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Db\\Entity\\SecondArtist' => array(
                'route_identifier_name' => 'second_artist_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'second-api.rest.doctrine.second-artist',
                'hydrator' => 'SecondApi\\V1\\Rest\\SecondArtist\\SecondArtistHydrator',
            ),
            'SecondApi\\V1\\Rest\\SecondArtist\\SecondArtistCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'second-api.rest.doctrine.second-artist',
                'is_collection' => true,
            ),
            'Db\\Entity\\SecondAlbum' => array(
                'route_identifier_name' => 'second_album_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'second-api.rest.doctrine.second-album',
                'hydrator' => 'SecondApi\\V1\\Rest\\SecondAlbum\\SecondAlbumHydrator',
            ),
            'SecondApi\\V1\\Rest\\SecondAlbum\\SecondAlbumCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'second-api.rest.doctrine.second-album',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'SecondApi\\V1\\Rest\\SecondArtist\\SecondArtistResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'SecondApi\\V1\\Rest\\SecondArtist\\SecondArtistHydrator',
            ),
            'SecondApi\\V1\\Rest\\SecondAlbum\\SecondAlbumResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'SecondApi\\V1\\Rest\\SecondAlbum\\SecondAlbumHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'SecondApi\\V1\\Rest\\SecondArtist\\SecondArtistHydrator' => array(
            'entity_class' => 'Db\\Entity\\SecondArtist',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'SecondApi\\V1\\Rest\\SecondAlbum\\SecondAlbumHydrator' => array(
            'entity_class' => 'Db\\Entity\\SecondAlbum',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'SecondApi\\V1\\Rest\\SecondArtist\\Controller' => array(
            'input_filter' => 'SecondApi\\V1\\Rest\\SecondArtist\\Validator',
        ),
        'SecondApi\\V1\\Rest\\SecondAlbum\\Controller' => array(
            'input_filter' => 'SecondApi\\V1\\Rest\\SecondAlbum\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'SecondApi\\V1\\Rest\\SecondArtist\\Validator' => array(
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
        'SecondApi\\V1\\Rest\\SecondAlbum\\Validator' => array(
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
