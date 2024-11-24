<?php
class DanhMuc
{
    public $conn;
    //kết nối csdl
    public function __construct()
    {
        $this->conn = connectDB();
    }

    //danh sách danh mục
    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM danh_mucs';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }
    //thêm dữ liệu mới vào csdl
    public function postData($ten_danh_muc, $trang_thai)
    {
        try {
            $sql = "INSERT INTO danh_mucs (ten_danh_muc, trang_thai) VALUES (:ten_danh_muc, :trang_thai)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':ten_danh_muc', $ten_danh_muc);
            $stmt->bindParam(':trang_thai', $trang_thai);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
            return false;
        }
    }

    //lấy thông tin chi tiết

    public function getDetailData($id)
    {
        try {
            $sql = 'SELECT * FROM danh_mucs WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);

            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result ?: false;
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
            return false;
        }
    }

    //cập nhật dữ liệu
    public function updateData($id, $ten_danh_muc, $trang_thai)
    {
        try {
            $sql = "UPDATE danh_mucs SET ten_danh_muc = :ten_danh_muc, trang_thai = :trang_thai WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':ten_danh_muc', $ten_danh_muc);
            $stmt->bindParam(':trang_thai', $trang_thai);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
            return false;
        }
    }


    //xóa dữ liệu trong csdl
    public function deleteData($id)
    {
        try {
            $sql = 'DELETE FROM danh_mucs WHERE id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo 'Lỗi' . $e->getMessage();
        }
    }

    //hủy kết nối csdl
    public function __destruct()
    {
        $this->conn = null;
    }
}
