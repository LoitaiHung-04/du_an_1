<?php
class KhuyenMaiClient
{
    public function getAll()
    {
        $sql = "SELECT * FROM khuyen_mais WHERE trang_thai = 'Hoạt Động'";

        return query_all_data($sql);
    }
    public function getOne($id)
    {
        $sql = "select * from khuyen_mais where id=$id ";

        return query_one_data($sql);
    }
    
    
}
