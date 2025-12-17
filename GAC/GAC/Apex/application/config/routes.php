<?php
// Route Configuration
$routes = [
    '' => ['controller' => 'Home', 'method' => 'index'],
    'home' => ['controller' => 'Home', 'method' => 'index'],
    'products' => ['controller' => 'Products', 'method' => 'index'],
    'product/{id}' => ['controller' => 'Products', 'method' => 'view'],
    'aw-collection' => ['controller' => 'Products', 'method' => 'awCollection'],
    'women' => ['controller' => 'Products', 'method' => 'women'],
    'men' => ['controller' => 'Products', 'method' => 'men'],
    'kids' => ['controller' => 'Products', 'method' => 'kids'],
    'gift-voucher' => ['controller' => 'Home', 'method' => 'giftVoucher'],
    'find-store' => ['controller' => 'Home', 'method' => 'findStore'],
    'support' => ['controller' => 'Home', 'method' => 'support'],
    'track-order' => ['controller' => 'Home', 'method' => 'trackOrder'],
    'corporate' => ['controller' => 'Home', 'method' => 'corporate'],
    'sign-in' => ['controller' => 'Home', 'method' => 'signIn'],
    'about' => ['controller' => 'Home', 'method' => 'about'],
    'contact' => ['controller' => 'Home', 'method' => 'contact'],
    'cart' => ['controller' => 'Cart', 'method' => 'index'],
    'admin' => ['controller' => 'Admin', 'method' => 'index'],
    'admin/products' => ['controller' => 'Admin', 'method' => 'products'],
    'admin/orders' => ['controller' => 'Admin', 'method' => 'orders'],
    'admin/users' => ['controller' => 'Admin', 'method' => 'users'],
    'admin/reports' => ['controller' => 'Admin', 'method' => 'reports'],
    'admin/login' => ['controller' => 'Admin', 'method' => 'login'],
    'admin/authenticate' => ['controller' => 'Admin', 'method' => 'authenticate'],
    'admin/logout' => ['controller' => 'Admin', 'method' => 'logout'],
    'support/submit' => ['controller' => 'Support', 'method' => 'submit'],
    'admin/messages' => ['controller' => 'Admin', 'method' => 'messages'],
    'checkout' => ['controller' => 'Home', 'method' => 'checkout'],
    'checkout/submit' => ['controller' => 'Checkout', 'method' => 'submit'],
    'admin/deleteOrder' => ['controller' => 'Admin', 'method' => 'deleteOrder'],
    'admin/editOrder' => ['controller' => 'Admin', 'method' => 'editOrder'],
    'admin/updateOrder' => ['controller' => 'Admin', 'method' => 'updateOrder'],
    'login' => ['controller' => 'Auth', 'method' => 'login']
];

function handleRoute($uri, $routes, $db) {
    // Handle dynamic routes with parameters
    foreach ($routes as $route => $config) {
        if (strpos($route, '{') !== false) {
            $pattern = str_replace('{id}', '([^/]+)', $route);
            if (preg_match("#^$pattern$#", $uri, $matches)) {
                $controllerName = $config['controller'];
                $controllerFile = APPPATH . "controllers/$controllerName.php";
                if (file_exists($controllerFile)) {
                    include $controllerFile;
                    if (class_exists($controllerName)) {
                        $controller = new $controllerName($db);
                        $controller->{$config['method']}($matches[1]);
                        return;
                    }
                }
            }
        }
    }
    
    // Handle static routes
    if (isset($routes[$uri])) {
        $config = $routes[$uri];
        $controllerName = $config['controller'];
        $controllerFile = APPPATH . "controllers/$controllerName.php";
        if (file_exists($controllerFile)) {
            include $controllerFile;
            if (class_exists($controllerName)) {
                $controller = new $controllerName($db);
                if (isset($config['param'])) {
                    $controller->{$config['method']}($config['param']);
                } else {
                    $controller->{$config['method']}();
                }
                return;
            }
        }
    }
    
    http_response_code(404);
    echo "Page not found";
}
?>