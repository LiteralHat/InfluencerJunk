<?php
include_once "../config.php";
require '../models/cartmodel.php';

class CartController 
{
private $model

public function __construct()
{
    $this->model = new CartModel();
}


}