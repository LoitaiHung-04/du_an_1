<?php
include_once 'commons/function.php';

class DashBoard
{
    public function getAll()
    {
        $sql = 'select 
        p.ten_san_pham,
        p.gia_san_pham,
        p.so_luong,
        p.hinh_anh,
        p.trang_thai,
        p.id,
        p.gia_khuyen_mai,
        c.ten_danh_muc as namedm
      
        from san_phams as p 
        inner join danh_mucs as c 
        on p.danh_muc_id = c.id where today_deal_active = 1
     
        order by p.id desc ';

        return query_all_data($sql);
    }
    public function getAllFeature()
    {
        $sql = 'select 
        p.ten_san_pham,
        p.gia_san_pham,
        p.so_luong,
        p.hinh_anh,
        p.trang_thai,
        p.id,
        c.ten_danh_muc as namedm
      
        from san_phams as p 
        inner join danh_mucs as c 
        on p.danh_muc_id = c.id where feature_active = 1
     
        order by p.id desc ';

        return query_all_data($sql);
    }
    public function getOne($id)
    {
        $sql = "select * from san_phams where id=$id";

        return query_one_data($sql);
    }



    public function getImage($id)
    {
        $sql = "SELECT * FROM hinh_anh_san_phams WHERE san_pham_id=?";
        $params = [$id];
        return query_all_data($sql, $params);
    }
    public function accept($id, $status)
    {
        $sql = "UPDATE `don_hangs` SET `trang_thai_id`=? WHERE id=?";
        $params = [$status, $id];
        return execute($sql, $params);
    }
    public function orderDetail($id)
    {
        $sql = "SELECT * FROM chi_tiet_don_hangs WHERE don_hang_id=?";
        $params = [$id];
        return query_all_data($sql, $params);
    }

    public function getOneOrder($id)
    {
        $sql = 'SELECT don_hangs.*, 
        trang_thai_don_hangs.ten_trang_thai_id,
        tai_khoans.ho_ten, 
        tai_khoans.email, 
        tai_khoans.so_dien_thoai,
        trang_thai_thanh_toans.ten_trang_thai_thanh_toan,
        phuong_thuc_thanh_toans.ten_phuong_thuc,
        chi_tiet_don_hangs.don_hang_id
    FROM don_hangs
    INNER JOIN trang_thai_don_hangs 
    ON don_hangs.trang_thai_id = trang_thai_don_hangs.id
    INNER JOIN tai_khoans 
    ON don_hangs.tai_khoan_id = tai_khoans.id  
    INNER JOIN trang_thai_thanh_toans
    ON don_hangs.trang_thai_thanh_toan_id = trang_thai_thanh_toans.id
    INNER JOIN phuong_thuc_thanh_toans
    ON don_hangs.phuong_thuc_thanh_toan_id = phuong_thuc_thanh_toans.id
    INNER JOIN chi_tiet_don_hangs 
    ON don_hangs.id = chi_tiet_don_hangs.don_hang_id
    WHERE don_hangs.id = ?';


        $param = [$id];

        return query_one_data($sql, $param);
    }

    public function getOrderDetail($id)
    {
        $sql = 'SELECT chi_tiet_don_hangs.*, san_phams.ten_san_pham , don_hangs.trang_thai_thanh_toan_id
            FROM chi_tiet_don_hangs
            INNER JOIN san_phams ON chi_tiet_don_hangs.san_pham_id = san_phams.id
            INNER JOIN don_hangs ON  chi_tiet_don_hangs.don_hang_id = don_hangs.id
            WHERE chi_tiet_don_hangs.don_hang_id = ?';

        $params = [$id];
        return query_all_data($sql, $params);
    }


    public function getAllColor()
    {
        $sql = "SELECT * FROM mau_sac";
        return query_all_data($sql);
    }
    public function getAllCapacity()
    {
        $sql = "SELECT * FROM dung_luong";
        return query_all_data($sql);
    }

    public function getVariant($id)
    {
        $sql = "SELECT * FROM bien_thes WHERE product_id =?";
        $params = [$id];
        return query_all_data($sql, $params);
    }
    public function review($content, $rating, $product, $user)
    {
        $sql = "INSERT INTO `danh_gias`(`noi_dung`, `rating`, `san_pham_id`, `user_id`, `ngay_danh_gia`) 
        VALUES (?,?,?,?,?)";
        $now = date('Y-m-d');
        $params = [$content, $rating, $product, $user, $now];
        return execute($sql, $params);
    }
    public function getRating($id)
    {
        $sql = "SELECT SUM(rating) AS total_rating FROM danh_gias WHERE san_pham_id = ?";

        $params = [$id];
        return query_all_data($sql, $params);
    }
    public function getCountRating($id)
    {
        $sql = "SELECT * FROM danh_gias WHERE san_pham_id = ?";

        $params = [$id];
        return query_all_data($sql, $params);
    }
    public function getOneVariant($id)
    {
        $sql = "select * from bien_thes where id=?";
        $params = [$id];
        return query_one_data($sql, $params);
    }
    public function updateProductQuantity($id, $quantity)
    {
        $sql = "UPDATE `san_phams` SET `so_luong`=? WHERE id=?";
        $params = [$quantity, $id];
        return execute($sql,$params);
    }
    public function updateVariantQuantity($id, $quantity)
    {
        $sql = "UPDATE `bien_thes` SET `quantity`=? WHERE id=?";
        $params = [$quantity, $id];
        return execute($sql,$params);
    }
    public function getCart($id)
    {
        $sql = "SELECT g.id,g.san_pham_id,g.so_luong,g.gia_san_pham,g.ten_san_pham,g.tong_tien,g.bien_the_id,g.image,g.user_id,v.mau_sac as mausac , v.dung_luong as dungluong FROM gio_hangs as g INNER JOIN bien_thes as v ON g.bien_the_id = v.id WHERE g.user_id =?";
        $params = [$id];
        return query_all_data($sql, $params);
    }
    public function getBanner()
    {
        $sql = "SELECT * FROM banner";
        return query_all_data($sql);
    }
    public function getAllCategory()
    {
        $sql = "SELECT * FROM danh_mucs";
        return query_all_data($sql);
    }
    /**
     * Lọc sản phẩm theo danh mục, giá, và sắp xếp
     * 
     * @param array $category       Mảng ID danh mục (có thể rỗng)
     * @param int $priceMin         Giá tối thiểu (mặc định = 0)
     * @param int $priceMax         Giá tối đa (mặc định = 0)
     * @param string $orderBy       Kiểu sắp xếp: 'ASC' hoặc 'DESC' (mặc định '')
     * @return array                Danh sách sản phẩm lọc
     */
    public function filterProduct($category = [], $priceMin = 0, $priceMax = 0, $orderBy = '')
    {
        $sql = 'SELECT 
                    p.ten_san_pham,
                    p.gia_san_pham,
                    p.so_luong,
                    p.hinh_anh,
                    p.trang_thai,
                    p.id,
                    c.ten_danh_muc AS namedm
                FROM san_phams AS p 
                INNER JOIN danh_mucs AS c 
                ON p.danh_muc_id = c.id';

        $params = [];
        $hasCondition = false;

        // Lọc theo danh mục
        if (!empty($category)) {
            $placeholders = implode(',', array_fill(0, count($category), '?'));
            $sql .= ($hasCondition ? ' AND' : ' WHERE') . " p.danh_muc_id IN ($placeholders)";
            $params = array_merge($params, $category);
            $hasCondition = true;
        }

        // Lọc theo giá
        if ($priceMin >= 0 && $priceMax > 0) {
            $sql .= ($hasCondition ? ' AND' : ' WHERE') . ' p.gia_san_pham BETWEEN ? AND ?';
            $params = array_merge($params, [$priceMin, $priceMax]);
            $hasCondition = true;
        }

        // Sắp xếp
        if ($orderBy === 'ASC' || $orderBy === 'DESC') {
            $sql .= ' ORDER BY p.gia_san_pham ' . $orderBy;
        }

        return query_all_data($sql, $params);
    }
    public function productDetail($id)
    {
        $sql = "select 
        p.ten_san_pham,
        p.gia_san_pham,
        p.so_luong,
        p.hinh_anh,
        p.trang_thai,
        p.id,
        c.ten_danh_muc as namedm
      
        from san_phams as p 
        inner join danh_mucs as c 
        on p.danh_muc_id = c.id 
     
       where p.id <> ? limit 4";
        $params = [$id];
        return query_all_data($sql, $params);
    }
}
