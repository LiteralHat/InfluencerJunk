<?php
require '../models/storemodel.php';

class StoreController
{
    private $model;
    public function __construct()
    {
        $this->model = new StoreModel();
    }

    //database query that gets everything

    public function getAllItems($columns)
    {
        return $this->model->queryAllItems($columns);
    }

    //'master query' for all search functions
    public function getSearchItem($sql)
    {
        return $this->model->querySearchItem($sql);
    }

    public function viewItem($category, $name)
    {
        return $this->model->queryViewItem($category, $name);
    }
}

$controller = new StoreController();

//checks which database we're talking about, and sets the variables for columns and table  name. Columns is for the main gallery view page, btw. not the individual pages

if (strpos(($_SERVER['REQUEST_URI']), 'index') == true) {
    $columns = 'name, price, category';
    $data = $controller->getAllItems($columns);
} elseif (strpos(($_SERVER['REQUEST_URI']), 'shirts') == true) {
    $data = $controller->getAllItems($columns);
} else {
    $data = $controller->getAllItems($columns);
}




