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
    public function index($category, $name)
    {
        $data = $this->model->queryViewItem($category, $name);
        $data = $data[0];
        require_once '../views/view.php';
    }
}
