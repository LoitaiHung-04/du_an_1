
    <?php
    include_once 'commons/function.php';

    class DonHang
    {
        public function getAll()
        {
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai_id 
            FROM don_hangs
            INNER JOIN trang_thai_don_hangs 
            ON don_hangs.trang_thai_id = trang_thai_don_hangs.id';

            return query_all_data($sql);
        }
        public function searchDonHang($key)
        {
            $sql = "SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai_id 
                    FROM don_hangs
                    INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id
                    WHERE don_hangs.ma_don_hang LIKE ? OR
                        don_hangs.ten_nguoi_nhan LIKE ? OR
                        don_hangs.sdt_nguoi_nhan LIKE ? OR
                        don_hangs.ngay_dat LIKE ? OR
                        don_hangs.tong_tien LIKE ? OR
                        trang_thai_don_hangs.ten_trang_thai_id LIKE ?";

            // Các tham số tìm kiếm
            $param = [
                "%$key%",  // ma_don_hang
                "%$key%",  // ten_nguoi_nhan
                "%$key%",  // sdt_nguoi_nhan
                "%$key%",  // ngay_dat
                "%$key%",  // tong_tien
                "%$key%"   // ten_trang_thai
            ];

            return query_all_data($sql, $param);
        }
        public function getDetailDonHang($id)
        {
            $sql = 'SELECT don_hangs.*, 
                        trang_thai_don_hangs.ten_trang_thai_id,
                        tai_khoans.ho_ten, 
                        tai_khoans.email, 
                        tai_khoans.so_dien_thoai,
                        trang_thai_thanh_toans.ten_trang_thai_thanh_toan,
                        phuong_thuc_thanh_toans.ten_phuong_thuc,
                        chi_tiet_don_hangs.don_hang_id
                    FROM don_hangs
                    INNER JOIN trang_thai_don_hangs 
                    ON don_hangs.trang_thai_id = trang_thai_don_hangs.id
                    INNER JOIN tai_khoans 
                    ON don_hangs.tai_khoan_id = tai_khoans.id  
                    INNER JOIN trang_thai_thanh_toans
                    ON don_hangs.trang_thai_thanh_toan_id = trang_thai_thanh_toans.id
                    INNER JOIN phuong_thuc_thanh_toans
                    ON don_hangs.phuong_thuc_thanh_toan_id = phuong_thuc_thanh_toans.id
                    INNER JOIN chi_tiet_don_hangs 
                    ON don_hangs.id = chi_tiet_don_hangs.don_hang_id
                    WHERE don_hangs.id = ?';


            $param = [$id];  // ID của đơn hàng

            return query_one_data($sql, $param);  // Gọi hàm truy vấn với các tham số
        }


        public function getListSpDonHang($id_don_hang)
        {
            $sql = 'SELECT chi_tiet_don_hangs.*, san_phams.ten_san_pham , don_hangs.trang_thai_thanh_toan_id
            FROM chi_tiet_don_hangs
            INNER JOIN san_phams ON chi_tiet_don_hangs.san_pham_id = san_phams.id
            INNER JOIN don_hangs ON  chi_tiet_don_hangs.don_hang_id = don_hangs.id
            WHERE chi_tiet_don_hangs.don_hang_id = ?';
            $param = [$id_don_hang];
            return query_all_data($sql, $param);
        }
        public function getAllTrangThaiDonHang()
        {
            $sql = 'SELECT * FROM trang_thai_don_hangs';
            $param = [];
            return query_all_data($sql, $param);
        }
        public function getKhuyenMai($id_don_hang)
        {
            $sql = 'SELECT khuyen_mais.* 
                    FROM don_hangs 
                    INNER JOIN khuyen_mais ON don_hangs.khuyen_mai_id = khuyen_mais.id 
                    WHERE don_hangs.id = ?';

            $param = [$id_don_hang];

            return query_one_data($sql, $param);
        }
        public function formUpdateDonHang($ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dia_chi_nguoi_nhan, $trang_thai_id, $ghi_chu, $id)
        {

            $sql = "UPDATE `don_hangs` SET 
                        `ten_nguoi_nhan` = ?, 
                        `email_nguoi_nhan` = ?, 
                        `sdt_nguoi_nhan` = ?, 
                        `dia_chi_nguoi_nhan` = ?, 
                        `trang_thai_id` = ?,
                        `ghi_chu` = ?

                    WHERE id = ?";

            $params = [$ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dia_chi_nguoi_nhan, $trang_thai_id, $ghi_chu, $id];


            return execute($sql, $params);
        }
        public function createOrder($code, $user_id, $name, $email, $phone, $address, $date, $total, $note, $VN_PAY = false)
        {
            $sql = "INSERT INTO `don_hangs`( `ma_don_hang`, `tai_khoan_id`, `ten_nguoi_nhan`, `email_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `ngay_dat`, `tong_tien`, `ghi_chu`, `phuong_thuc_thanh_toan_id`, `trang_thai_id`, `trang_thai_thanh_toan_id`) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            if ($VN_PAY == true) {
                $params = [$code, $user_id, $name, $email, $phone, $address, $date, $total, $note, 2, 1, 1];
            } else {
                $params = [$code, $user_id, $name, $email, $phone, $address, $date, $total, $note, 1, 1, 2];
            }
            //  print_r($params);die();
            return addGetLateId($sql, $params);
        }
        public function addDetail($id_order, $sp_id, $price, $quantity, $total, $variant_id, $name)
        {
            $Sql = "INSERT INTO `chi_tiet_don_hangs`(`don_hang_id`, `san_pham_id`, `don_gia`, `so_luong`, `thanh_tien`, `bien_the_id`, `ten_san_pham`) 
            VALUES (?,?,?,?,?,?,?)";
            $params = [$id_order, $sp_id, $price, $quantity, $total, $variant_id, $name];
            return execute($Sql, $params);
        }
        public function getOrdersByUser($id)
        {
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai_id
        FROM don_hangs
        INNER JOIN trang_thai_don_hangs ON don_hangs.trang_thai_id = trang_thai_don_hangs.id
        WHERE don_hangs.tai_khoan_id = ? ORDER BY don_hangs.id DESC';


            $param = [$id];
            return query_all_data($sql, $param);
        }
    }
