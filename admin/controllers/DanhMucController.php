<?php
include './models/DanhMuc.php';
class DanhMucController
{
    //kết nối đến file model
    public $modelDanhMuc;
    public function __construct()
    {
        $this->modelDanhMuc = new DanhMuc;
    }
    //hàm hiển thị danh sách
    public function index()
    {
        //lấy ra dữ liệu danh mục
        $danhMucs = $this->modelDanhMuc->getAll();
        // var_dump($danhMucs);

        //đưa dữ liệu ra view
        require_once './views/pages/category/list.php';
    }

    //hàm hiển thị form thêm
    public function create()
    {
        require_once './views/pages/category/add.php';
    }

    //hàm xử lý thêm CSDL
   

    //hàm hiển thị form sửa
    public function edit()
    {
        // Lấy id
        $id = $_GET['danh_muc_id'];
        //Lấy thông tin chi tiết của danh mục
        $danhMucs = $this->modelDanhMuc->getDetailData($id);

        //đổ dữ liệu ra form
        require_once './views/pages/category/edit.php';
    }

    //hàm xử lý cập nhật vào CSDL
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy dữ liệu
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $trang_thai = $_POST['trang_thai'];

            // Validate
            $errors = [];
            if (empty($ten_danh_muc)) {
                $errors['ten_danh_muc'] = 'Vui lòng nhập tên danh mục';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Vui lòng chọn trạng thái';
            }

            // Thêm dữ liệu
            if (empty($errors)) {
                if ($this->modelDanhMuc->postData($ten_danh_muc, $trang_thai)) {
                    unset($_SESSION['errors']);
                    header('Location: ?act=danh-mucs');
                    exit();
                } else {
                    $_SESSION['errors']['database'] = 'Lỗi thêm dữ liệu vào cơ sở dữ liệu';
                }
            } else {
                $_SESSION['errors'] = $errors;
                header('Location: ?act=form-them-danh-muc');
                exit();
            }
        }
    }
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $trang_thai = $_POST['trang_thai'];

            $errors = [];
            if (empty($ten_danh_muc)) {
                $errors['ten_danh_muc'] = 'Vui lòng nhập tên danh mục';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Vui lòng chọn trạng thái';
            }

            if (empty($errors)) {
                if ($this->modelDanhMuc->updateData($id, $ten_danh_muc, $trang_thai)) {
                    unset($_SESSION['errors']);
                    header('Location: ?act=danh-mucs');
                    exit();
                } else {
                    $_SESSION['errors']['database'] = 'Lỗi cập nhật dữ liệu vào cơ sở dữ liệu';
                }
            } else {
                $_SESSION['errors'] = $errors;
                header('Location: ?act=form-sua-danh-muc');
                exit();
            }
        }
    }

    //hàm xóa dữ liệu trong CSDL
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['danh_muc_id'];

            //xóa danh mục
            $deleteDanhMuc = $this->modelDanhMuc->deleteData($id);
            header('Location: ?act=danh-mucs');
            exit();
        }
    }
}
