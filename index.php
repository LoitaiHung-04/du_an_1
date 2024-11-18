<?php
ob_start();
session_start();

// Require các tệp cấu hình và các hàm cần thiết
require_once './commons/env.php';
require_once './commons/function.php';

// Require các Controllers cần thiết
include_once './controller/DashBoardController.php';
include_once './controller/AuthController.php';
define('BASE_URL_ADMIN', 'http://localhost:85/du_an_1/admin');
define('BASE_URL_CLIENT', 'http://localhost:85/du_an_1/');

// Route xử lý các hành động
$act = $_GET['act'] ?? '/';  // Default route nếu không có action




// Sử dụng match để xử lý route
match ($act) {
    '/' => (new DashBoardController())->index(),
    'check-login-admin' => (new AuthController())->login(),
    'login' => include './admin/views/pages/login/login.php',
    'register' => (new AuthController())->checkRegisterClient(),
    'form-register' => (new AuthController())->formregister(),


    


    'logout' => (new AuthController())->logout(), // Đăng xuất
    default => (new DashBoardController())->index(), // Dùng mặc định nếu không tìm thấy
};
ob_end_flush();
?>