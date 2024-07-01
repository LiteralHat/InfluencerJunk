<?php
include_once "../config/constants.php";
require '../models/cartmodel.php';

class CartController
{
    private $model;

    public function __construct()
    {
        $this->model = new CartModel();
    }

    public function index()
    {
        require_once '../views/cart.php';
    }
}


$controller = new CartController();