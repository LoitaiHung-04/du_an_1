
<?php

include_once '../commons/function.php';
class BinhLuan
{
    public function getAll()
    {
        $sql = 'select b.id,b.noi_dung,b.ngay_dang,b.trang_thai,s.ten_san_pham as nameSP,u.ho_ten as hoten from binh_luans as b inner join san_phams as s on s.id = b.san_pham_id inner join tai_khoans as u on b.tai_khoan_id = u.id ';
       
        return query_all_data($sql);
    }
    public function getByID($id)
    {
        $sql = 'select b.id,b.noi_dung,b.ngay_dang,b.trang_thai,s.ten_san_pham as nameSP,u.ho_ten as hoten from binh_luans as b inner join san_phams as s on s.id = b.san_pham_id inner join tai_khoans as u on b.tai_khoan_id = u.id where b.san_pham_id =?';
       $params=[$id];
        return query_all_data($sql,$params);
    }
    
    







}
