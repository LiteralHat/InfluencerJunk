<?php
include_once "../config/constants.php";
require '../config/dbh.php';

//constructs a dbh class so the cart can retrieve the cart items
class CartModel
{
    private $dbh;
    public function __construct()
    {
        
        $this->dbh = new Dbh();
    }

    public function queryCartItem($product_ids_str)
    {

        $sql = "SELECT name FROM products WHERE product_id IN ($product_ids_str)";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}