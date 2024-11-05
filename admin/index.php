<?php 

// Require file Common
session_start();
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/BannerController.php';
require_once 'controllers/DanhMucController.php';
require_once 'controllers/BaiVietController.php';

// Require toàn bộ file Models
require_once 'models/DanhMuc.php';
require_once 'models/BaiViet.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    '/'                 => (new DashboardController())->index(),
    'list-banner'                 => (new BannerController())->index(),
    'add-banner'                 => (new BannerController())->create(),
    'store-banner'                 => (new BannerController())->store(),
    'edit-banner'                 => (new BannerController())->edit(),
    'update-banner'                 => (new BannerController())->update(),
    'delete-banner'                 => (new BannerController())->destroy(),
    'danh-mucs' => (new DanhMucController())->index(),
    'form-them-danh-muc' => (new DanhMucController())->create(),
    'them-danh-muc' => (new DanhMucController())->store(),
    'form-sua-danh-muc' => (new DanhMucController())->edit(),
    'sua-danh-muc' => (new DanhMucController())->update(),
    'xoa-danh-muc' => (new DanhMucController())->destroy(),
    'bai-viets'             => (new BaiVietController())->index(),
    'form-them-bai-viet'    => (new BaiVietController())->create(),
    'them-bai-viet'         => (new BaiVietController())->store(),
    'form-sua-bai-viet'     => (new BaiVietController())->edit(),
    'sua-viet'              => (new BaiVietController())->update(),
    'xoa-bai-viet'          => (new BaiVietController())->destroy(),
};