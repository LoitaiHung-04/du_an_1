<?php
include_once '../commons/function.php';

class Contact
{
    // Lấy tất cả liên hệ
    public function getAll()
    {
        $sql = 'SELECT * FROM lien_hes';
        return query_all_data($sql); // Lấy tất cả các liên hệ từ database
    }

    // // Lấy thông tin liên hệ theo ID
    // public function getOne($id)
    // {
    //     $sql = "SELECT * FROM lien_hes WHERE id = ?";
    //     return query_one_data($sql, [$id]); // Lấy một liên hệ theo ID
    // }

    // // Thêm mới hoặc cập nhật liên hệ
    // public function form($ten, $email, $message, $id = null)
    // {
    //     if ($id) {
    //         // Cập nhật thông tin liên hệ
    //         $sql = "UPDATE lien_hes SET ten = ?, email = ?, message = ? WHERE id = ?";
    //         $params = [$ten, $email, $message, $id];
    //     } else {
    //         // Thêm mới liên hệ
    //         $sql = "INSERT INTO lien_hes (ten, email, message) VALUES (?, ?, ?)";
    //         $params = [$ten, $email, $message];
    //     }

    //     return execute($sql, $params); // Thực thi câu lệnh SQL
    // }
    public function getOne($id)
    {
        $sql = "SELECT * FROM lien_hes WHERE id = ?";
        return query_one_data($sql, [$id]); // Lấy một liên hệ theo ID
    }


    // Xóa liên hệ
    public function delete($id)
    {
        $sql = "DELETE FROM lien_hes WHERE id = ?";
        $params = [$id];
        return execute($sql, $params); // Xóa liên hệ theo ID
    }
}
