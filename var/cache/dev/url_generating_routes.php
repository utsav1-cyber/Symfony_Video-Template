<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'admin_main_page' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\AdminController::categories'], [], [['text', '/admin/categories']], [], []],
    'edit_category' => [[], ['_controller' => 'App\\Controller\\AdminController::editCategory'], [], [['text', '/admin/edit-category']], [], []],
    'videos' => [[], ['_controller' => 'App\\Controller\\AdminController::videos'], [], [['text', '/admin/videos']], [], []],
    'upload_video' => [[], ['_controller' => 'App\\Controller\\AdminController::uploadVideo'], [], [['text', '/admin/upload-video']], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\AdminController::users'], [], [['text', '/admin/users']], [], []],
    'main_page' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
    'video_list' => [[], ['_controller' => 'App\\Controller\\FrontController::videoList'], [], [['text', '/video-list']], [], []],
    'video_details' => [[], ['_controller' => 'App\\Controller\\FrontController::videoDetails'], [], [['text', '/video-details']], [], []],
    'search_results' => [[], ['_controller' => 'App\\Controller\\FrontController::searchResults'], [], [['text', '/search-results']], [], []],
    'pricing' => [[], ['_controller' => 'App\\Controller\\FrontController::pricing'], [], [['text', '/pricing']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\FrontController::register'], [], [['text', '/register']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\FrontController::login'], [], [['text', '/login']], [], []],
    'payment' => [[], ['_controller' => 'App\\Controller\\FrontController::payment'], [], [['text', '/payment']], [], []],
];