<?php
include_once 'commons/function.php';
class  GioHang
{
    public function checkCart($id_user, $variant_id, $product_id)
    {
        $sql = "SELECT * FROM gio_hangs 
            WHERE user_id = ? 
              AND bien_the_id = ? 
              AND san_pham_id = ?";
        $params = [$id_user, $variant_id, $product_id];
        return query_one_data($sql, $params);
    }
    public function addCartDB($name,$quantity,$idproduct,$price,$total,$idvariant,$image,$user){
        $sql="INSERT INTO `gio_hangs`(`san_pham_id`, `so_luong`, `ten_san_pham`, `gia_san_pham`, `tong_tien`, `bien_the_id`, `image`, `user_id`) 
        VALUES (?,?,?,?,?,?,?,?)";
        $params =[$idproduct,$quantity,$name,$price,$total,$idvariant,$image,$user];
        return execute($sql,$params);
    }
    public function updateCart($idCart,$total,$quantity){
        $sql="UPDATE `gio_hangs` SET `so_luong`=?,`tong_tien`=? WHERE id=?";
        $params = [$quantity,$total,$idCart];
        return execute($sql,$params);
    }
}
