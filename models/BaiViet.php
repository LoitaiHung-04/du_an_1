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
        if ($id != "") {
            // Cập nhật bài viết
            $sql = "UPDATE tin_tucs SET title = ?, content = ?, trang_thai = ?, ngay_dang = ?, nguoi_dang = ? WHERE id = ?";
            $params = [$title, $content, $trang_thai, $ngay_dang, 1, $id];
            execute($sql, $params);

            // Cập nhật ảnh nếu có ảnh mới
            if (!empty($image)) {
                $sqlCheck = "SELECT COUNT(*) as count FROM hinh_anh_tin_tucs WHERE tintuc_id = ?";
                $count = query_one_data($sqlCheck, [$id])['count'];

                if ($count > 0) {
                    // Cập nhật ảnh đại diện
                    $sqlUpdateImage = "UPDATE hinh_anh_tin_tucs SET image = ? WHERE tintuc_id = ?";
                    execute($sqlUpdateImage, [$image, $id]);
                } else {
                    // Thêm ảnh mới nếu chưa có
                    $sqlInsertImage = "INSERT INTO hinh_anh_tin_tucs (image, tintuc_id) VALUES (?, ?)";
                    execute($sqlInsertImage, [$image, $id]);
                }
            }
        } else {
            // Thêm bài viết mới
            $sql = "INSERT INTO tin_tucs (title, content, trang_thai, ngay_dang, nguoi_dang) VALUES (?, ?, ?, ?, ?)";
            $params = [$title, $content, $trang_thai, $ngay_dang, 1];
            $insertId = execute($sql, $params);

            // Thêm ảnh đại diện cho bài viết mới
            if (!empty($image)) {
                $sqlInsertImage = "INSERT INTO hinh_anh_tin_tucs (image, tintuc_id) VALUES (?, ?)";
                execute($sqlInsertImage, [$image, $insertId]);
            }
        }
    }

    public function delete($id)
    {
        $sqlImage = "DELETE FROM hinh_anh_tin_tucs WHERE tintuc_id = ?";
        execute($sqlImage, [$id]);

        $sql = "DELETE FROM tin_tucs WHERE id = ?";
        return execute($sql, [$id]);
    }
}
