<?php
include_once 'models/TaiKhoanClient.php';

class ProfileController
{
    
    public $profile;
    public $order;
    public function __construct()
    {
        $this->order = new DonHang();
        $this->profile = new TaiKhoanClient();
        
    }
    public function index()

    {
        if (!isset($_SESSION['user_client']['id'])) {
            echo "Bạn cần đăng nhập để xem đơn hàng.";
            return;
        }

        $userId = $_SESSION['user_client']['id'];


        $orders = $this->order->getOrdersByUser($userId);
        // print_r($orders);die();
        include_once './views/home/profile.php';
    }
    public function form(){
        include_once './views/home/form-change-password.php';
    }

    public function updateTaiKhoan()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form.
            $id = $_POST['id'];
            $user = $this->profile->getTaiKhoanById($id);
    
            $ho_ten = !empty($_POST['ho_ten']) ? $_POST['ho_ten'] : $user['ho_ten'];
            $email = !empty($_POST['email']) ? $_POST['email'] : $user['email'];
            $so_dien_thoai = !empty($_POST['so_dien_thoai']) ? $_POST['so_dien_thoai'] : $user['so_dien_thoai'];
            if (strlen($so_dien_thoai) > 15) {
                die("Số điện thoại quá dài. Vui lòng nhập số hợp lệ.");
            }
    
            $gioi_tinh = !empty($_POST['gioi_tinh']) ? $_POST['gioi_tinh'] : $user['gioi_tinh'];
            $dia_chi = !empty($_POST['dia_chi']) ? $_POST['dia_chi'] : $user['dia_chi'];
            $ngay_sinh = !empty($_POST['ngay_sinh']) ? $_POST['ngay_sinh'] : $user['ngay_sinh'];
    
            if ($email !== $user['email'] && $this->profile->checkEmail($email, $id)) {
                $_SESSION['error'] = "Email này đã tồn tại. Vui lòng nhập email khác.";
                exit();
            }
    
            if (!empty($_FILES['anh_dai_dien']['name'])) {
                $target_dir = "uploads/users/";
                $target_file = $target_dir . basename($_FILES['anh_dai_dien']['name']);
                move_uploaded_file($_FILES['anh_dai_dien']['tmp_name'], $target_file);
                $anh_dai_dien = basename($_FILES['anh_dai_dien']['name']);
            } else {
                $anh_dai_dien = $user['anh_dai_dien'];
            }
    
            $this->profile->updateTaiKhoan($id, $ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $user['mat_khau']);
    
            $_SESSION['user_client'] = [
                'id' => $id,
                'ho_ten' => $ho_ten,
                'email' => $email,
                'so_dien_thoai' => $so_dien_thoai,
                'gioi_tinh' => $gioi_tinh,
                'dia_chi' => $dia_chi,
                'ngay_sinh' => $ngay_sinh,
                'anh_dai_dien' => $anh_dai_dien
            ];
    
            header('Location: http://localhost:80/du_an_1/?act=tai-khoan'); 
            exit();
        }
    }
    public function changePassword()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_SESSION['user_client']['id'];
        $mat_khau_cu = $_POST['mat_khau_cu'];
        $mat_khau_moi = $_POST['mat_khau_moi'];
        $xac_nhan_mat_khau = $_POST['xac_nhan_mat_khau'];

        $user = $this->profile->getTaiKhoanById($id);

        if ($mat_khau_cu !== $user['mat_khau']) {
            
            $_SESSION['error'] = "Mật khẩu cũ không đúng.";
            header('Location: http://localhost:80/du_an_1/?act=tai-khoan');
            exit();
        }

        if ($mat_khau_cu === $mat_khau_moi) {
            $_SESSION['error'] = "Mật khẩu mới không được giống mật khẩu cũ.";
            header('Location: http://localhost:80/du_an_1/?act=tai-khoan');
            exit();
        }

        if ($mat_khau_moi !== $xac_nhan_mat_khau) {
            $_SESSION['error'] = "Mật khẩu xác nhận không khớp.";
            header('Location: http://localhost:80/du_an_1/?act=tai-khoan');
            exit();
        }
        $this->profile->updateMatKhau($id, $mat_khau_moi);

        $_SESSION['success'] = "Đổi mật khẩu thành công.";
        $_SESSION['user_client']['mat_khau'] = $mat_khau_moi;
        header('Location: http://localhost:80/du_an_1/?act=tai-khoan');

        exit();
    }
} 
}



   
    


