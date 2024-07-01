<?php
include_once '../config/constants.php';
require_once 'router.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';




// Assuming you're using a basic routing mechanism
$action = isset($_GET['action']) ? $_GET['action'] : 'default';

// Include necessary files and initialize objects as needed

// Route the request to the appropriate controller method based on action
switch ($action) {
    case 'addProduct':
        include '../controllers/CartController.php';
        $controller = new CartController();
        $controller->add();
        break;
    case 'clearCart':
        include '../controllers/CartController.php';
        $controller = new CartController();
        $controller->clearCart();
        break;
    case 'applyCoupon':
        include '../controllers/CartController.php';
        $controller = new CartController();
        $controller->applyCoupon();
        break;

    // Other cases for different actions
    default:
        $router = new Router();
        $router->route($url);

        break;
}




