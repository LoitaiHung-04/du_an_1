<?php
include_once '../models/BinhLuan.php';

class BinhLuanController
{
    public $binhluan;

    public function __construct()
    {
        $this->binhluan = new BinhLuan();
    }

    public function index()
    {
        $id = 50;
        $data = $this->binhluan->getAll();
        include_once './views/pages/binh_luan/list.php';
    }
}
