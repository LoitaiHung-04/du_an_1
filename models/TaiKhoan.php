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
        $sql = 'SELECT * FROM tai_khoans';
        return query_all_data($sql); // Bạn cần chắc chắn là hàm này tồn tại và hoạt động tốt
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM tai_khoans WHERE id = ?";
        return query_one_data($sql, [$id]); // Truyền mảng tham số để tránh SQL Injection
    }

    public function formTaiKhoan($ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $trang_thai, $id = "")
    {
        if ($id != "") {
            // Cập nhật tài khoản
            $sql = "UPDATE tai_khoans SET ho_ten = ?, anh_dai_dien = ?, ngay_sinh = ?, email = ?, so_dien_thoai = ?, gioi_tinh = ?, dia_chi = ?, mat_khau = ?, trang_thai = ? WHERE id = ?";
            $params = [$ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $trang_thai, $id];
        } else {
            // Thêm tài khoản mới
            $sql = "INSERT INTO tai_khoans (ho_ten, anh_dai_dien, ngay_sinh, email, so_dien_thoai, gioi_tinh, dia_chi, mat_khau, trang_thai)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $params = [$ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $trang_thai];
        }

        // Gọi hàm execute để thực thi câu lệnh SQL
        return execute($sql, $params);
    }
    // Trong modelTaiKhoan.php
public function checkEmail($email) {
    // Giả sử bạn đang dùng PDO để truy vấn cơ sở dữ liệu
    $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM tai_khoans WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $count = $stmt->fetchColumn();
    return $count > 0;
}


  

    public function delete($id)
    {
        $sql = "DELETE FROM tai_khoans WHERE id = ?";
        $params = [$id];
        return execute($sql, $params); // Gọi hàm execute để thực thi câu lệnh SQL
    }
}
