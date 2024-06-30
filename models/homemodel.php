<?php
include_once "../config/constants.php";
require '../config/dbh.php';

class HomeModel {
    private $dbh;
    public function __construct() {
        $this->dbh = new Dbh();
    }

//database query that gets everything

    public function queryAllItems($columns) {
        $sql = "SELECT $columns FROM products";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
}



