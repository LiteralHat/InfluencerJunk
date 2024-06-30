<?php
include_once "../config.php";
require '../models/cartmodel.php';

class CartController
{
    private $model;

    public function __construct()
    {
        $this->model = new CartModel();
    }

    public function addItem()
    {
        $item = $_POST['item'];

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][] = $item;
        echo "Item added to cart: " . htmlspecialchars($item);
    }
}


$controller = new CartController();