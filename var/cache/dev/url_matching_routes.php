<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/author' => [[['_route' => 'app_author', '_controller' => 'App\\Controller\\AuthorController::index'], null, null, null, false, false, null]],
        '/authors' => [[['_route' => 'list_authors', '_controller' => 'App\\Controller\\AuthorController::list'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/goToIndex' => [[['_route' => 'go_to_index', '_controller' => 'App\\Controller\\ServiceController::goToIndex'], null, null, null, false, false, null]],
        '/student/student' => [[['_route' => 'app_student', '_controller' => 'App\\Controller\\StudentController::index'], null, null, null, false, false, null]],
        '/student/fetch' => [[['_route' => 'fetch', '_controller' => 'App\\Controller\\StudentController::fetch'], null, null, null, false, false, null]],
        '/student/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\StudentController::add'], null, null, null, false, false, null]],
        '/student/addF' => [[['_route' => 'addF', '_controller' => 'App\\Controller\\StudentController::addF'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/author/([^/]++)(*:23)'
                .'|/details(?'
                    .'|/([^/]++)(*:50)'
                    .'|Author/([^/]++)(*:72)'
                .')'
                .'|/msg/([^/]++)(*:93)'
                .'|/s(?'
                    .'|ervice/([^/]++)(*:120)'
                    .'|tudent/(?'
                        .'|update/([^/]++)(*:153)'
                        .'|remouve/([^/]++)(*:177)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:218)'
                    .'|wdt/([^/]++)(*:238)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:284)'
                            .'|router(*:298)'
                            .'|exception(?'
                                .'|(*:318)'
                                .'|\\.css(*:331)'
                            .')'
                        .')'
                        .'|(*:341)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'show_author', '_controller' => 'App\\Controller\\AuthorController::showAuthor'], ['name'], null, null, false, true, null]],
        50 => [[['_route' => 'd', '_controller' => 'App\\Controller\\AuthorController::details'], ['id'], null, null, false, true, null]],
        72 => [[['_route' => 'details_author', '_controller' => 'App\\Controller\\AuthorController::auhtorDetails'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'msg', '_controller' => 'App\\Controller\\HomeController::msg'], ['name'], null, null, false, true, null]],
        120 => [[['_route' => 'service_show', '_controller' => 'App\\Controller\\ServiceController::showService'], ['name'], null, null, false, true, null]],
        153 => [[['_route' => 'update', '_controller' => 'App\\Controller\\StudentController::updatee'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        177 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        238 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        284 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        298 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        318 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        331 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        341 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
