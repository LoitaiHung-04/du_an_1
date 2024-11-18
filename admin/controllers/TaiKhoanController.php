<?php
include '../models/TaiKhoan.php'; 

class TaiKhoanController
{
    public $modelTaiKhoan; 

    public function __construct()
    {
        $this->modelTaiKhoan = new TaiKhoan(); 
    }
    public function index()
    {
        $TaiKhoan = $this->modelTaiKhoan->getAll();
        include './views/pages/taikhoan/list.php';
    }
    public function chitiet()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $TaiKhoan2 = $this->modelTaiKhoan->getOne($id);
        }

        include './views/pages/taikhoan/profile.php';
        
    }
    

    
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['tai_khoan_id'];

            //xóa danh mục
            $deleteDanhMuc = $this->modelTaiKhoan->delete($id);
            header('Location: ?act=tai-khoans');
            exit();
        }
    }
    

    public function store()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ho_ten = $_POST['ten_tai_khoan'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $email = $_POST['email'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $gioi_tinh = $_POST['gioi_tinh'];
        $dia_chi = $_POST['dia_chi'];
        $mat_khau = $_POST['mat_khau'];
        $trang_thai = $_POST['trang_thai'];

        $error = [];
        $anh_dai_dien = '';

        if (isset($_FILES['anh_dai_dien']) && $_FILES['anh_dai_dien']['error'] == 0) {
            $tmp_name = $_FILES['anh_dai_dien']['tmp_name'];
            $file_name = $_FILES['anh_dai_dien']['name'];
            $file_size = $_FILES['anh_dai_dien']['size'];
            $file_type = $_FILES['anh_dai_dien']['type'];

            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($file_type, $allowed_types)) {
                $error['anh_dai_dien'] = 'Chỉ cho phép upload file ảnh (JPEG, PNG, GIF)';
            }

            // Kiểm tra kích thước file (tối đa 2MB)
            if ($file_size > 2 * 1024 * 1024) {
                $error['anh_dai_dien'] = 'Kích thước ảnh không được vượt quá 2MB';
            }

            if (empty($error)) {
               

                $anh_dai_dien = time() . '_' . basename($file_name); // Tạo tên file duy nhất
                $upload_path = "/du_an_1/uploads/users/". $anh_dai_dien;

                if (!move_uploaded_file($tmp_name, $upload_path)) {
                    $error['anh_dai_dien'] = 'Không thể tải ảnh lên';
                }
            }
        } else {
            $error['anh_dai_dien'] = 'Vui lòng chọn ảnh đại diện';
        }

        if (empty($ho_ten)) {
            $error['ten_tai_khoan'] = 'Vui lòng nhập';
        }
        if (empty($ngay_sinh)) {
            $error['ngay_sinh'] = 'Vui lòng nhập';
        }
        if (empty($email)) {
            $error['email'] = 'Vui lòng nhập';
        }
        if (empty($so_dien_thoai)) {
            $error['so_dien_thoai'] = 'Vui lòng nhập';
        }
        if (empty($gioi_tinh)) {
            $error['gioi_tinh'] = 'Vui lòng nhập';
        }
        if (empty($dia_chi)) {
            $error['dia_chi'] = 'Vui lòng nhập';
        }
        if (empty($mat_khau)) {
            $error['mat_khau'] = 'Vui lòng nhập';
        }
        if (empty($trang_thai)) {
            $error['trang_thai'] = 'Vui lòng nhập';
        }

        if ($this->modelTaiKhoan->checkEmail($email)) {
            $error['email'] = 'Email này đã được sử dụng';
        }

        if (empty($error)) {
            $this->modelTaiKhoan->formTaiKhoan($ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $trang_thai);
            unset($_SESSION['error']);
            header('Location: ?act=tai-khoans');
            exit();
        } else {
            
            $_SESSION['error'] = $error;
            header('Location: ?act=form-them-tai-khoan');
            exit();
            
        }
    }
}

public function update2()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $ho_ten = $_POST['ho_ten'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $email = $_POST['email'];
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $gioi_tinh = $_POST['gioi_tinh'];
        $dia_chi = $_POST['dia_chi'];
        $mat_khau = $_POST['mat_khau'];
        $trang_thai = $_POST['trang_thai'];

        $error = [];
        $anh_dai_dien = ''; 
        

        if (isset($_FILES['anh_dai_dien']) && $_FILES['anh_dai_dien']['error'] == 0) {
            $tmp_name = $_FILES['anh_dai_dien']['tmp_name'];
            $file_name = $_FILES['anh_dai_dien']['name'];
            $file_size = $_FILES['anh_dai_dien']['size'];
            $file_type = $_FILES['anh_dai_dien']['type'];

            // Kiểm tra loại file (chỉ cho phép ảnh JPEG, PNG, GIF)
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($file_type, $allowed_types)) {
                $error['anh_dai_dien'] = 'Chỉ cho phép upload file ảnh (JPEG, PNG, GIF)';
            }

            if ($file_size > 2 * 1024 * 1024) {
                $error['anh_dai_dien'] = 'Kích thước ảnh không được vượt quá 2MB';
            }

            if (empty($error)) {
                

                $anh_dai_dien = time() . '_' . basename($file_name); 
                $upload_path = $_SERVER['DOCUMENT_ROOT'] .   '/du_an_1/uploads/users/'.$anh_dai_dien;

                if (!move_uploaded_file($tmp_name, $upload_path)) {
                    $error['anh_dai_dien'] = 'Không thể tải ảnh lên';
                }
            }
        } else {
            $existing_data = $this->modelTaiKhoan->getOne($id);
            $anh_dai_dien = $existing_data['anh_dai_dien'];
        }

        if (empty($ho_ten)) {
            $error['ten_tai_khoan'] = 'Vui lòng nhập';
        }
        if (empty($ngay_sinh)) {
            $error['ngay_sinh'] = 'Vui lòng nhập';
        }
        if (empty($email)) {
            $error['email'] = 'Vui lòng nhập';
        }
        if (empty($so_dien_thoai)) {
            $error['so_dien_thoai'] = 'Vui lòng nhập';
        }
        if (empty($gioi_tinh)) {
            $error['gioi_tinh'] = 'Vui lòng nhập';
        }
        if (empty($dia_chi)) {
            $error['dia_chi'] = 'Vui lòng nhập';
        }
        if (empty($mat_khau)) {
            $error['mat_khau'] = 'Vui lòng nhập';
        }
        if (empty($trang_thai)) {
            $error['trang_thai'] = 'Vui lòng nhập';
        }

        
        if (empty($error)) {
            $this->modelTaiKhoan->formTaiKhoan($ho_ten, $anh_dai_dien, $ngay_sinh, $email, $so_dien_thoai, $gioi_tinh, $dia_chi, $mat_khau, $trang_thai, $id);
            unset($_SESSION['error']);
            header('Location: ?act=tai-khoans');
            exit();
        } else {
            $_SESSION['error'] = $error;
            header('Location: ?act=form-sua-tai-khoan');
            exit();
        }
    }
}
        public function timkiem(){
            $key = $_POST['key'];
            $resultSearch = [];
            if(isset($key)){
            $resultSearch = $this->modelTaiKhoan->search($key);           
            
            include './views/pages/taikhoan/list.php';

            }
            return true ;
        }
        


}
?>
