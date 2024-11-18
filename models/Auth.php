<?php
include_once './commons/function.php';

class Auth
{
    // Đăng ký người dùng mới
        public function checkMail($email) {
            $sql = "SELECT COUNT(*) AS count FROM tai_khoans WHERE email = :email";
            $params = [':email' => $email];
            $result = query_one_data($sql, $params);
    
            return $result['count'] > 0;
        }
    
        public function register($ho_ten, $email, $so_dien_thoai, $mat_khau, $gioi_tinh, $ngay_sinh, $dia_chi, $chuc_vu_id) {
            $sql = "INSERT INTO tai_khoans (ho_ten, email, so_dien_thoai, mat_khau, gioi_tinh, ngay_sinh, dia_chi, chuc_vu_id) 
                    VALUES (:ho_ten, :email, :so_dien_thoai, :mat_khau, :gioi_tinh, :ngay_sinh, :dia_chi, :chuc_vu_id)";
            $params = [
                ':ho_ten' => $ho_ten,
                ':email' => $email,
                ':so_dien_thoai' => $so_dien_thoai,
                ':mat_khau' => $mat_khau,
                ':gioi_tinh' => $gioi_tinh,
                ':ngay_sinh' => $ngay_sinh,
                ':dia_chi' => $dia_chi,
                ':chuc_vu_id' => $chuc_vu_id
            ];
    
              return execute($sql, $params);
        }
    
    
    
    
    // Kiểm tra và đăng nhập
    public function login($email, $mat_khau)
    {
        // SQL để tìm người dùng theo email và trạng thái là active
        $sql = "SELECT * FROM tai_khoans WHERE email = :email AND trang_thai = 'active'";
        $params = [':email' => $email];

        // Thực thi câu lệnh SQL và lấy dữ liệu người dùng
        $user = query_one_data($sql, $params);

        // Kiểm tra nếu có người dùng và mật khẩu đúng
        if ($user) {
            // Kiểm tra mật khẩu người dùng nhập vào có đúng với mật khẩu đã mã hóa trong cơ sở dữ liệu không
            if (password_verify($mat_khau, $user['mat_khau'])) {
                // Mật khẩu đúng, lưu thông tin người dùng vào session
                $_SESSION['user'] = $user;

                // Kiểm tra quyền người dùng (chuc_vu_id)
                if ($user['chuc_vu_id'] == 1) {
                    // Nếu là admin, chuyển hướng đến trang admin
                    header('Location: ?act=admin');
                    exit();
                } else if ($user['chuc_vu_id'] == 2) {
                    // Nếu là user thường, chuyển hướng đến trang client
                    header('Location: ?act=/');
                    exit();
                }
            } else {
                // Nếu mật khẩu không đúng
                $_SESSION['error'] = 'Email hoặc mật khẩu không đúng!';
                header('Location: ?act=login');
                exit();
            }
        } else {
            // Nếu không tìm thấy người dùng với email đó hoặc trạng thái không phải là 'active'
            $_SESSION['error'] = 'Email hoặc mật khẩu không đúng!';
            header('Location: ?act=login');
            exit();
        }

        // Nếu không đúng, trả về false
        return false;
    }
    public function checkLoginForm($email, $mat_khau)
    {
        // Kiểm tra nếu thông tin nhập vào hợp lệ
        if (empty($email) || empty($mat_khau)) {
            return "Bạn nhập sai thông tin tài khoản hoặc mật khẩu";
        }

        // Truy vấn người dùng từ cơ sở dữ liệu
        $sql = "SELECT * FROM tai_khoans WHERE email = ?";
        $param = [$email];
        $user = query_one_data($sql, $param);

        // Kiểm tra nếu người dùng không tồn tại
        if (!$user) {
            return "Sai thông tin tài khoản";
        }

        // Kiểm tra mật khẩu (so sánh trực tiếp)
        if ($mat_khau === $user['mat_khau']) {
            if ($user['chuc_vu_id'] == 1) {  // Admin
                // Kiểm tra trạng thái tài khoản (trang_thai)
                if ($user['trang_thai'] == 1) {
                    return ['user' => $user, 'role' => 'admin'];  // Thông tin admin
                } else {
                    return "Tài khoản bị cấm";
                }
            } else if ($user['chuc_vu_id'] == 2) {  // Client
                return ['user' => $user, 'role' => 'client'];  // Thông tin client
            } else {
                return "Tài khoản không có quyền đăng nhập";  // Trường hợp khác ngoài Admin và Client
            }
        } else {
            return "Mật khẩu sai";  // Mật khẩu không đúng
        }
    }

    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    public function checkLogin()
    {
        // Kiểm tra nếu session không có thông tin người dùng
        if (empty($_SESSION['user'])) {
            header('Location: login.php');  // Chuyển hướng đến trang đăng nhập
            exit();
        }
    }

    // Lấy thông tin người dùng từ session
    public function getUser()
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }
}
?>