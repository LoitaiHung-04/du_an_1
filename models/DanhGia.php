<?php

include_once '../commons/function.php';
class DanhGia
{
    public function getAll()
    {
        $sql = 'select d.id,d.noi_dung,d.rating,d.ngay_danh_gia,s.ten_san_pham as nameSP,u.ho_ten as hoten from danh_gias as d inner join san_phams as s on s.id = d.san_pham_id inner join tai_khoans as u on d.user_id = u.id ';
       
        return query_all_data($sql);
    }
}
