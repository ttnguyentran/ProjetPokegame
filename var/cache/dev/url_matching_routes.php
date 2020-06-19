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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/capture' => [[['_route' => 'capture_poke_dispo_index', '_controller' => 'App\\Controller\\CaptureController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/elementary/type' => [[['_route' => 'elementary_type_index', '_controller' => 'App\\Controller\\ElementaryTypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/elementary/type/new' => [[['_route' => 'elementary_type_new', '_controller' => 'App\\Controller\\ElementaryTypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/magasin' => [[['_route' => 'shop_index', '_controller' => 'App\\Controller\\MagasinController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/pokedex' => [[['_route' => 'pokedex_home', '_controller' => 'App\\Controller\\PokedexController::index'], null, null, null, true, false, null]],
        '/pokemon' => [[['_route' => 'pokemon_index', '_controller' => 'App\\Controller\\PokemonController::index'], null, null, null, true, false, null]],
        '/pokemons' => [[['_route' => 'pokemon_type_index', '_controller' => 'App\\Controller\\PokemonTypeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pokemons/new' => [[['_route' => 'pokemon_type_new', '_controller' => 'App\\Controller\\PokemonTypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/capture/([^/]++)(?'
                    .'|(*:189)'
                    .'|/([^/]++)(*:206)'
                .')'
                .'|/elementary/type/([^/]++)(?'
                    .'|(*:243)'
                    .'|/edit(*:256)'
                    .'|(*:264)'
                .')'
                .'|/magasin/([^/]++)(*:290)'
                .'|/pokemon(?'
                    .'|/([^/]++)(?'
                        .'|(*:321)'
                        .'|/(?'
                            .'|entrainer(*:342)'
                            .'|vendre(*:356)'
                        .')'
                    .')'
                    .'|s/([^/]++)(?'
                        .'|(*:379)'
                        .'|/edit(*:392)'
                        .'|(*:400)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:427)'
                    .'|/edit(*:440)'
                    .'|(*:448)'
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
        189 => [[['_route' => 'capture_zone_index', '_controller' => 'App\\Controller\\CaptureController::showZone'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        206 => [[['_route' => 'capture_list_poke_par_zone', '_controller' => 'App\\Controller\\CaptureController::capturer'], ['id', 'zone_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        243 => [[['_route' => 'elementary_type_show', '_controller' => 'App\\Controller\\ElementaryTypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'elementary_type_edit', '_controller' => 'App\\Controller\\ElementaryTypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'elementary_type_delete', '_controller' => 'App\\Controller\\ElementaryTypeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        290 => [[['_route' => 'shop_acheter', '_controller' => 'App\\Controller\\MagasinController::acheter'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        321 => [[['_route' => 'pokemon_show', '_controller' => 'App\\Controller\\PokemonController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        342 => [[['_route' => 'pokemon_train', '_controller' => 'App\\Controller\\PokemonController::train'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        356 => [[['_route' => 'pokemon_sell', '_controller' => 'App\\Controller\\PokemonController::sell'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        379 => [[['_route' => 'pokemon_type_show', '_controller' => 'App\\Controller\\PokemonTypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        392 => [[['_route' => 'pokemon_type_edit', '_controller' => 'App\\Controller\\PokemonTypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'pokemon_type_delete', '_controller' => 'App\\Controller\\PokemonTypeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        427 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        440 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        448 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
