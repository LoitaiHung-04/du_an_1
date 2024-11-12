<?php
include '../models/TrangThaiDonHang.php';
class TrangThaiDonHangController
{
    // hàm hiển thị danh sách
    //hamf heets noois model
    public $modelTrangThaiDonHang;
    public function __construct()
    {
        $this->modelTrangThaiDonHang = new TrangThaiDonHang();
    }
    public function index()
    {
        $TrangThaiDonHang = $this->modelTrangThaiDonHang->getAll();
        //var_dump($baiViets);
        include_once './views/pages/trang_thai_don_hang/list.php';

    }
    //hàm hiển thị form thêm
    public function create()
    {
        include_once './views/pages/trang_thai_don_hang/add.php';

    }

    // hàm hiển thị form sửa
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //lay ra du lieu
            $trang_thai_don_hangs = $_POST['trang_thai_don_hangs'];

            //jthem giu lieu
            if (empty($error)) {
                $this->modelTrangThaiDonHang->form($trang_thai_don_hangs, $id = "");
                unset($_SESSION['error']);
                header('Location: ?act=trang-thai-don-hangs');
                exit();


            } else {
                $_SESSION['error'] = $error;
                header('Location: ?act=form-them-trang-thai-don-hangs');
                exit();
            }
        }

    }

    public function edit()
    {
        if (isset($_GET['id'])) { // Đổi 'bai_viet_id' thành 'id'
            $id = $_GET['id']; // Lấy giá trị từ $_GET['id']
            $TrangThaiDonHang = $this->modelTrangThaiDonHang->getOne($id);
            include_once './views/pages/trang_thai_don_hang/edit.php';
        }
    }


    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // var_dump($_POST['trang_thai']);die();
            $id = $_POST['id'];
            //lay ra du lieu
            $trang_thai_don_hangs = $_POST['trang_thai_don_hangs'];
            $error = [];
            if (empty($trang_thai_don_hangs)) {
                $error['trang_thai_don_hangs'] = 'vui lòng nhập';

            }
            if (empty($error)) {
                $this->modelTrangThaiDonHang->form($trang_thai_don_hangs, $id );
                unset($_SESSION['error']);
                header('Location: ?act=trang-thai-don-hangs');
                exit();


            } else {
                $_SESSION['error'] = $error;
                header('Location: ?act=form-sua-trang-thai-don-hangs');
                exit();
            }
        }
    }
    public function destroy()
    {

        $id = $_POST['trang_thai_don_hangs_id'];
        // var_dump($id);die();
        if ($id) {
            $this->modelTrangThaiDonHang->delete($id);
            header('Location: ?act=trang-thai-don-hangs');

        }


    }
}
?>