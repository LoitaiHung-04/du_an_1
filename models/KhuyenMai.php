<?php
include_once '../commons/function.php';
class KhuyenMai
{
    public function getAll()
    {
        $sql = 'select * from khuyen_mais';

        return query_all_data($sql);
    }
    public function getOne($id)
    {
        $sql = "select * from khuyen_mais where id=$id";

        return query_one_data($sql);
    }
    public function form($ten_khuyen_mai, $mo_ta, $giam_gia, $ngay_bat_dau, $ngay_ket_thuc, $trang_thai, $so_luong, $id = "")
    {
        if ($id != "") {
            $sql = "UPDATE `khuyen_mais` 
                    SET `ten_khuyen_mai` = ?, `mo_ta` = ?, `giam_gia` = ?, 
                        `ngay_bat_dau` = ?, `ngay_ket_thuc` = ?, `trang_thai` = ?, 
                        `so_luong` = ?
                    WHERE `id` = ?";
            $params = [$ten_khuyen_mai, $mo_ta, $giam_gia, $ngay_bat_dau, 
                       $ngay_ket_thuc, $trang_thai, $so_luong, $id];
        } else {
            $sql = "INSERT INTO `khuyen_mais` (`ten_khuyen_mai`, `mo_ta`, `giam_gia`, 
                                                `ngay_bat_dau`, `ngay_ket_thuc`, `trang_thai`, 
                                                `so_luong`) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $params = [$ten_khuyen_mai, $mo_ta, $giam_gia, $ngay_bat_dau, 
                       $ngay_ket_thuc, $trang_thai, $so_luong];
        }
    
        return execute($sql, $params);
    }
    
    
    public function delete($id){
        $sql="DELETE FROM khuyen_mais WHERE id=?";
        $params = [$id];
        return execute($sql, $params);

    }
    
}
