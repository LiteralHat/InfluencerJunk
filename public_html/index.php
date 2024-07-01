<?php

include_once '../config/constants.php';
require_once 'router.php';

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

$router = new Router();
$router->route($url);
