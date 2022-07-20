<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipments' => [[['_route' => 'app_equipment_index', '_controller' => 'App\\Controller\\EquipmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipments/new' => [[['_route' => 'app_equipment_new', '_controller' => 'App\\Controller\\EquipmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/movie' => [[['_route' => 'app_movie', '_controller' => 'App\\Controller\\MovieController::index'], null, null, null, false, false, null]],
        '/movies' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\MoviesController::index'], null, null, null, false, false, null]],
        '/movies/create' => [[['_route' => 'app_movies_create', '_controller' => 'App\\Controller\\MoviesController::create'], null, null, null, false, false, null]],
        '/show' => [[['_route' => 'old', '_controller' => 'App\\Controller\\MoviesController::show'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/equipment' => [[['_route' => 'app_my_equipment', '_controller' => 'App\\Controller\\UserController::getUserEquipment'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\VinylController::homepage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/category/(?'
                    .'|([^/]++)(*:63)'
                    .'|api/([^/]++)/edit(*:87)'
                    .'|([^/]++)/delete(*:109)'
                .')'
                .'|/equipments/(?'
                    .'|category/([^/]++)(*:150)'
                    .'|([^/]++)(*:166)'
                    .'|api/([^/]++)/(?'
                        .'|edit(*:194)'
                        .'|assign(*:208)'
                        .'|unassign(*:224)'
                    .')'
                    .'|([^/]++)/delete(*:248)'
                    .'|user/([^/]++)(*:269)'
                .')'
                .'|/movies/(?'
                    .'|edit/([^/]++)(*:302)'
                    .'|([^/]++)(*:318)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:344)'
                    .'|/edit(*:357)'
                    .'|(*:365)'
                .')'
                .'|/browse(?:/([^/]++))?(*:395)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        109 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        150 => [[['_route' => 'app_equipment_filter_by_category', '_controller' => 'App\\Controller\\EquipmentController::filterByCategory'], ['category'], ['GET' => 0], null, false, true, null]],
        166 => [[['_route' => 'app_equipment_show', '_controller' => 'App\\Controller\\EquipmentController::show'], ['equipment'], ['GET' => 0], null, false, true, null]],
        194 => [[['_route' => 'app_equipment_edit', '_controller' => 'App\\Controller\\EquipmentController::edit'], ['equipment'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        208 => [[['_route' => 'app_equipment_assign', '_controller' => 'App\\Controller\\EquipmentController::assign'], ['equipment'], ['POST' => 0, 'PATCH' => 1], null, false, false, null]],
        224 => [[['_route' => 'app_equipment_unassign', '_controller' => 'App\\Controller\\EquipmentController::unAssign'], ['equipment'], ['GET' => 0], null, false, false, null]],
        248 => [[['_route' => 'app_equipment_delete', '_controller' => 'App\\Controller\\EquipmentController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'app_equipment_filter_by_user', '_controller' => 'App\\Controller\\EquipmentController::filterByUser'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'editMovie', '_controller' => 'App\\Controller\\MoviesController::edit'], ['movie'], null, null, false, true, null]],
        318 => [[['_route' => 'app_movies_show', '_controller' => 'App\\Controller\\MoviesController::show'], ['movie'], null, null, false, true, null]],
        344 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        357 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        395 => [
            [['_route' => 'app_vinyl_browse', 'name' => null, '_controller' => 'App\\Controller\\VinylController::Browse'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
