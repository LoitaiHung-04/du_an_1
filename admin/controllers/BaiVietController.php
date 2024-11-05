<?php
    class BaivietController{
        // hàm hiển thị danh sách
        //hamf heets noois model
        public $modelBaiViet;
        public function __construct(){
            $this->modelBaiViet = new BaiViet();
        }
        public function index(){
            // lay ra du lieu bai viet
            $baiViets = $this->modelBaiViet->getAll();
            //var_dump($baiViets);
            include_once './views/pages/post/list.php';

        }
        //hàm hiển thị form thêm
        public function create(){
            include_once './views/pages/post/add.php';

        }

        // hàm hiển thị form sửa
        public function store(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //lay ra du lieu
                $title = $_POST['title'];
                $content = $_POST['content'];
                $trang_thai = $_POST['trang_thai'];
            
                $error = [];
                if(empty($title)){
                    $error['title'] = 'vui lòng nhập';

                }
                if(empty($content)){
                    $error['content'] = 'vui lòng nhập';
                    
                }
                if(empty($trang_thai)){
                    $error['trang_thai'] = 'vui lòng nhập';
                    
                }
                if(empty($ngay_dang)){
                    $error['ngay_dang'] = 'vui lòng nhập';
                    
                } if(empty($nguoi_dang)){
                    $error['nguoi_dang'] = 'vui lòng nhập';
                    
                }
                //jthem giu lieu
                if(empty($error)){
                    $this->modelBaiViet-> postData($title,$content,$trang_thai,$ngay_dang,$nguoi_dang);
                    unset($_SESSION['error']);
                    header('Location: ?act=bai-viets');
                    exit();


                }else{
                    $_SESSION['error'] = $error;
                    header('Location: ?act=form-them-bai-viet');
                    exit();
                }
            }
            
        }

        public function edit() {
            if (isset($_GET['id'])) { // Đổi 'bai_viet_id' thành 'id'
                $id = $_GET['id']; // Lấy giá trị từ $_GET['id']
                $baiViet = $this->modelBaiViet->getDetailData($id);
                include_once './views/pages/post/add.php';
            } else {
                echo "Bài viết không tồn tại.";
            }
        }
        

        public function update(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $id = $_POST['id'];
                //lay ra du lieu
                $title = $_POST['title'];
                $content = $_POST['content'];
                $trang_thai = $_POST['trang_thai'];
            
                $error = [];
                if(empty($title)){
                    $error['title'] = 'vui lòng nhập';

                }
                if(empty($content)){
                    $error['content'] = 'vui lòng nhập';
                    
                }
                if(empty($trang_thai)){
                    $error['trang_thai'] = 'vui lòng nhập';
                    
                }
                if(empty($ngay_dang)){
                    $error['ngay_dang'] = 'vui lòng nhập';
                    
                } if(empty($nguoi_dang)){
                    $error['nguoi_dang'] = 'vui lòng nhập';
                    
                }
                //jthem giu lieu
                if(empty($error)){
                    $this->modelBaiViet->updateData($id, $title, $content, $trang_thai,$ngay_dang,$nguoi_dang);
                    unset($_SESSION['error']);
                    header('Location: ?act=bai-viets');
                    exit();


                }else{
                    $_SESSION['error'] = $error;
                    header('Location: ?act=form-sua-bai-viet');
                    exit();
                }
            }
            
        
            
        }
        public function destroy(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $id = $_POST['bai_viet_id'];
                 $this->modelBaiViet->deleteData($id);
                header('Location: ?act=bai-viets');
                exit();
        }
        
    }
}
?>