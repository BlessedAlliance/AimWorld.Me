<?php

/**
 * Sample Application Route
 *
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://zendframework.github.io/zend-router/routing/
 *
 */

use Zend\Router\Http\Literal;
use AimWorld\Controller\PageController;

return [
    'home' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/',
            'defaults'  => [
                'controller'    => PageController::class,
                'action'        => 'index'
            ]
        ]
    ],

    'about' => [
        'options'   => [
            'route'     => '/aim-world',
        ]
    ],

    'contact-us' => [
        'options'   => [
            'route'     => '/our-team',
        ]
    ]
 ];
