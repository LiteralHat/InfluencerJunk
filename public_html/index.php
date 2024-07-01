<?php
include_once '../config/constants.php';
require_once 'router.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

$router = new Router();
$router->route($url);
