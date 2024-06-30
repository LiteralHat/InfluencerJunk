<?php
include_once "../config.php";

class HomeController {
    public function index() {
        require_once '../views/home/index.php';
    }
}