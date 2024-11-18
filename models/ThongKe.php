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

     public function soLuongTaiKhoan()
{
    $sql = "SELECT COUNT(*) AS so_luong_tai_khoan_client FROM tai_khoans WHERE chuc_vu_id = 2";
    
    $user = query_one_data($sql);

    if ($user) {
        return $user['so_luong_tai_khoan_client'];
    } else {
        // Nếu không có kết quả, trả về 0
        return 0;
    }
    
}
public function getTopSanPhamBanChay()
{
    $sql = "SELECT 
                sp.id,
                sp.ten_san_pham,
                sp.gia_san_pham,
                sp.gia_khuyen_mai,
                sp.hinh_anh,
                sp.mo_ta,
                sp.luot_xem,
                SUM(ctdh.so_luong) AS so_luong_ban,
                SUM(ctdh.don_gia * ctdh.so_luong) AS doanh_thu
            FROM 
                chi_tiet_don_hangs AS ctdh
            JOIN 
                san_phams AS sp ON ctdh.san_pham_id = sp.id
            GROUP BY 
                sp.id, sp.ten_san_pham, sp.gia_san_pham, sp.gia_khuyen_mai, sp.hinh_anh, sp.mo_ta, sp.luot_xem
            ORDER BY 
                so_luong_ban DESC
            LIMIT 5";
    return query_all_data($sql);
}
public function getDoanhThuHangNgay()
{
    $sql = "SELECT 
                DATE(dh.ngay_dat) AS ngay,
                SUM(ctdh.don_gia * ctdh.so_luong) AS doanh_thu
            FROM 
                chi_tiet_don_hangs AS ctdh
            JOIN 
                don_hangs AS dh ON ctdh.don_hang_id = dh.id
            GROUP BY 
                DATE(dh.ngay_dat)
            ORDER BY 
                ngay DESC";
    return query_all_data($sql);
}



        
        
        
    
       
}

?>