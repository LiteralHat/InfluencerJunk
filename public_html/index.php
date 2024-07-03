<?php
include_once '../config/constants.php';
require_once 'router.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';







if (!isset($_GET['action'])) {

    $router = new Router();
    $router->route($url);
} else {
    $action = isset($_GET['action']) ? $_GET['action'] : 'default';
    include '../controllers/CartController.php';
    $controller = new CartController();
    switch ($action) {

        case 'addProduct':
            $controller->add();
            break;
        case 'clearCart':
            $controller->clearCart();
            break;
        case 'applyCoupon':
            $controller->applyCoupon();
            break;
        // Other cases for different actions
        default:
            $controller->removeItem($action);
            break;
    }
}




