<?php

class TaiKhoanClient

{
    private $pdo ;
    public function __construct(){
        $this->pdo = connectDB();
    }
    

    public function updateTaiKhoan($id, $ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau)
{
    $sql = "UPDATE tai_khoans SET ho_ten = ?, anh_dai_dien = ?, ngay_sinh = ?, email = ?, so_dien_thoai = ?, gioi_tinh = ?, dia_chi = ?, mat_khau = ? WHERE id = ?";
    $params = [$ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $id];
    
    return execute($sql, $params);
}

    public function getTaiKhoanById($id)
    {
        $sql = "SELECT * FROM tai_khoans WHERE id = ?";
        return query_one_data($sql, [$id]); 
    }


    public function query_one_data($sql, $params = [])
    {
        $conn = connectDB();
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function checkEmail($email, $id)
    {
        $sql = "SELECT COUNT(*) AS count FROM tai_khoans WHERE email = ? AND id != ?";
        $params = [$email, $id];
        
        // Sử dụng query_one_data để lấy kết quả
        $result = $this->query_one_data($sql, $params);
        
        return $result['count'] > 0;
    }
}



    
