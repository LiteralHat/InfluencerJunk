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
        $pageName = 'Home';
        require_once '../views/index.php';
    }

    public function subpage($category)
    {
        $columns = 'name, price, category';
        $data = $this->model->querySubPage($columns, $category);
        $pageName = $category;
        switch ($category) {
            case 'apparel':
                $extraHtml = "At InfluencerJunk.com, we're PROUD of our employees in Bangladesh for producing our shirts. Children have such great imaginations, and we decided to express their creativity with our catalogue. All shirts are made with grassfed ink and 100% synthetic cotton.";
                break;
            case 'accessories':
                $extraHtml = "We know that our customers love our products, so we curated a collection just for the OGs. All our vinyls are ARCHIVAL, do not BUY if you aren't a REAL collector or ELSE.";
                break;
        }


        require_once '../views/index.php';
    }
}
