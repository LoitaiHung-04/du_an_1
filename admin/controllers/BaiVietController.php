<?php
include '../models/BaiViet.php';

class BaivietController
{
    public $modelBaiViet;

    public function __construct()
    {
        $this->modelBaiViet = new BaiViet();
    }

    public function index()
    {
        $baiViets = $this->modelBaiViet->getAll();
        include_once './views/pages/post/list.php';
    }

    public function create()
    {
        include_once './views/pages/post/add.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $trang_thai = $_POST['trang_thai'];
            $ngay_dang = $_POST['ngay_dang'];
            $image = "";

            if (!empty($_FILES['image']['name'])) {
                $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/post/";
                $imageName = time() . "_" . basename($_FILES["image"]["name"]);
                $targetFile = $targetDir . $imageName;

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    $image = $imageName;
                }
            }
            

            $error = [];
            if (empty($title)) $error['title'] = 'Vui lòng nhập tiêu đề';
            if (empty($content)) $error['content'] = 'Vui lòng nhập nội dung';
            if (empty($trang_thai)) $error['trang_thai'] = 'Vui lòng chọn trạng thái';
            if (empty($ngay_dang)) $error['ngay_dang'] = 'Vui lòng nhập ngày đăng';
            if (empty($error)) {
                $this->modelBaiViet->form($title, $content, $trang_thai, $ngay_dang, "", $image);
                header('Location: ?act=bai-viets');
                exit();
            } else {
                $_SESSION['error'] = $error;
                header('Location: ?act=form-them-bai-viet');
                exit();
            }
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $baiViet = $this->modelBaiViet->getOne($id);
            include_once './views/pages/post/edit.php';
        }
    }

    public function update()
    {
        unset($_SESSION['error']);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $trang_thai = $_POST['trang_thai'];
            $ngay_dang = date('Y-m-d');
            $image = "";

            // Xử lý ảnh mới
            if (!empty($_FILES['image']['name'])) {
                $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/post/";  // Lưu ảnh vào thư mục uploads trong thư mục admin
                $imageName = time() . "_" . basename($_FILES["image"]["name"]);
                $targetFile = $targetDir . $imageName;

                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    $image = $imageName;  // Lưu tên ảnh vào cơ sở dữ liệu
                }
            }
            // var_dump($ngay_dang);die();


            // Kiểm tra các trường cần thiết
            $error = [];
            if (empty($title)) $error['title'] = 'Vui lòng nhập tiêu đề';
            if (empty($content)) $error['content'] = 'Vui lòng nhập nội dung';
            if (empty($trang_thai)) $error['trang_thai'] = 'Vui lòng chọn trạng thái';
            if (empty($ngay_dang)) $error['ngay_dang'] = 'Vui lòng nhập ngày đăng';

            if (empty($error)) {
                // Cập nhật bài viết và ảnh vào cơ sở dữ liệu
                $this->modelBaiViet->form($title, $content, $trang_thai, $ngay_dang, $id, $image);
                header('Location: ?act=bai-viets');
                exit();
            } else {
                $_SESSION['error'] = $error;
                header('Location: ?act=form-sua-bai-viet&id=' . $id);
                exit();
            }
        }
    }

    public function destroy()
    {
        $id = $_GET['id'];
        if ($id) {
            $this->modelBaiViet->delete($id);
            header('Location: ?act=bai-viets');
        }
    }
}
