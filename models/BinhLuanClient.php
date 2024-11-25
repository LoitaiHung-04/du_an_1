<?php
class BinhLuanClient
{
    public function create($san_pham_id, $tai_khoan_id, $noi_dung, $ngay_dang, $trang_thai) {
        $sql = "INSERT INTO `binh_luans`(`san_pham_id`, `tai_khoan_id`, `noi_dung`, `ngay_dang`, `trang_thai`) VALUES (?, ?, ?, ?, ?)";
        $params = [$san_pham_id, $tai_khoan_id, $noi_dung, $ngay_dang, $trang_thai];
        
        return execute($sql, $params);
    }
   

    

    public function getComments($san_pham_id) {
        $sql = "SELECT binh_luans.*, tai_khoans.ho_ten, tai_khoans.anh_dai_dien 
                FROM binh_luans
                JOIN tai_khoans ON binh_luans.tai_khoan_id = tai_khoans.id
                WHERE binh_luans.san_pham_id = ? AND binh_luans.trang_thai = 1
                ORDER BY binh_luans.ngay_dang DESC";
        $params = [$san_pham_id];
        
        return query_all_data($sql, $params);
    } 
}
