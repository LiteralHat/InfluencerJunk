<?php


require '../config/dbh.php';

class StoreModel {
    private $dbh;
    public function __construct() {
        $this->dbh = new Dbh();
    }

//database query that gets everything

    public function queryAllItems($columns, $databaseType) {
        $sql = "SELECT $columns FROM $databaseType";
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

}



