<?php 

// Require file Common
session_start();
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/BannerController.php';

// Require toàn bộ file Models

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
};