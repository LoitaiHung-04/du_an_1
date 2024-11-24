<?php
include_once '../models/DanhGia.php';

class DanhGiaController
{
    public $danhgia;

    public function __construct()
    {
        $this->danhgia = new DanhGia();
    }

    public function index()
    {
        $id = 50;
        $data = $this->danhgia->getAll();
        include_once './views/pages/danh_gia/list.php';
    }
    public function show()
    {
        $id = $_GET['id'];
        $data = $this->danhgia->getById($id);
        include_once './views/pages/danh_gia/list.php';
    }
}
