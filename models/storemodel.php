<?php


require '../config/dbh.php';

class StoreModel {
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

//'master query' for all search functions
    public function querySearchItem($sql) {
        $stmt = $this->dbh->getDb()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

//queries view item for individual image view
    public function queryViewItem($columns) {

    }

}



