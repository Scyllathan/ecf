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
        '/admin/liste-client' => [[['_route' => 'app_client_list', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/branch/modif-mot-de-passe' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\DefaultController::changePassword'], null, null, null, false, false, null]],
        '/admin/client-list-json' => [[['_route' => 'app_default_clientlistjson', '_controller' => 'App\\Controller\\DefaultController::clientListJson'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|update\\-(?'
                        .'|client(?'
                            .'|/([^/]++)(*:208)'
                            .'|\\-grants/([^/]++)(*:233)'
                        .')'
                        .'|install\\-perm(?'
                            .'|1/([^/]++)(*:268)'
                            .'|2/([^/]++)(*:286)'
                        .')'
                    .')'
                    .'|plus\\-d\\-info/([^/]++)(*:318)'
                    .'|ajouter\\-contrat/([^/]++)(*:351)'
                .')'
                .'|/branch/(?'
                    .'|fiche\\-client/([^/]++)(*:393)'
                    .'|branch\\-list\\-json/([^/]++)(*:428)'
                    .'|user\\-id\\-json/([^/]++)(*:459)'
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
        208 => [[['_route' => 'app_update_client', '_controller' => 'App\\Controller\\ClientController::updateClient'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'app_update_client_grants', '_controller' => 'App\\Controller\\ClientController::updateClientGrants'], ['id'], null, null, false, true, null]],
        268 => [[['_route' => 'app_update_install_perm1', '_controller' => 'App\\Controller\\ClientController::updateInstallPerm1'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'app_update_install_perm2', '_controller' => 'App\\Controller\\ClientController::updateInstallPerm2'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'app_more_about', '_controller' => 'App\\Controller\\ClientController::moreAboutClient'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'app_new_client_grants', '_controller' => 'App\\Controller\\ClientController::addClientGrants'], ['id'], null, null, false, true, null]],
        393 => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::clientDetail'], ['id'], null, null, false, true, null]],
        428 => [[['_route' => 'app_default_branchlistjson', '_controller' => 'App\\Controller\\DefaultController::branchListJson'], ['id'], null, null, false, true, null]],
        459 => [
            [['_route' => 'app_default_useridjson', '_controller' => 'App\\Controller\\DefaultController::userIdJson'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
