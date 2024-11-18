<?php


ob_start();
session_start();


// Require các tệp cấu hình và các hàm cần thiết
require_once './commons/env.php';
require_once './commons/function.php';


// Require toàn bộ file Controllers
require_once './controller/DashBoardController.php';
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';

if (!$isAjax) {
    include_once './views/layous/header.php';
}


require_once './controller/AuthController.php';
define('BASE_URL_ADMIN', 'http://localhost:80/du_an_1/admin');
define('BASE_URL_CLIENT', 'http://localhost:80/du_an_1/');


// Route xử lý các hành động
$act = $_GET['act'] ?? '/';  // Default route nếu không có action




// Sử dụng match để xử lý route
match ($act) {

    // Trang chủ
    '/'                 => (new DashBoardController())->index(),
    'chi-tiet-san-pham'                 => (new DashBoardController())->show(),
    'cart'                 => (new DashBoardController())->cart(),
    'add-to-cart'                 => (new DashBoardController())->addToCart(),
    'checkout'                 => (new DashBoardController())->checkout(),
    'profile'                 => (new DashBoardController())->profile(),
    'blog'                 => (new DashBoardController())->blog(),
    'product'                 => (new DashBoardController())->product(),
    'check-login-admin' => (new AuthController())->login(),
    'login' => include './admin/views/pages/login/login.php',
    'register' => (new AuthController())->checkRegisterClient(),
    'form-register' => (new AuthController())->formregister(),
    
    'logout' => (new AuthController())->logout(), // Đăng xuất
    default => (new DashBoardController())->index(), // Dùng mặc định nếu không tìm thấy
};

if (!$isAjax) {
    include_once './views/layous/footer.php';
}

  
    


    



ob_end_flush();
?>

