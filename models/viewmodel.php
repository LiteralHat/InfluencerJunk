<?php
include_once "../config/constants.php";
require '../config/dbh.php';

class ViewModel
{
    private $dbh;
    public function __construct()
    {
        $this->dbh = new Dbh();
    }

    //database query that gets everything

    public function queryViewItem($category, $name)
    {
        $sql = "SELECT * FROM products WHERE category = :category AND name = :name";
        $stmt = $this->dbh->getDb()->prepare($sql);
        $stmt->bindParam(':category', $category, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}



