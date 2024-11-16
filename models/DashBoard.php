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



    public function getImage($id)
    {
        $sql = "SELECT * FROM hinh_anh_san_phams WHERE san_pham_id=?";
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
    public function getCart($id)
    {
        $sql = "SELECT g.id,g.san_pham_id,g.so_luong,g.gia_san_pham,g.ten_san_pham,g.tong_tien,g.bien_the_id,g.image,g.user_id,v.mau_sac as mausac , v.dung_luong as dungluong FROM gio_hangs as g INNER JOIN bien_thes as v ON g.bien_the_id = v.id WHERE g.user_id =?";
        $params = [$id];
        return query_all_data($sql, $params);
    }
}
