<?php
include_once '../commons/function.php';
class TrangThaiDonHang
{
    public function getAll()
    {
        $sql = 'select * from trang_thai_don_hangs';

        return query_all_data($sql);
    }
    public function getOne($id)
    {
        $sql = "select * from trang_thai_don_hangs where id=$id";

        return query_one_data($sql);
    }
    public function form($trang_thai_don_hangs,$id="")
    {
        if ($id != "") {
            // Sử dụng tham số chuẩn bị trong câu UPDATE
            $sql ="UPDATE `trang_thai_don_hangs` SET `ten_trang_thai_id`=? WHERE id=?";
            $params = [$trang_thai_don_hangs,$id];
           
           
        } else {
            // Sử dụng tham số chuẩn bị trong câu INSERT
            $sql = "INSERT INTO `trang_thai_don_hangs` (`ten_trang_thai_id`) VALUES (?)";                
            $params = [$trang_thai_don_hangs];
               
        }
    
        return execute($sql, $params);
    }
    
    public function delete($id){
        $sql="DELETE FROM trang_thai_don_hangs WHERE id=?";
        $params = [$id];
        return execute($sql, $params);

    }
    
}
