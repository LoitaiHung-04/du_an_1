<?php 

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
include_once 'controller/DashBoardController.php';
include_once  './views/layous/header.php';
// Require toàn bộ file Models

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'                 => (new DashBoardController())->index(),
    'chi-tiet-san-pham'                 => (new DashBoardController())->show(),
};

include_once './views/layous/footer.php';