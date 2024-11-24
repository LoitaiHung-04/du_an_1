<?php
include_once './models/Auth.php';


class AuthController
{
    private $authModel;
    private $modelTaiKhoanAdmin;

    

    public function __construct()
    {
        // Khởi động session nếu chưa có
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $this->authModel = new Auth();

        
    }
    public function formregister(){
        include 'views/auth/register.php';
    }
   
    // Xử lý đăng nhập
    public function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $this->authModel->checkLoginForm($email, $password);

        if (is_array($result) && isset($result['user'])) {
            if ($result['role'] == 'admin') {
                $_SESSION['user_admin'] = $result['user'];
                header('Location: ' . BASE_URL_ADMIN);
            } elseif ($result['role'] == 'client') {
                $_SESSION['user_client'] = $result['user'];
                header('Location: ' . BASE_URL_CLIENT);
            }
            exit();
        } else {
            $_SESSION['error'] = $result;
            $_SESSION['flash'] = true;
            header('Location: ' . BASE_URL_ADMIN . '?act=login-admin');
            exit();
        }
    }
}
   

    public function checkRegisterClient() {
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $mat_khau = $_POST['mat_khau'];
        $gioi_tinh = $_POST['gioi_tinh'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $dia_chi = $_POST['dia_chi'];
        $chuc_vu_id = 2;

        $existingUser = $this->authModel->checkMail($email);

        if ($existingUser > 0) {
            $_SESSION['error'] = "Email đã tồn tại. Vui lòng chọn email khác.";
            header('Location: ?act=form-register');
            exit();
        }

        $userId = $this->authModel->register($ho_ten, $email, $so_dien_thoai, $mat_khau, $gioi_tinh, $ngay_sinh, $dia_chi, $chuc_vu_id);

        if ($userId) {
            $_SESSION['success'] = "Đăng ký thành công! Bạn có thể đăng nhập ngay.";
            
            header('Location: ?act=login');
        } else {
            $_SESSION['error'] = "Đăng ký thất bại. Vui lòng thử lại.";
            header('Location: ?act=register');
        }
        exit();
    }


    
    
    

    public function logout() {
        if(isset($_SESSION['user_client'])){
        unset($_SESSION['user_client']);
        
        // Có thể xóa thêm các session khác nếu cần
        // unset($_SESSION['other_data']);
        
        // Chuyển hướng về trang đăng nhập hoặc trang chủ
        header('Location: ' . BASE_URL_CLIENT);
        exit();    
    }    
    }



}
?>
