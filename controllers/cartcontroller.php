<?php
include_once "../config/constants.php";
require '../models/cartmodel.php';



//the code on this page is super spaghety, im super sorry in advance

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

        $_SESSION['mastertotal'] = $total;
        $_SESSION['total'] = $total;
        header("Location: /../confirmation?action=addedProduct");

        exit();
    }

    public function clearCart()
    {
        $_SESSION['cartitems'] = [];
        $_SESSION['couponmessage'] = '';
        $_SESSION['total'] = 0;
        header("Location: /../confirmation?action=clearedcart");
        exit();
    }

    public function applyCoupon()
    {
        $coupon = $_POST['coupon'];
        $coupon = strtolower($coupon);
        switch ($coupon) {
            case 'suckup':
                $_SESSION['total'] = $_SESSION['mastertotal'] * 0.99;
                break;
            default:
                $_SESSION['total'] = $_SESSION['mastertotal'];
                break;
        }
        $_SESSION['couponmessage'] = 'Code Applied: ' . strtoupper($coupon);
        header("Location: /../cart");
        exit();
    }

    
    public function removeItem($id)
    {
        foreach ($_SESSION['cartitems'] as $key => $product) {
            if ($product['id'] == $id) {
                $_SESSION['total'] = $_SESSION['total'] - $_SESSION['cartitems'][$key]['price'];
                unset($_SESSION['cartitems'][$key]);
                break;
            }
        }
        if ($_SESSION['total'] < 0) {
            $_SESSION['total'] = 0;
        }

        header("Location: /../cart");

    }
}

$controller = new CartController();