<?php


ob_start();
session_start();


// Require các tệp cấu hình và các hàm cần thiết
require_once './commons/env.php';
require_once './commons/function.php';

// Require toàn bộ file Controllers
require_once './controller/DashBoardController.php';
require_once './controller/PromotionController.php';
require_once './controller/ProfileController.php';
require_once './controller/BaiVietController.php';
require_once './controller/LienHeController.php';


$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';

if (!$isAjax) {
    include_once './views/layous/header.php';
}


require_once './controller/AuthController.php';
define('BASE_URL_ADMIN', 'http://localhost:85/du_an_1/admin');
define('BASE_URL_CLIENT', 'http://localhost:85/du_an_1/?');


// Route xử lý các hành động
$act = $_GET['act'] ?? '/';  // Default route nếu không có action




// Sử dụng match để xử lý route
match ($act) {

    // Trang chủ
    '/'                 => (new DashBoardController())->index(),
    'chi-tiet-san-pham'                 => (new DashBoardController())->show(),
    'binh-luan'                 => (new DashBoardController())->comment(),

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
//
    'khuyen-mai' => (new PromotionController())->index(), // Đăng xuất
//
   'tai-khoan' => (new ProfileController())->index(),
     // Đăng xuất
    'doi-mat-khau' => (new ProfileController())->changePassword(), // Đăng xuất

    'check-tai-khoan' => (new ProfileController())->updateTaiKhoan(), // Đăng xuất


    'remove-cart' => (new DashBoardController())->removeCart(), 
    'update-quantity-cart' => (new DashBoardController())->updateCart(), 
    'create-payment' => (new DashBoardController())->createPayment(), 
    'payment-complete' => (new DashBoardController())->orderComplete(), 
    'bai-viet'          => (new BaivietClientController())->index(),
    'chi-tiet-bai-viet' => (new BaiVietClientController())->detail($_GET['id']),
    'lien-he' => (new ContactClientController())->contactForm(),


    default => (new DashBoardController())->index(), // Dùng mặc định nếu không tìm thấy
};

if (!$isAjax) {
    include_once './views/layous/footer.php';
}


ob_end_flush();
?>


