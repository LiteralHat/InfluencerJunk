<?php
include_once "../config.php";
require '../config/dbh.php';

//constructs a dbh class so the cart can retrieve the cart items
class CartModel {
    private $dbh;
    public function __construct() {
        $this->dbh = new Dbh();
    }
}