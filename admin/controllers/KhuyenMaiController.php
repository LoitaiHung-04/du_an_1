<?php
include '../models/KhuyenMai.php';

class KhuyenMaiController
{
    // hàm hiển thị danh sách
    //hamf heets noois model
    public $modelKhuyenMai;
    public function __construct()
    {
        $this->modelKhuyenMai = new KhuyenMai();
    }
    public function index()
    {
        $KhuyenMai = $this->modelKhuyenMai->getAll();
        //var_dump($baiViets);
        include_once './views/pages/khuyen_mai/list.php';

    }
    //hàm hiển thị form thêm
    public function create()
    {
        include_once './views/pages/khuyen_mai/add.php';

    }

    // hàm hiển thị form sửa
    public function store()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Lấy dữ liệu từ form
        $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
        $mo_ta = $_POST['mo_ta'];
        $giam_gia = $_POST['giam_gia'];
        $ngay_bat_dau = $_POST['ngay_bat_dau'];
        $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
        $trang_thai = $_POST['trang_thai'];
        $so_luong = $_POST['so_luong'];


        

        // Mảng lưu trữ các lỗi (nếu có)
        $error = [];

        // Kiểm tra xem dữ liệu có trống không
        if (empty($ten_khuyen_mai)) {
            $error['ten_khuyen_mai'] = 'Vui lòng nhập tên khuyến mãi';
        }
        if (empty($giam_gia)) {
            $error['giam_gia'] = 'Vui lòng nhập giá trị giảm giá';
        }
        if (empty($ngay_bat_dau)) {
            $error['ngay_bat_dau'] = 'Vui lòng chọn ngày bắt đầu';
        }
        if (empty($ngay_ket_thuc)) {
            $error['ngay_ket_thuc'] = 'Vui lòng chọn ngày kết thúc';
        }
        

        if (empty($so_luong)) {
            $error['so_luong'] = 'Vui nhập số lượng';
        }

        // Nếu không có lỗi thì lưu dữ liệu
        if (empty($error)) {
            // Gọi phương thức từ model để lưu dữ liệu
            $this->modelKhuyenMai->form($ten_khuyen_mai, $mo_ta, $giam_gia, $ngay_bat_dau, $ngay_ket_thuc, $trang_thai, $so_luong);
            unset($_SESSION['error']); // Xóa các lỗi trước đó

            // Chuyển hướng về trang danh sách khuyến mãi
            header('Location: ?act=khuyen-mais');
            exit();
        } else {
            // Lưu lỗi vào session và chuyển hướng về trang thêm mới
            $_SESSION['error'] = $error;
            header('Location: ?act=form-them-khuyen-mai');
            exit();
        }
    }
}


    public function edit()
    {
        if (isset($_GET['id'])) { // Đổi 'bai_viet_id' thành 'id'
            $id = $_GET['id']; // Lấy giá trị từ $_GET['id']
            $KhuyenMai = $this->modelKhuyenMai->getOne($id);
            include_once './views/pages/khuyen_mai/edit.php';
        }
    }


    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy id từ POST
            $id = $_POST['id'];
    
            // Lấy dữ liệu từ form
            $ten_khuyen_mai = $_POST['ten_khuyen_mai'];
            $mo_ta = $_POST['mo_ta'];
            $giam_gia = $_POST['giam_gia'];
            $ngay_bat_dau = $_POST['ngay_bat_dau'];
            $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
            $trang_thai = $_POST['trang_thai'];
            $so_luong = $_POST['so_luong'];
    
            $error = [];
            if (empty($ten_khuyen_mai)) {
                $error['ten_khuyen_mai'] = 'Vui lòng nhập tên khuyến mãi';
            }
            if (empty($giam_gia)) {
                $error['giam_gia'] = 'Vui lòng nhập giá trị giảm giá';
            }
            if (empty($ngay_bat_dau)) {
                $error['ngay_bat_dau'] = 'Vui lòng chọn ngày bắt đầu';
            }
            if (empty($ngay_ket_thuc)) {
                $error['ngay_ket_thuc'] = 'Vui lòng chọn ngày kết thúc';
            }
            
            
            if (empty($so_luong)) {
                $error['so_luong'] = 'Vui nhập số lượng';
            }
            if (empty($error)) {
                $this->modelKhuyenMai->form($ten_khuyen_mai, $mo_ta, $giam_gia, $ngay_bat_dau, 
                                            $ngay_ket_thuc, $trang_thai, $so_luong, $id);
    
                // Xóa lỗi trong session và chuyển hướng
                unset($_SESSION['error']);
                header('Location: ?act=khuyen-mais');
                exit();
            } else {

                // Nếu có lỗi thì lưu lỗi vào session và chuyển hướng về form
                $_SESSION['error'] = $error;
                
                header('Location: ?act=form-sua-khuyen-mai&id=' . $id);
                exit();
            }
        }
    }
    
    public function destroy()
    {

        $id = $_POST['khuyen-mai-id'];
        // var_dump($id);die();
        if ($id) {
            $this->modelKhuyenMai->delete($id);
            header('Location: ?act=khuyen-mais');

        }


    }
}
?>