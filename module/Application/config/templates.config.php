<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map' => [
            'partial/header'            => __DIR__ . '/../templates/layout/partial/header.phtml',            
            'template/navigation'       => __DIR__ . '/../templates/layout/template/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../templates/layout/template/breadcrumbs.phtml',
        ],
        'template_path_stack' => [
            'application' => __DIR__ . '/../templates',
        ]
    ],

    // Zend Expressive Configuration
    'templates'     => [
        'map'       => [
            'partial/header'            => __DIR__ . '/../templates/layout/partial/header.phtml',
            'template/navigation'       => __DIR__ . '/../templates/layout/template/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../templates/layout/template/breadcrumbs.phtml',
        ],
        'paths'     => [
            'application'  => [__DIR__ . '/../templates']
        ]
    ],

    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
