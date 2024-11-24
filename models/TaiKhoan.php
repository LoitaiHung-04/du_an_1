<?php
include_once '../commons/function.php';

class TaiKhoan

{
    private $pdo ;
    public function __construct(){
        $this->pdo = connectDB();
    }
    

    public function getAll()
    {
        $sql = 'SELECT * FROM tai_khoans WHERE chuc_vu_id = 2';
        return query_all_data($sql); 
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM tai_khoans WHERE id = ?";
        return query_one_data($sql, [$id]); 
    }

    public function formTaiKhoan($ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $trang_thai, $id = "")
    {
        if ($id != "") {
            $sql = "UPDATE tai_khoans SET ho_ten = ?, anh_dai_dien = ?, ngay_sinh = ?, email = ?, so_dien_thoai = ?, gioi_tinh = ?, dia_chi = ?, mat_khau = ?, trang_thai = ? WHERE id = ?";
            $params = [$ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $trang_thai, $id];
        } else {
            $sql = "INSERT INTO tai_khoans (ho_ten, anh_dai_dien, ngay_sinh, email, so_dien_thoai, gioi_tinh, dia_chi, mat_khau, trang_thai)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $params = [$ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $trang_thai];
        }

        return execute($sql, $params);
    }
    public function checkEmail($email) {
        $sql = "SELECT COUNT(*) AS count FROM tai_khoans WHERE email = ?";
        
        $result = $this->query_one_data($sql, [$email]);
        
        return $result['count'] > 0;
    }
    public function search($key) {
        $sql = "SELECT * FROM tai_khoans WHERE ho_ten LIKE ? OR
                                                email LIKE ? OR
                                                so_dien_thoai LIKE ? OR
                                                dia_chi LIKE ? OR
                                                trang_thai LIKE ? OR
                                                gioi_tinh LIKE ?";
        
        $param = [
            "%$key%", // ho ten
            "%$key%", // email
            "%$key%", // so dien thoai
            "%$key%", // dia chi
            "%$key%", // trang thai
            "%$key%"  // gioi tinh
        ];
        
        return query_all_data($sql, $param);
    }




  

    public function delete($id)
    {
        $sql = "DELETE FROM tai_khoans WHERE id = ?";
        $params = [$id];
        return execute($sql, $params); 
    }
}
