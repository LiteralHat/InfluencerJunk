<?php
include_once "../config/constants.php";

class ConfirmationController
{

    public function index()
    {
        $method = $_GET['action'] ?? null;

        switch ($method) {
            case 'addedProduct':
                $message = 'Item added successfully to cart!';
                break;
            case 'clearedcart':
                $message = 'Dumped cart successfully!';
                break;
            default:
                break;
        }

        require_once '../views/confirmation.php';
    }



}
