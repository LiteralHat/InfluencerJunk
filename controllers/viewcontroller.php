<?php
include_once "../config/constants.php";
require '../models/viewmodel.php';
class ViewController
{
    private $model;

    public function __construct()
    {
        $this->model = new ViewModel();
    }
    public function index()
    {
        $columns = 'name, price, category';
        $data = $this->model->queryAllItems($columns);
        require_once '../views/view.php';
    }
}
