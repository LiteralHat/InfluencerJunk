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

    public function add()
    {

        
        $funnyarray = [
            'name' => $_POST['productpix'],
            'quantity' => $_POST['quantity'],
            'size' => $_POST['size']
        ];

        $_SESSION['cartitems'][] = $funnyarray;

        header("Location: /../cartsuccess");
        exit();
    }
}

$controller = new CartController();