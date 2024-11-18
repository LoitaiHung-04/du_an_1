<?php
include '../models/TaiKhoanAdmin.php'; 

class TaiKhoanAdminController
{
    public $modelTaiKhoanAdmin; 

    public function __construct()
    {
        $this->modelTaiKhoanAdmin = new TaiKhoanAdmin(); 
    }
    
    // Hiển thị form đăng nhập
    public function formLogin()
    {
        include './views/pages/login/login.php';
    }

    // Xử lý đăng nhập
    public function login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $this->modelTaiKhoanAdmin->checkLoginForm($email, $password);

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
    public function logout()
    {
        if (isset($_SESSION['user_admin'])) {
            unset($_SESSION['user_admin']);
            session_destroy();
            header('Location: ' . BASE_URL_ADMIN . '?act=login-admin');
            exit();
        }
    }
}
?>
