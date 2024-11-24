<?php
include_once '../commons/function.php';

class TaiKhoanAdmin
{
    // Hàm kiểm tra đăng nhập


    public function checkLogin()
    {
        if (empty($_SESSION['user'])) {
            header('Location: /login.php');
            exit();
        }
    }

    // Lấy thông tin người dùng từ session
    public function getUser()
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

    public function checkLoginForm($email, $mat_khau)
    {
        if (empty($email) || empty($mat_khau)) {
            return "Bạn nhập sai thông tin tài khoản hoặc mật khẩu";
        }
    
        $sql = "SELECT * FROM tai_khoans WHERE email = ?";
        $param = [$email];
        $user = query_one_data($sql, $param);
    
        if (!$user) {
            return "Sai thông tin tài khoản";
        }
    
        if ($mat_khau !== $user['mat_khau']) {
            return "Mật khẩu sai";
        }
    
        if ($user['trang_thai'] != 1) {
            return "Tài khoản bị cấm";
        }
    
        if ($user['chuc_vu_id'] == 1) {
            return ['user' => $user, 'role' => 'admin'];
        } else if ($user['chuc_vu_id'] == 2) {
            return ['user' => $user, 'role' => 'client'];
        } else {
            return "Tài khoản không có quyền đăng nhập";
        }
    }
    
}
