<?php
include_once '../commons/function.php';

   class TaiKhoanAdmin{
    
    public function checkLogin($email, $mat_khau) {
        $sql = "SELECT * FROM tai_khoans WHERE email = ?";
        $param = [$email];
        $user = query_one_data($sql, $param);  
    
        if (!$user) {
            return "Sai thông tin tài khoản";  
        }
    
        if ($email && $mat_khau) {
            if ($user['mat_khau'] == $mat_khau) {  
                if ($user['chuc_vu_id'] == 1) {  
                    if ($user['trang_thai'] == 1) { 
                        return $user;  
                    } else {
                        return "Tài khoản bị cấm";  
                    }
                } else {
                    return "Tài khoản không có quyền đăng nhập";  
                }
            } else {
                return "Mật khẩu sai";  
            }
        } else {
            return "Bạn nhập sai thông tin tài khoản hoặc mật khẩu"; 
        }
    }
}
    
    

    
    
   
  
?>