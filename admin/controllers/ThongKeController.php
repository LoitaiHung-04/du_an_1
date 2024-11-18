<?php
include '../models/ThongKe.php';

class ThongKeController
{
    public $modelThongKe; 

    public function __construct()
    {
        $this->modelThongKe = new ThongKe(); 
    }
    public function index() {
        // Khởi tạo các biến với giá trị mặc định
        $doanhThu = 0; // Hoặc giá trị mặc định khác
        $donHangHienCo = [];
        $donHangTheoTrangThai = [];
    
        // Lấy dữ liệu từ model
        $doanhThu = $this->modelThongKe->thongKeDoanhThu();
        $donHangHienCo = $this->modelThongKe->AllDonHang();
        $donHangTheoTrangThai = $this->modelThongKe->thongKeDonHangTheoTrangThai();
    
        // Gọi view
        require_once '../admin/views/dashboard.php';
    }
}
    
?>