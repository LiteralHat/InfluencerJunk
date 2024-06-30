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
        require_once '../views/home/index.php';
    }

    public function getAllItems($columns)
    {
        return $this->model->queryAllItems($columns);
    }
}
