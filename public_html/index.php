<?php

include_once '../config/constants.php';
//removes trailing slashes

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

$defaultController = 'HomeController';
$defaultMethod = 'index';

$urlSegments = explode('/', $url);




//determines controller name
$controllerName = !empty($urlSegments[0]) ? ucfirst($urlSegments[0]) . 'controller' : $defaultController;
$controllerFile = '../controllers/' . $controllerName . '.php';


if (file_exists($controllerFile)) {
    require_once $controllerFile;

    // Create controller object
    $controller = new $controllerName;

    // Determine the method (action)
    $method = isset($urlSegments[1]) ? $urlSegments[1] : $defaultMethod;


    // Check if the method exists in the controller
    if (method_exists($controller, $method)) {
        // Call the method and pass any additional URL segments as parameters
        unset($urlSegments[0]); // Remove the controller name
        unset($urlSegments[1]); // Remove the method name
        $params = array_values($urlSegments); // Remaining segments as parameters
        $controller->$method(...$params);

    } else {

        // Handle method not found (e.g., show 404 page)
        echo "Method not found";
    }
} else {
    // Handle controller not found (e.g., show 404 page)
    echo "Controller not found";
}