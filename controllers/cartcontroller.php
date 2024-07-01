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
            'id' => bin2hex(random_bytes(4)),
            'name' => $_POST['productpix'],
            'size' => $_POST['size'],
            'price' => $_POST['price']
        ];


        $_SESSION['cartitems'][] = $funnyarray;

        $total = 0.0; // Initialize total variable

        foreach ($_SESSION['cartitems'] as $item) {
            $total += $item['price']; // Accumulate each 'price' value
        }

        $_SESSION['total'] = $total;
        header("Location: /../cartsuccess");

        exit();
    }

    public function clearCart()
    {
        $_SESSION['cartitems'] = [];
        $_SESSION['total'] = 0;
        header("Location: /../cartsuccess");
        exit();
    }
}

$controller = new CartController();