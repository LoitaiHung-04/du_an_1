<?php
include_once './models/BaiViet.php';  // Bao gồm model BaiViet

class BaiVietClientController
{
    private $model;

    public function __construct()
    {
        $this->model = new BaiViet();  // Khởi tạo model BaiViet
    }

    // Hiển thị danh sách bài viết
    public function index()
    {
        $data = $this->model->getAll();  // Lấy tất cả bài viết
        include_once './views/home/blog.php';  // Gửi dữ liệu đến view blog.php
    }

    // Hiển thị chi tiết bài viết
    public function detail($id)
    {
        $data = $this->model->getOne($id);  // Lấy chi tiết bài viết
        include_once './views/home/blog-detail.php';  // Gửi dữ liệu đến view blog-detail.php
    }
}
