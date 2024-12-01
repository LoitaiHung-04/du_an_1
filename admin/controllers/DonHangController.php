<?php
include 'models/DonHang.php';

class DonHangController
{
    public $modelDonHang; 

    public function __construct()
    {
        $this->modelDonHang = new DonHang(); 
    }
    public function danhSachDonHang()
    {
        $trangthai= $this->modelDonHang->status();
        $listDonHang = $this->modelDonHang->getAll();
        include_once './views/pages/donhang/list.php';
    }
    public function timkiemDonHang()
{
    if (isset($_POST['key']) && !empty($_POST['key'])) {
        $key = $_POST['key'];
        $resultSearchOrder = $this->modelDonHang->searchDonHang($key);
        include './views/pages/donhang/list.php';
    } else {
        $resultSearchOrder = [];
        include './views/pages/donhang/list.php';
    }
    
    return true;
}
public function updateOrder(){
    $status= $_GET['value'];
    $id = $_GET['id'];
    $this->modelDonHang->updateOrrderStatus($id,$status);
    // var_dump($status,$id);die();
    $data =  [
        'status'=> $status,
        'id'=> $id,
    ];
    echo json_encode($data);
    
}
public function detailDonHang()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id']; // ID đơn hàng

        // Tiến hành lấy thông tin chi tiết
        $donHang = $this->modelDonHang->getDetailDonHang($id);
        $sanPhamDonHang = $this->modelDonHang->getListSpDonHang($id);
        $khuyenMai = $this->modelDonHang->getKhuyenMai($id);
        $listTrangThaiDonHang = $this->modelDonHang->getAllTrangThaiDonHang();

        include './views/pages/donhang/detailOrder.php';
    } else {
        header("Location: ?act=don-hangs");
        exit();
    }
}
public function formEditDonHang()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id']; 
        $donHang = $this->modelDonHang->getDetailDonHang($id);
        $listTrangThaiDonHang = $this->modelDonHang->getAllTrangThaiDonHang();

        if ($donHang) {
            include './views/pages/donhang/edit.php';
        } else {
            header("Location: ?act=don-hangs");
            exit();
        }
    } else {
        
        header("Location: ?act=don-hangs");
        exit();
    }
}
public function postEditDonHang()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $ten_nguoi_nhan = $_POST['ten_nguoi_nhan'] ?? '';
            $email_nguoi_nhan = $_POST['email_nguoi_nhan'] ?? '';
            $sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'] ?? '';
            $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'] ?? '';
            $ghi_chu = $_POST['ghi_chu'] ?? '';
            $trang_thai_id = $_POST['trang_thai_id']?? '';
            $error = [];
            if (empty($ten_nguoi_nhan)) {
                $error['ten_nguoi_nhan'] = 'vui lòng nhập';
            }
            if (empty($sdt_nguoi_nhan)) {
                $error['sdt_nguoi_nhan'] = 'vui lòng nhập';
            }
            if (empty($email_nguoi_nhan)) {
                $error['email_nguoi_nhan'] = 'vui lòng nhập';

            }
            if (empty($dia_chi_nguoi_nhan)) {
                $error['dia_chi_nguoi_nhan'] = 'vui lòng nhập';
            }
            if (empty($trang_thai_id)) {
                $error['trang_thai_id'] = 'lưu ý nếu đơn hàng trong trạng thái hủy đơn , hoàn hàng , thành công bạn sẽ không thể sửa';
            } 
            $_SESSION['error'] = $error ;
            if (empty($error)) {
                
                $thao= $this->modelDonHang->formUpdateDonHang($ten_nguoi_nhan, $sdt_nguoi_nhan, $email_nguoi_nhan, $dia_chi_nguoi_nhan, $trang_thai_id,$ghi_chu,$id);
            
                unset($_SESSION['error']);
                header('Location: ?act=don-hangs');
                exit();
            } else {
                $_SESSION['error'] = $error;
                header('Location: ?act=form-sua-don-hang');
                exit();
            }
        }
    }
   

}

?>