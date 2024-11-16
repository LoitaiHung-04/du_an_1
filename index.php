<?php

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
include_once 'controller/DashBoardController.php';
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';

if (!$isAjax) {
    include_once './views/layous/header.php';
}

// Require toàn bộ file Models

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'                 => (new DashBoardController())->index(),
    'chi-tiet-san-pham'                 => (new DashBoardController())->show(),
    'cart'                 => (new DashBoardController())->cart(),
    'add-to-cart'                 => (new DashBoardController())->addToCart(),
    'checkout'                 => (new DashBoardController())->checkout(),
    'profile'                 => (new DashBoardController())->profile(),
    'blog'                 => (new DashBoardController())->blog(),
};

if (!$isAjax) {
    include_once './views/layous/footer.php';
}
