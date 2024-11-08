<?php
include_once '../commons/function.php';
class BaiViet
{
    public function getAll()
    {
        $sql = 'select * from tin_tucs';

        return query_all_data($sql);
    }
    public function getOne($id)
    {
        $sql = "select * from tin_tucs where id=$id";

        return query_one_data($sql);
    }
    public function form($title, $content, $trang_thai, $ngay_dang,$id="")
    {
        if ($id != "") {
            // Sử dụng tham số chuẩn bị trong câu UPDATE
            $sql ="UPDATE `tin_tucs` SET `title`=?,`content`=?,`trang_thai`=?,`ngay_dang`=?,`nguoi_dang`=? WHERE id=?";
            $params = [$title, $content, $trang_thai, $ngay_dang, 1,$id];
           
           
        } else {
            // Sử dụng tham số chuẩn bị trong câu INSERT
            $sql = "INSERT INTO `tin_tucs` (`title`, `content`, `trang_thai`, `ngay_dang`, `nguoi_dang`) VALUES (?, ?, ?, ?, ?)";                
             $params = [$title, $content, $trang_thai, $ngay_dang, 1];
               
        }
    
        return execute($sql, $params);
    }
    
    public function delete($id){
        $sql="DELETE FROM tin_tucs WHERE id=?";
        $params = [$id];
        return execute($sql, $params);

    }
    
}
