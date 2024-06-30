<?php
include_once "../config/constants.php";
require '../models/homemodel.php';
class HomeController
{

    private $model;

    public function __construct()
    {
        $this->model = new HomeModel();
    }
    public function index()
    {
        $columns = 'name, price, category';
        $data = $this->model->queryAllItems($columns);
        require_once '../views/home/index.php';

    }
}
