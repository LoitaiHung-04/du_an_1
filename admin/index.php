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
require_once 'controllers/TaiKhoanController.php';
require_once 'controllers/DonHangController.php';
require_once 'controllers/TrangThaiDonHangController.php';
require_once 'controllers/ProductController.php';





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
    //
    'bai-viets'             => (new BaiVietController())->index(),
    'form-them-bai-viet'    => (new BaiVietController())->create(),
    'them-bai-viet'         => (new BaiVietController())->store(),
    'form-sua-bai-viet'     => (new BaiVietController())->edit(),
    'sua-viet'              => (new BaiVietController())->update(),
    'xoa-bai-viet'          => (new BaiVietController())->destroy(),
    //
    'tai-khoans'             => (new TaiKhoanController())->index(),
    'tim-kiem'                  => (new TaiKhoanController())->timkiem(),
    'chi-tiet'             => (new TaiKhoanController())->chitiet(),
    'them-tai-khoan'         => (new TaiKhoanController())->store(),
    'sua-chi-tiet'              => (new TaiKhoanController())->update2(),
    'xoa-tai-khoan'          => (new TaiKhoanController())->destroy(),
    // don hang
    'don-hangs'          => (new DonHangController())->danhSachDonHang(),
    'form-sua-don-hang'          => (new DonHangController())->formEditDonHang(),
    'sua-don-hang'          => (new DonHangController())->postEditDonHang(),
    'chi-tiet-don-hang'          => (new DonHangController())->detailDonHang(),
    'tim-kiem-don-hang'                  => (new DonHangController())->timkiemDonHang(),
    //
    'trang-thai-don-hangs'             => (new TrangThaiDonHangController())->index(),
    'form-them-trang-thai-don-hangs'    => (new TrangThaiDonHangController())->create(),
    'them-trang-thai-don-hangs'         => (new TrangThaiDonHangController())->store(),
    'form-sua-trang-thai-don-hangs'     => (new TrangThaiDonHangController())->edit(),
    'sua-trang-thai-don-hangs'              => (new TrangThaiDonHangController())->update(),
    'xoa-trang-thai-don-hangs'          => (new TrangThaiDonHangController())->destroy(),

    'list-product'                 => (new ProductController())->index(),
    'form-add-product'                 => (new ProductController())->create(),
    'add-product'                 => (new ProductController())->store(),
    'form-sua-product'     => (new ProductController())->edit(),
    'update-product'     => (new ProductController())->update(),
    'delete-product'     => (new ProductController())->destroy(),
    'delete-image'     => (new ProductController())->destroyImage(),

};