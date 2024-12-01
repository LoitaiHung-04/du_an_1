<?php
include_once dirname(__DIR__) . '/commons/function.php';

class BaiViet
{
    // Lấy tất cả bài viết cùng với ảnh đại diện
    public function getAll()
    {
        $sql = '
    SELECT tin_tucs.*, hinh_anh_tin_tucs.image 
    FROM tin_tucs 
    LEFT JOIN hinh_anh_tin_tucs ON tin_tucs.id = hinh_anh_tin_tucs.tintuc_id 
    WHERE tin_tucs.trang_thai = 1
    ';
        $result = query_all_data($sql);

        // Đảm bảo rằng mỗi bài viết có đường dẫn chính xác cho ảnhã
        // Đảm bảo rằng mỗi bài viết có đường dẫn chính xác cho ảnh
        foreach ($result as &$item) {
            if (!empty($item['image'])) {
                $item['image'] = './uploads/' . $item['image']; // Đường dẫn đến thư mục uploads
            } else {
                $item['image'] = 'path/to/default-image.jpg'; // Đặt ảnh mặc định nếu không có ảnh
            }
        }

        return $result;
    }

    // Lấy chi tiết bài viết theo id
    public function getOne($id)
    {
        $sql = '
            SELECT tin_tucs.*, hinh_anh_tin_tucs.image 
            FROM tin_tucs 
            LEFT JOIN hinh_anh_tin_tucs ON tin_tucs.id = hinh_anh_tin_tucs.tintuc_id 
            WHERE tin_tucs.id = ?
        ';
        return query_one_data($sql, [$id]); // Giả sử query_one_data là hàm lấy dữ liệu một bản ghi
    }

    public function form($title, $content, $trang_thai, $ngay_dang, $id = "", $image = "")
    {
        // Chuẩn bị thông tin chung cho bài viết
        $params = [$title, $content, $trang_thai, $ngay_dang, 1];
    
        if ($id != "") {
            // Cập nhật bài viết
            $sql = "UPDATE tin_tucs SET title = ?, content = ?, trang_thai = ?, ngay_dang = ?, nguoi_dang = ? WHERE id = ?";
            execute($sql, array_merge($params, [$id]));
    
            // Xử lý hình ảnh
            if (!empty($image)) {
                $this->updateOrInsertImage($id, $image);
            }
        } else {
            // Thêm mới bài viết
            $sql = "INSERT INTO tin_tucs (title, content, trang_thai, ngay_dang, nguoi_dang) VALUES (?, ?, ?, ?, ?)";
            $insertId = execute($sql, $params);
    
            // Thêm hình ảnh nếu có
            if (!empty($image)) {
                $this->insertImage($insertId, $image);
            }
        }
    }
    
    // Hàm xử lý thêm mới hoặc cập nhật hình ảnh
    private function updateOrInsertImage($tintuc_id, $image)
    {
        $sqlCheck = "SELECT COUNT(*) as count FROM hinh_anh_tin_tucs WHERE tintuc_id = ?";
        $count = query_one_data($sqlCheck, [$tintuc_id])['count'];
    
        if ($count > 0) {
            $sqlUpdateImage = "UPDATE hinh_anh_tin_tucs SET image = ? WHERE tintuc_id = ?";
            execute($sqlUpdateImage, [$image, $tintuc_id]);
        } else {
            $this->insertImage($tintuc_id, $image);
        }
    }
    
    // Hàm thêm hình ảnh
    private function insertImage($tintuc_id, $image)
    {
        $sqlInsertImage = "INSERT INTO hinh_anh_tin_tucs (image, tintuc_id) VALUES (?, ?)";
        execute($sqlInsertImage, [$image, $tintuc_id]);
    }
    

// Hàm xử lý thêm mới hoặc cập nhật hình ảnh

    public function delete($id)
    {
        $sqlImage = "DELETE FROM hinh_anh_tin_tucs WHERE tintuc_id = ?";
        execute($sqlImage, [$id]);

        $sql = "DELETE FROM tin_tucs WHERE id = ?";
        return execute($sql, [$id]);
    }
}
