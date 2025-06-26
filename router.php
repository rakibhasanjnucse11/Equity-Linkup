<?php 
$uri = parse_url( $_SERVER['REQUEST_URI'] )['path'];
$method = $_SERVER['REQUEST_METHOD'];

$routes = [
    'GET' => [
        '/' => 'actions/index.php',
        '/sign-in' => 'actions/auth/sign-in.php',
        '/sign-up' => 'actions/auth/sign-up.php',
        '/sign-out' => 'actions/auth/sign-out-handler.php',
        '/join-us' => 'actions/join-us.php',
        '/pitch' => 'actions/pitch.php',
        '/deals' => 'actions/deals.php',
        '/deal' => 'actions/deal.php',
        '/dashboard' => 'actions/dashboard.php',
        '/user' => 'actions/user.php',
        '/records' => 'actions/records.php',
    ],
    'POST' => [
        '/sign-in' => 'actions/auth/sign-in-handler.php',
        '/sign-up' => 'actions/auth/sign-up-handler.php',
        '/join-us' => 'actions/join-us-handler.php',
        '/pitch' => 'actions/pitch-handler.php',
        '/deal' => 'actions/deal-handler.php',
        '/offer' => 'actions/offer-handler.php',
    ],
];

function routeToAction( $uri, $method, $routes ) {
    if ( array_key_exists( $uri, $routes[$method] ) && file_exists( $routes[$method][$uri] ) ) {
        require $routes[$method][$uri];
    } else {
        abort();
    } 
}

function abort( $code = 404 ) {
    http_response_code( $code );
    require "views/{$code}.view.php";
    die();
}

routeToAction( $uri, $method, $routes );