<?php
include_once '../commons/function.php';

class Product
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
        c.ten_danh_muc as namedm
      
        from san_phams as p 
        inner join danh_mucs as c 
        on p.danh_muc_id = c.id 
     
        order by p.id desc';

        return query_all_data($sql);
    }
    public function getOne($id)
    {
        $sql = "select * from san_phams where id=$id";

        return query_one_data($sql);
    }
    public function form($name, $price, $mota, $soluong, $danhmuc, $trangthai, $name_image, $ngaynhap, $id = "")
    {
        if ($id != '') {
            // Câu lệnh SQL cho UPDATE
            $sql = "UPDATE `san_phams` SET 
                `ten_san_pham` = ?,
                `gia_san_pham` = ?,
                `gia_khuyen_mai` = ?,
                `hinh_anh` = ?,
                `so_luong` = ?,
                `ngay_nhap`=?,
                `mo_ta` = ?,
                `danh_muc_id` = ?,
                `trang_thai` = ? 
                WHERE id = ?";

            // Tham số cho câu lệnh UPDATE
            $params = [$name, $price, 0, $name_image, $soluong, $ngaynhap, $mota, $danhmuc, $trangthai, $id];
            execute($sql, $params);
            return $id;
        } else {
            // Câu lệnh SQL cho INSERT
            $sql = "INSERT INTO `san_phams` (`ten_san_pham`, `gia_san_pham`, `gia_khuyen_mai`, `hinh_anh`, `so_luong`,`ngay_nhap`, `mo_ta`, `danh_muc_id`, `trang_thai`) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Tham số cho câu lệnh INSERT
            $params = [$name, $price, '1', $name_image, $soluong, $ngaynhap, $mota, $danhmuc, $trangthai];

            return addGetLateId($sql, $params);
        }
    }

    public function uploadImage($productID, $path)
    {
        $sql = "INSERT INTO `hinh_anh_san_phams`(`san_pham_id`, `link_hinh_anh`) VALUES (?,?)";
        $params = [$productID, $path];
        return execute($sql, $params);
    }
    public function getImage($id)
    {
        $sql = "SELECT * FROM hinh_anh_san_phams WHERE san_pham_id=?";
        $params = [$id];
        return query_all_data($sql, $params);
    }
    public function getImageOne($id)
    {
        $sql = "SELECT * FROM hinh_anh_san_phams WHERE id=?";
        $params = [$id];
        return query_one_data($sql, $params);
    }
    public function deleteImage($id)
    {
        $sql = "DELETE FROM hinh_anh_san_phams WHERE id=?";

        $params = [$id];
        return execute($sql, $params);
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM san_phams WHERE id = ?";
        $params = [$id];
        return execute($sql, $params);
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
    public function addVariant($color, $capacity, $price, $sku, $quantity, $proid)
    {
        $sql = "INSERT INTO `bien_thes`(`product_id`, `mau_sac`, `dung_luong`, `price`, `quantity`, `sku`) VALUES (?,?,?,?,?,?)";
        $params = [$proid, $color, $capacity, $price, $quantity, $sku];
        return execute($sql, $params);
    }
    public function getVariant($id)
    {
        $sql = "SELECT * FROM bien_thes WHERE product_id =?";
        $params = [$id];
        return query_all_data($sql, $params);
    }
    public function updateVariant($id, $color, $capacity, $price, $sku, $quantity, $id_variant)
    {
        $sql = "UPDATE `bien_thes` SET `product_id`=?,`mau_sac`=?,`dung_luong`=?,`price`=?,`quantity`=?,`sku`=? WHERE id=?";
        $params = [$id, $color, $capacity, $price, $quantity, $sku, $id_variant];
        return execute($sql, $params);
    }
    public function deleteVariant($id)
    {
        $sql = "DELETE FROM bien_thes WHERE id=?";
        $params = [$id];
        return execute($sql, $params);
    }
  
}
