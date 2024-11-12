<?php
include_once '../models/Product.php';
include_once './models/DanhMuc.php';
class ProductController
{
    public $product;
    public $category;
    public function __construct()
    {
        $this->category = new DanhMuc();
        $this->product = new Product();
    }
    public function index()
    {
        $data = $this->product->getAll();
        include './views/pages/product/list.php';
    }
    public function create()
    {
        $category = $this->category->getAll();
        $color = $this->product->getAllColor();
        $capacity = $this->product->getAllCapacity();
        include './views/pages/product/add.php';
    }
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $price = $_POST['giasanpham'];
            $mota = $_POST['mo_ta'];
            $soluong = $_POST['soluong'];
            $danhmuc = $_POST['danhmuc'];
            $trangthai = $_POST['trangthai'];
            $ngaynhap = $_POST['ngay_nhap'];
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/";
            $name_image = null;
            if ($_FILES['image']) {
                $file = $_FILES['image'];
                $name_file = $file['name'];
                $name_image = rand(1, 1000) . '_' . $name_file;
                $target_file = $target_dir . $name_image;
                move_uploaded_file($file['tmp_name'], $target_file);
            }
            // var_dump($name,$price,$mota,$soluong,$danhmuc,$trangthai,$name_image);die();
            $idLate =  $this->product->form($name, $price, $mota, $soluong, $danhmuc, $trangthai, $name_image, $ngaynhap, $id = "");
            if (isset($_FILES['images'])) {
                $files = $_FILES['images'];
                $total_files = count($files['name']);

                for ($i = 0; $i < $total_files; $i++) {
                    $name_files = $files['name'][$i];
                    $name_images = rand(1, 1000) . '_' . $name_files;
                    $target_files = $target_dir . $name_images;

                    // Di chuyển từng file lên server
                    if (move_uploaded_file($files['tmp_name'][$i], $target_files)) {
                        // Gọi hàm uploadImage với tên file đã được lưu
                        $this->product->uploadImage($idLate, $name_images);
                    }
                }
            }
            $variants = []; // Mảng để lưu các biến thể đã nhóm lại

            foreach ($_POST['variants'] as $key => $value) {
                $index = floor($key / 5);

                if (!isset($variants[$index])) {
                    $variants[$index] = [];
                }

                // Thêm giá trị vào mảng con
                $variants[$index][key($value)] = current($value);
            }
            // var_dump($variants);die();
            foreach ($variants as $key => $value) {
                   $this->product->addVariant($value['color'],$value['capacity'],$value['variant_price'],$value['sku'],$value['quantity'],$idLate);
            }
 

            header('location:?act=list-product');

        }
    }
    public function edit()
    {
        $id = $_GET['id'];
        $data = $this->product->getOne($id);
        $danhmuc = $this->category->getAll();
        $image = $this->product->getImage($id);

        include './views/pages/product/edit.php';
    }
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $price = $_POST['giasanpham'];
            $mota = $_POST['mo_ta'];
            $soluong = $_POST['soluong'];
            $danhmuc = $_POST['danhmuc'];
            $trangthai = $_POST['trangthai'];
            $ngaynhap = $_POST['ngay_nhap'];
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/";
            $name_image = $_POST['name_image'];
            // var_dump($name_image);die();    
            $size = $_FILES['image']['size'];
            if ($size > 0) {
                $product =  $this->product->getOne($id);
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $product['hinh_anh'])) {

                    unlink($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $product['hinh_anh']);
                }
                $file = $_FILES['image'];
                $name_file = $file['name'];
                $name_image = rand(1, 1000) . '_' . $name_file;
                $target_file = $target_dir . $name_image;
                move_uploaded_file($file['tmp_name'], $target_file);
            }
            // var_dump($name,$price,$mota,$soluong,$danhmuc,$trangthai,$name_image);die();
            $idLate =  $this->product->form($name, $price, $mota, $soluong, $danhmuc, $trangthai, $name_image, $ngaynhap, $id);
            if (isset($_FILES['images'])) {
                $files = $_FILES['images'];
                $total_files = count($files['name']);

                for ($i = 0; $i < $total_files; $i++) {
                    $name_files = $files['name'][$i];
                    $name_images = rand(1, 1000) . '_' . $name_files;
                    $target_files = $target_dir . $name_images;

                    // Di chuyển từng file lên server
                    if (move_uploaded_file($files['tmp_name'][$i], $target_files)) {
                        // Gọi hàm uploadImage với tên file đã được lưu
                        $this->product->uploadImage($idLate, $name_images);
                    }
                }
            }
            header('location:?act=list-product');
        }
    }
    public function destroy()
    {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $product =  $this->product->getOne($id);

            if ($product) {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $product['hinh_anh'])) {
                    // var_dump($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $product['hinh_anh']);die();
                    unlink($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $product['hinh_anh']);
                }
                $images = $this->product->getImage($id);

                foreach ($images as $item) {
                    $imagePath = $item['link_hinh_anh'];
                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $imagePath)) {

                        unlink($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $imagePath);
                    }
                    $this->product->deleteImage($item['id']);
                }
                $this->product->deleteProduct($id);
                header('Location: ?act=list-product');
                exit;
            } else {
                header('Location: ?act=list-product');
                exit;
            }
        }
    }
    public function destroyImage()
    {
        $id = $_GET['id'];
        $proid = $_GET['id-product'];
        $product =  $this->product->getImageOne($id);


        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $product['link_hinh_anh'])) {

            unlink($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/products/" . $product['link_hinh_anh']);
        }
        $this->product->deleteImage($id);
        return header('location:?act=form-sua-product&id=' . $proid);
    }
}
