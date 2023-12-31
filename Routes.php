<?php

// Check routes for routing
$routes = [
    '/' => 'pages/home.php',

    '/test/' => 'pages/test.php',
    '/test' => 'pages/test.php',

    '/ol/' => 'pages/our-locations.php',
    '/ol' => 'pages/our-locations.php',

    '/en/' => 'pages/ebinow.php',
    '/en' => 'pages/ebinow.php',

    '/eb2e' => 'pages/eb-2-entrepreneurs.php',
    '/eb2e/' => 'pages/eb-2-entrepreneurs.php',

    '/eb2a' => 'pages/eb-2-artists.php',
    '/eb2a/' => 'pages/eb-2-artists.php',

    '/eb1imm-fp' => 'pages/eb-1-immigration-filing-process.php',
    '/eb1imm-fp/' => 'pages/eb-1-immigration-filing-process.php',

    '/eb1c' => 'pages/eb-1-criteria.php',
    '/eb1c/' => 'pages/eb-1-criteria.php',

    '/eb1li' => 'pages/eb1-list-initial.php',
    '/eb1li/' => 'pages/eb1-list-initial.php',
    
    '/im-lp' => 'pages/immigration-law-practice.php',
    '/im-lp/' => 'pages/immigration-law-practice.php',

    '/im-l' => 'pages/immigration-law.php',
    '/im-l/' => 'pages/immigration-law.php',
    
    '/privacy-policy' => 'pages/privacy-policy.php',
    '/privacy-policy/' => 'pages/privacy-policy.php',

    '/disclaimer' => 'pages/disclaimer.php',
    '/disclaimer/' => 'pages/disclaimer.php',

    '/eb2s' => 'pages/eb-2-scientist.php',
    '/eb2s/' => 'pages/eb-2-scientist.php',
    
];


// Get a streaming URL
$request_uri = $_SERVER['REQUEST_URI'];

// Search for a specific page in an array of routes
if (array_key_exists($request_uri, $routes)) {
    include($routes[$request_uri]);
} else {
    // If not, then 404
    include('pages/404.php');
}
