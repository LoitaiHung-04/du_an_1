<?php
include_once '../commons/function.php';

    class ThongKe{
        public function thongKeDoanhTHu() {
            $sql = '
                SELECT SUM(chi_tiet_don_hangs.don_gia * chi_tiet_don_hangs.so_luong) AS doanh_thu
                FROM chi_tiet_don_hangs
                INNER JOIN don_hangs ON chi_tiet_don_hangs.don_hang_id = don_hangs.id
                WHERE don_hangs.trang_thai_id = 9';  
            return query_one_data($sql); 
        }
        public function AllDonHang() {
            $sql = 'SELECT COUNT(*) AS total_orders
                    FROM don_hangs';
            return query_one_data($sql);
        }
        public function thongKeDonHangTheoTrangThai() {
            $sql = '
                SELECT trang_thai_don_hangs.ten_trang_thai_id, 
                       COUNT(don_hangs.id) AS so_luong_don_hang
                FROM trang_thai_don_hangs
                LEFT JOIN don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id
                GROUP BY trang_thai_don_hangs.ten_trang_thai_id
            ';
            return query_all_data($sql);
        }
        
        
        
    
       
}

?>