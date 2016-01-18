<?php
/**
 * Albus component configuration file. Attention, configs might include runtime code which
 * depended on environment values only.
 *
 * @see SecurityConfig
 */
use Spiral\Albus;

return [
    /*
     * Set of middleware classes to be applied for AlbusRoute. Make sure to include AuthMiddleware
     * here!
     */
    'middlewares'       => [
        /*{{middlewares}}*/
    ],

    /*
     * Controller associated with albus dashboard (homepage). Use controller alias, not class name.
     */
    'defaultController' => 'dashboard',

    /*
     * List of controller classes associated with their alias to be available for albus. No other
     * controllers can be called.
     *
     * Albus checks access to controllers using high level permission "albus", make sure this
     * permissions is available for a needed user role.
     *
     * @see AlbusCore
     */
    'controllers'       => [
        'dashboard' => Albus\Controllers\DashboardController::class,

        /*{{controllers}}*/
    ],

    /*
     * Structure of albus navigation including sections, section icons, links, link badges
     * and permissions needed to view link. Link labels will be translated using i18n domain
     * "albus".
     */
    'navigation'        => [
        /*
         * Project overview and activity.
         */
        'activity' => [
            'label'    => 'Overview and Activity',
            'icon'     => 'activity',
            'segments' => [
                'dashboard::index' => [
                    'title'      => 'Dashboard'
                ],
                /*{{navigation.activity}}*/
            ]
        ],

        /*{{navigation}}*/
    ],

    /*
     * Route pattern albus has to respond for.
     */
    'route'             => 'albus[/<controller>[/<action>[/<id>[/<operation>[/<childID>]]]]]',

    /*
     * Set this value to true in cases when route based on sub domain patten, for example:
     * albus.website.com/[/<controller>[/<action>[/<id>[/<operation>[/<childID>]]]]]
     */
    'domainRoute'       => false
];