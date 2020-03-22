<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'panier' => [['_locale'], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/'], ['variable', '/', '[^/]++', '_locale', true]], [], []],
    'panier_etat' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\PanierController::PanierEtat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/etat'], ['variable', '/', '[^/]++', '_locale', true]], [], []],
    'delete_panier' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\PanierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/delete'], ['variable', '/', '[^/]++', '_locale', true]], [], []],
    'produit' => [['_locale'], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit'], ['variable', '/', '[^/]++', '_locale', true]], [], []],
    'mon_produit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\ProduitController::produit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit'], ['variable', '/', '[^/]++', '_locale', true]], [], []],
    'delete_produit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit/delete'], ['variable', '/', '[^/]++', '_locale', true]], [], []],
];
