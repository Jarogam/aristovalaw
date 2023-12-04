<?php

// Check routes for routing
$routes = [
    '/' => 'pages/home.php',

    '/test/' => 'pages/test.php',
    '/test' => 'pages/test.php',

    '/our-locations/' => 'pages/our-locations.php',
    '/our-locations' => 'pages/our-locations.php',

    '/ebinow/' => 'pages/ebinow.php',
    '/ebinow' => 'pages/ebinow.php',

    '/eb-2-entrepreneurs' => 'pages/eb-2-entrepreneurs.php',
    '/eb-2-entrepreneurs/' => 'pages/eb-2-entrepreneurs.php',

    '/eb-2-artists' => 'pages/eb-2-artists.php',
    '/eb-2-artists/' => 'pages/eb-2-artists.php',

    '/eb-1-immigration-filing-process' => 'pages/eb-1-immigration-filing-process.php',
    '/eb-1-immigration-filing-process/' => 'pages/eb-1-immigration-filing-process.php',

    '/eb-1-criteria' => 'pages/eb-1-criteria.php',
    '/eb-1-criteria/' => 'pages/eb-1-criteria.php',

    '/eb-1-list-initial' => 'pages/eb1-list-initial.php',
    '/eb-1-list-initial/' => 'pages/eb1-list-initial.php',
    
    '/immigration-law-practice' => 'pages/immigration-law-practice.php',
    '/immigration-law-practice/' => 'pages/immigration-law-practice.php',

    '/immigration-law' => 'pages/immigration-law.php',
    '/immigration-law/' => 'pages/immigration-law.php',
    
    '/privacy-policy' => 'pages/privacy-policy.php',
    '/privacy-policy/' => 'pages/privacy-policy.php',

    '/disclaimer' => 'pages/disclaimer.php',
    '/disclaimer/' => 'pages/disclaimer.php',

    '/eb-2-scientist' => 'pages/eb-2-scientist.php',
    '/eb-2-scientist/' => 'pages/eb-2-scientist.php',
    
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
