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

        require_once '../classes/product.php';
        
        switch ($category) {
            case 'apparel':
                $product = new Apparel($name, $category);
                break;
            case 'accessories':
                $product = new Accessories($name, $category);
                break;
        }
        $extrahtml = $product->getDescription();


        require_once '../views/view.php';
    }
}
