<?php
include '../models/TaiKhoanAdmin.php'; 

class TaiKhoanAdminController
{
    public $modelTaiKhoanAdmin; 

    public function __construct()
    {
        $this->modelTaiKhoanAdmin = new TaiKhoanAdmin(); 
    }
    
    public function formLogin()
    {
        include './views/pages/login/login.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $user = $this->modelTaiKhoanAdmin->checkLogin($email, $password);
    
            if (is_array($user)) {
                $_SESSION['user_admin'] = $user;
                header('Location: ' . BASE_URL_ADMIN);
            } else {
                $_SESSION['error'] = $user;  
                $_SESSION['flash'] = true;
                header('Location: ' . BASE_URL_ADMIN . '?act=login-admin');
                exit();

            }
    
        }
    }
    
    
    public function Logout() {
        if (isset($_SESSION['user_admin'])) {
            unset($_SESSION['user_admin']);
            session_destroy();
            header('Location: ' . BASE_URL_ADMIN . '?act=login-admin');
            
        }
    }

}
?>
