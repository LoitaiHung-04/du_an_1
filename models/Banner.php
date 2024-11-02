<?php
include_once '../commons/function.php';
class Banner
{
    public function getAll()
    {
        $sql = 'select * from banner';

        return query_all_data($sql);
    }
    public function getOne($id)
    {
        $sql = "select * from banner where id=$id";

        return query_one_data($sql);
    }
    public function form($title, $content, $image, $id = "")
    {
        if ($id != "") {
            // Sử dụng tham số chuẩn bị trong câu UPDATE
            $sql = "UPDATE `banner` SET `title` = ?, `content` = ?, `image` = ? WHERE id = ?";
            $params = [$title, $content, $image, $id];
        } else {
            // Sử dụng tham số chuẩn bị trong câu INSERT
            $sql = "INSERT INTO `banner` (`title`, `content`, `image`) VALUES (?, ?, ?)";
            $params = [$title, $content, $image];
        }
    
        return execute($sql, $params);
    }
    public function delete($id){
        $sql="DELETE FROM banner WHERE id=?";
        $params = [$id];
        return execute($sql, $params);

    }
    
}
