<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/objetosalmacen' => [[['_route' => 'app_objetosalmacen_index', '_controller' => 'App\\Controller\\ObjetosalmacenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/objetosalmacen/new' => [[['_route' => 'app_objetosalmacen_new', '_controller' => 'App\\Controller\\ObjetosalmacenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/registroentrada' => [[['_route' => 'app_registroentrada_index', '_controller' => 'App\\Controller\\RegistroentradaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/registroentrada/new' => [[['_route' => 'app_registroentrada_new', '_controller' => 'App\\Controller\\RegistroentradaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registrosalida' => [[['_route' => 'app_registrosalida_index', '_controller' => 'App\\Controller\\RegistrosalidaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/registrosalida/new' => [[['_route' => 'app_registrosalida_new', '_controller' => 'App\\Controller\\RegistrosalidaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/objetosalmacen/([^/]++)(?'
                    .'|(*:196)'
                    .'|/edit(*:209)'
                    .'|(*:217)'
                .')'
                .'|/registro(?'
                    .'|entrada/([^/]++)(?'
                        .'|(*:257)'
                        .'|/edit(*:270)'
                        .'|(*:278)'
                    .')'
                    .'|salida/([^/]++)(?'
                        .'|(*:305)'
                        .'|/edit(*:318)'
                        .'|(*:326)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'app_objetosalmacen_show', '_controller' => 'App\\Controller\\ObjetosalmacenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'app_objetosalmacen_edit', '_controller' => 'App\\Controller\\ObjetosalmacenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'app_objetosalmacen_delete', '_controller' => 'App\\Controller\\ObjetosalmacenController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        257 => [[['_route' => 'app_registroentrada_show', '_controller' => 'App\\Controller\\RegistroentradaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_registroentrada_edit', '_controller' => 'App\\Controller\\RegistroentradaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        278 => [[['_route' => 'app_registroentrada_delete', '_controller' => 'App\\Controller\\RegistroentradaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_registrosalida_show', '_controller' => 'App\\Controller\\RegistrosalidaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'app_registrosalida_edit', '_controller' => 'App\\Controller\\RegistrosalidaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        326 => [
            [['_route' => 'app_registrosalida_delete', '_controller' => 'App\\Controller\\RegistrosalidaController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
