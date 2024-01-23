<?php

// Check routes for routing
$routes = [
    '/' => '/pages/home.php',
    '' => '/pages/home.php',
    '/ru' => '/pages/ru/pages/home.php',
    '/ru/' => '/pages/ru/pages/home.php',

    '/test/' => '/pages/test.php',
    '/test' => '/pages/test.php',

    '/ol/' => '/pages/our-locations.php',
    '/ol' => '/pages/our-locations.php',
    '/ru/ol/' => '/pages/ru/pages/our-locations.php',
    '/ru/ol' => '/pages/ru/pages/our-locations.php',

    '/lo/' => '/pages/locations.php',
    '/lo' => '/pages/locations.php',
    '/ru/lo/' => '/pages/ru/pages/locations.php',
    '/ru/lo' => '/pages/ru/pages/locations.php',

    '/en/' => '/pages/ebinow.php',
    '/en' => '/pages/ebinow.php',
    '/ru/en/' => '/pages/ru/pages/ebinow.php',
    '/ru/en' => '/pages/ru/pages/ebinow.php',

    '/eb2e' => '/pages/eb-2-entrepreneurs.php',
    '/eb2e/' => '/pages/eb-2-entrepreneurs.php',
    '/ru/eb2e' => '/pages/ru/pages/eb-2-entrepreneurs.php',
    '/ru/eb2e/' => '/pages/ru/pages/eb-2-entrepreneurs.php',

    '/eb2a' => '/pages/eb-2-artists.php',
    '/eb2a/' => '/pages/eb-2-artists.php',
    '/ru/eb2a' => '/pages/ru/pages/eb-2-artists.php',
    '/ru/eb2a/' => '/pages/ru/pages/eb-2-artists.php',

    '/eb1imm-fp' => '/pages/eb-1-immigration-filing-process.php',
    '/eb1imm-fp/' => '/pages/eb-1-immigration-filing-process.php',
    '/ru/eb1imm-fp' => '/pages/ru/pages/eb-1-immigration-filing-process.php',
    '/ru/eb1imm-fp/' => '/pages/ru/pages/eb-1-immigration-filing-process.php',

    '/eb1c' => '/pages/eb-1-criteria.php',
    '/eb1c/' => '/pages/eb-1-criteria.php',
    '/ru/eb1c' => '/pages/ru/pages/eb-1-criteria.php',
    '/ru/eb1c/' => '/pages/ru/pages/eb-1-criteria.php',

    '/eb1li' => '/pages/eb1-list-initial.php',
    '/eb1li/' => '/pages/eb1-list-initial.php',
    '/ru/eb1li' => '/pages/ru/pages/eb1-list-initial.php',
    '/ru/eb1li/' => '/pages/ru/pages/eb1-list-initial.php',

    '/im-lp' => '/pages/immigration-law-practice.php',
    '/im-lp/' => '/pages/immigration-law-practice.php',
    '/ru/im-lp' => '/pages/ru/pages/immigration-law-practice.php',
    '/ru/im-lp/' => '/pages/ru/pages/immigration-law-practice.php',

    '/im-l' => '/pages/immigration-law.php',
    '/im-l/' => '/pages/immigration-law.php',
    '/ru/im-l' => '/pages/ru/pages/immigration-law.php',
    '/ru/im-l/' => '/pages/ru/pages/immigration-law.php',

    '/privacy-policy' => '/pages/privacy-policy.php',
    '/privacy-policy/' => '/pages/privacy-policy.php',
    '/ru/privacy-policy' => '/pages/ru/pages/privacy-policy.php',
    '/ru/privacy-policy/' => '/pages/ru/pages/privacy-policy.php',

    '/disclaimer' => '/pages/disclaimer.php',
    '/disclaimer/' => '/pages/disclaimer.php',
    '/ru/disclaimer' => '/pages/ru/pages/disclaimer.php',
    '/ru/disclaimer/' => '/pages/ru/pages/disclaimer.php',

    '/eb2s' => '/pages/eb-2-scientist.php',
    '/eb2s/' => '/pages/eb-2-scientist.php',
    '/ru/eb2s' => '/pages/ru/pages/eb-2-scientist.php',
    '/ru/eb2s/' => '/pages/ru/pages/eb-2-scientist.php',


    // ///// ru pages
    // 

    // '/ru/test/' => 'pages/ru/test.php',
    // '/ru/test' => 'pages/ru/test.php',

    // '/ru/ol/' => 'pages/ru/our-locations.php',
    // '/ru/ol' => 'pages/ru/our-locations.php',

    // '/ru/lo/' => 'pages/ru/locations.php',
    // '/ru/lo' => 'pages/ru/locations.php',

    // '/ru/en/' => 'pages/ru/ebinow.php',
    // '/ru/en' => 'pages/ru/ebinow.php',

    // '/ru/eb2e' => 'pages/ru/eb-2-entrepreneurs.php',
    // '/ru/eb2e/' => 'pages/ru/eb-2-entrepreneurs.php',

    // '/ru/eb2a' => 'pages/ru/eb-2-artists.php',
    // '/ru/eb2a/' => 'pages/ru/eb-2-artists.php',

    // '/ru/eb1imm-fp' => 'pages/ru/eb-1-immigration-filing-process.php',
    // '/ru/eb1imm-fp/' => 'pages/ru/eb-1-immigration-filing-process.php',

    // '/ru/eb1c' => 'pages/ru/eb-1-criteria.php',
    // '/ru/eb1c/' => 'pages/ru/eb-1-criteria.php',

    // '/ru/eb1li' => 'pages/ru/eb1-list-initial.php',
    // '/ru/eb1li/' => 'pages/ru/eb1-list-initial.php',
    
    // '/ru/im-lp' => 'pages/ru/immigration-law-practice.php',
    // '/ru/im-lp/' => 'pages/ru/immigration-law-practice.php',

    // '/ru/im-l' => 'pages/ru/immigration-law.php',
    // '/ru/im-l/' => 'pages/ru/immigration-law.php',
    
    // '/ru/privacy-policy' => 'pages/ru/privacy-policy.php',
    // '/ru/privacy-policy/' => 'pages/ru/privacy-policy.php',

    // '/ru/disclaimer' => 'pages/ru/disclaimer.php',
    // '/ru/disclaimer/' => 'pages/ru/disclaimer.php',

    // '/ru/eb2s' => 'pages/ru/eb-2-scientist.php',
    // '/ru/eb2s/' => 'pages/ru/eb-2-scientist.php',
    
];


// Get a streaming URL
$request_uri = str_replace(SUBDIR, '', $_SERVER['REQUEST_URI']);

// Search for a specific page in an array of routes
if (array_key_exists($request_uri, $routes)) {
    include realpath(DOCUMENT_ROOT . SUBDIR . $routes[$request_uri]);
} else {
    try {
        include realpath(DOCUMENT_ROOT . SUBDIR . '/pages/404.php');
    } catch (Exception $e) {
        echo "MB - SUBDIR";
    }
}
