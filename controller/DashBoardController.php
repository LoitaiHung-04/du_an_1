<?php
include './models/DashBoard.php';
include './models/GioHang.php';
include './admin/models/DanhMuc.php';

class DashBoardController
{
    public $dashboard;
    public $category;
    public $cart;
    public function __construct()
    {
        $this->dashboard = new DashBoard();
        $this->category = new DanhMuc();
        $this->cart = new GioHang();
    }
    public function index()
    {
        $product = $this->dashboard->getAll();
        $banner = $this->dashboard->getBanner();
        
        include_once './views/home/dashboard.php';
    }
    public function show()
    {
        $id = $_GET['id'];
        $variant = $this->dashboard->getVariant($id);
        $image = $this->dashboard->getImage($id);
        $data = $this->dashboard->getOne($id);
        $rating = $this->dashboard->getRating($id);
        $count = $this->dashboard->getCountRating($id);
        $productDetail = $this->dashboard->productDetail($id);
        // var_dump($rating['total_rating']);die();
        if($rating[0]['total_rating'] != null){
            $total_rating = intval($rating[0]['total_rating']) / count($count);
        }else{
            $total_rating =0;
        }
        // var_dump($total_rating);die();

        include_once './views/home/detail-product.php';
    }
    public function cart()
    {
        
        $cart = $this->dashboard->getCart(1);
        include_once './views/home/cart.php';
    }
    public function addToCart()
    {
        $tensp = $_GET['tensp'] ?? null;
        $id_product = $_GET['id_product'] ?? null;
        $quantity_cart = $_GET['quantity_cart'] ?? null;
        $price_cart = $_GET['price_cart'] ?? null;
        $image_cart = $_GET['image_cart'] ?? null;
        $id_variant = $_GET['id_variant'] ?? null;
        $total = intval($price_cart) * intval($quantity_cart);
        $cartUser = $this->cart->checkCart(1,$id_variant,$id_product);
         $variantDB = $this->dashboard->getOneVariant($id_variant);
        if($cartUser != ""){
               $quantityCart = $cartUser['so_luong'] + $quantity_cart;
               if($quantityCart > $variantDB['quantity']){
                $response = [
                    'status' => 'error',
                    'title'=>'Đã có lỗi xảy ra',

                    'message' => 'Không đủ số lượng sản phẩm !'
                ];
               }else{
                $totalUpdate = $cartUser['tong_tien'] +$total;
                $quantityUpdate = $cartUser['so_luong'] + $quantity_cart;
                $this->cart->updateCart($cartUser['id'],$totalUpdate,$quantityUpdate);
                $response = [
                    'status' => 'success',
                    'title'=>'Thành công',
                    'message' => 'Thêm thành công vào giỏ hàng !'
                ];
               }
        }else{
            $this->cart->addCartDB($tensp,$quantity_cart,$id_product,$price_cart,$total,$id_variant,$image_cart,1);
            $response = [
                'status' => 'success',
                'title'=>'Thành công',

                'message' => 'Thêm thành công vào giỏ hàng !'
            ];
        }



        // Đặt Content-Type là JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }


    public function checkout()
    {
        
        include_once './views/home/checkout.php';
    }
    public function blog()
    {
        
        include_once './views/home/blog.php';
    }
    public function profile() 
    {
        
        include_once './views/home/profile.php';
    }
    public function product() 
{
    $category = isset($_POST['category']) ? $_POST['category'] : [];
    $priceMin = isset($_POST['price_min']) ? (int)$_POST['price_min'] : 0;
    $priceMax = isset($_POST['price_max']) ? (int)$_POST['price_max'] : 0;
    $orderBy = isset($_POST['order_by']) ? $_POST['order_by'] : '';
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // var_dump($priceMin,$priceMax);die();
        $data = $this->dashboard->filterProduct($category, $priceMin, $priceMax, $orderBy);
    } else {
        $data = $this->dashboard->filterProduct();
    }

    $categories = $this->dashboard->getAllCategory();
    include_once './views/home/product.php';
}

}
