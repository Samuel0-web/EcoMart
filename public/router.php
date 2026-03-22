<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$base = dirname($_SERVER['SCRIPT_NAME']); // /eco/public
$base = str_replace('/public', '', $base); // /eco
$uri = preg_replace('#^' . $base . '#', '', $uri);
$uri = trim($uri, '/');

$routes = [
    ''                      => 'index.php',
    'home'                  => 'index.php',
    'cart'                  => 'cart.php',
    'orders'                => 'orders.php',
    'wishlist'              => 'wishlist.php',
    'account'               => 'account.php',
    'product'               => 'product.php',
    'category'              => 'category.php',
    'categories'            => 'categories.php',
    'shop'                  => 'shop.php',
    'deals'                 => 'deals.php',
    'checkout'              => 'checkout.php',
    'search'                => 'search.php',
    'order-confirmation'    => 'order-confirmation.php',
    'track-order'           => 'track-order.php',
    'order-details'         => 'order-details.php',
    'about'                 => 'about.php',
    'faq'                   => 'faq.php',
    'shipping'              => 'shipping.php',
    'returns'               => 'returns.php',
    'contact'               => 'contact.php',
    'help'                  => 'help.php',
    'privacy'               => 'privacy.php',
    'terms'                 => 'terms.php',
    'cookies'               => 'cookies.php',
    'accessibility'         => 'accessibility.php',
    'sign-in'               => 'signin.php',
    'sign-up'               => 'signup.php',
    'forgot-pass'           => 'forgot-pass.php',
    'reset-pass'            => 'reset-pass.php',
    '404'                   => '404.php'
];

if (array_key_exists($uri, $routes)) {
    require __DIR__ . '/' . $routes[$uri];
} else {
    http_response_code(404);
    require __DIR__ . '/404.php';
}