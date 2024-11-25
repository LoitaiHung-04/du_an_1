<?php
// Đảm bảo đường dẫn chính xác đến tệp function.php hoặc các tệp cơ sở dữ liệu
include_once dirname(__DIR__) . '/commons/function.php';

class Contact
{
    // Lấy tất cả liên hệ
    public function getAll()
    {
        $sql = 'SELECT * FROM lien_hes';
        return query_all_data($sql); // Lấy tất cả các liên hệ từ database
    }

    // Thêm mới liên hệ
    public function store($ten, $email, $message)
    {
        // Kiểm tra các tham số đầu vào
        if (empty($ten) || empty($email) || empty($message)) {
            return false; // Trả về false nếu thiếu dữ liệu
        }

        // Câu lệnh SQL để thêm dữ liệu
        $sql = "INSERT INTO lien_hes (ten, email, message, created_at, trang_thai) VALUES (?, ?, ?, NOW(), 1)";
        $params = [$ten, $email, $message];

        // Gọi hàm thực thi câu lệnh SQL
        return execute($sql, $params);
    }

    // Lấy một liên hệ theo ID
    public function getOne($id)
    {
        if (empty($id)) {
            return false; // Trả về false nếu không có ID
        }

        $sql = "SELECT * FROM lien_hes WHERE id = ?";
        return query_one_data($sql, [$id]);
    }

    // Xóa liên hệ
    public function delete($id)
    {
        if (empty($id)) {
            return false; // Trả về false nếu không có ID
        }

        $sql = "DELETE FROM lien_hes WHERE id = ?";
        $params = [$id];
        return execute($sql, $params); // Xóa liên hệ theo ID
    }
}
?>
