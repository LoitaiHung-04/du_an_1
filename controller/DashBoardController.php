<?php
include './models/DashBoard.php';
include './admin/models/DanhMuc.php';

class DashBoardController
{
    public $dashboard;
    public $category;
    public function __construct()
    {
        $this->dashboard = new DashBoard();
        $this->category = new DanhMuc();
    }
    public function index()
    {
        $product = $this->dashboard->getAll();
        $category = $this->category->getAll();
        include_once './views/home/dashboard.php';
    }
    public function show()
    {
        $id = $_GET['id'];
        $variant = $this->dashboard->getVariant($id);
        $image = $this->dashboard->getImage($id);
        $data = $this->dashboard->getOne($id);
        $rating = $this->dashboard->getRating($id);
        $count = $this->dashboard->getCountRating($id);
        $total_rating = intval($rating[0]['total_rating']) / count($count);

        include_once './views/home/detail-product.php';
    }
}
