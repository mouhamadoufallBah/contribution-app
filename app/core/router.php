<?php
$routes = [
    "/" => "authController/login",
    "/login" => "authController/login",
    "/register" => "authController/register",
    "/logout" => "authController/logout",
    "/gerant/dashboard" => "gerantController/showDashboardGerant",
    "/apprenant/dashboard" => "apprenantController/showDashboardApprenant",
];
$uri = $_SERVER["REQUEST_URI"];



if (array_key_exists($uri, $routes)) {
    $arrayUri = explode('/', $routes[$uri]);
    $controller = $arrayUri[0];
    $function = $arrayUri[1];
    $params = $arrayUri[2];

    if ($uri === '/login' || $uri === '/register') {
        $methode = $_SERVER["REQUEST_METHOD"];
        if ($methode === 'GET') {
            require_once(CONTROLLER_PATH . '/' . $controller . '.php');
            $uri === '/login' ? showLoginPage() : showRegisterPage();
        } else if ($methode === 'POST') {
            require_once(CONTROLLER_PATH . '/' . $controller . '.php');
            $uri === '/login' ? onLogin() : onRegister();
        }
    } else if ($uri === '/logout') {
        require_once(CONTROLLER_PATH . '/' . $controller . '.php');
        onLogout();
    } else {
        if (!isset($_SESSION['userConnected'])) {
            header('Location:http://bah.mouhamadoufall.bah.odc.edu.sn:3001/login');
        }
        require_once(CONTROLLER_PATH . '/' . $controller . '.php');
        $function();
    }
} else {
    echo "Page not found";
}
