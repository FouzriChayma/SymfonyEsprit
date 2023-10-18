<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_author' => [[], ['_controller' => 'App\\Controller\\AuthorController::index'], [], [['text', '/author']], [], [], []],
    'show_author' => [['name'], ['_controller' => 'App\\Controller\\AuthorController::showAuthor'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/author']], [], [], []],
    'list_authors' => [[], ['_controller' => 'App\\Controller\\AuthorController::list'], [], [['text', '/authors']], [], [], []],
    'd' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::details'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/details']], [], [], []],
    'details_author' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::auhtorDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/detailsAuthor']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'msg' => [['name'], ['_controller' => 'App\\Controller\\HomeController::msg'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/msg']], [], [], []],
    'app_service' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service']], [], [], []],
    'service_show' => [['name'], ['_controller' => 'App\\Controller\\ServiceController::showService'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/service']], [], [], []],
    'go_to_index' => [[], ['_controller' => 'App\\Controller\\ServiceController::goToIndex'], [], [['text', '/goToIndex']], [], [], []],
    'app_student' => [[], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['text', '/student/student']], [], [], []],
    'fetch' => [[], ['_controller' => 'App\\Controller\\StudentController::fetch'], [], [['text', '/student/fetch']], [], [], []],
    'add' => [[], ['_controller' => 'App\\Controller\\StudentController::add'], [], [['text', '/student/add']], [], [], []],
    'addF' => [[], ['_controller' => 'App\\Controller\\StudentController::addF'], [], [['text', '/student/addF']], [], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\StudentController::updatee'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student/update']], [], [], []],
    'remove' => [['id'], ['_controller' => 'App\\Controller\\StudentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student/remouve']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
