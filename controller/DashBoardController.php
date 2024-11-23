<?php
include './models/DashBoard.php';
include './models/GioHang.php';
include './admin/models/DanhMuc.php';

include './models/BinhLuanClient.php';
class DashBoardController
{
    public $dashboard;
    public $category;
    public $cart;
    public $binh_luan;

    public function __construct()
    {
        $this->dashboard = new DashBoard();
        $this->category = new DanhMuc();
        $this->cart = new GioHang();
        $this->binh_luan = new BinhLuanClient();
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

        $binhluan = $this->binh_luan->getComments($id);

        $variant = $this->dashboard->getVariant($id);
        $image = $this->dashboard->getImage($id);
        $data = $this->dashboard->getOne($id);
        $rating = $this->dashboard->getRating($id);
        $count = $this->dashboard->getCountRating($id);
        $productDetail = $this->dashboard->productDetail($id);
        // var_dump($rating['total_rating']);die();
        if ($rating[0]['total_rating'] != null) {
            $total_rating = intval($rating[0]['total_rating']) / count($count);
        } else {
            $total_rating = 0;
        }
        // var_dump($total_rating);die();

        include_once './views/home/detail-product.php';
    }
    public function cart()
    {
        $id = $_GET['id'];
        $cart = $this->dashboard->getCart($id);
        $total = $this->cart->getTotal($id);
        // var_dump($total);die();
        include_once './views/home/cart.php';
    }
    public function addToCart()
    {
        $iduser = $_SESSION['user_client']['id'];

        $tensp = $_GET['tensp'] ?? null;
        $id_product = $_GET['id_product'] ?? null;
        $quantity_cart = $_GET['quantity_cart'] ?? null;
        $price_cart = $_GET['price_cart'] ?? null;
        $image_cart = $_GET['image_cart'] ?? null;
        $id_variant = $_GET['id_variant'] ?? null;
        $total = intval($price_cart) * intval($quantity_cart);
        $cartUser = $this->cart->checkCart($iduser, $id_variant, $id_product);
        $variantDB = $this->dashboard->getOneVariant($id_variant);
        if ($cartUser != "") {
            $quantityCart = $cartUser['so_luong'] + $quantity_cart;
            if ($quantityCart > $variantDB['quantity']) {
                $response = [
                    'status' => 'error',
                    'title' => 'Đã có lỗi xảy ra',
                    'message' => 'Không đủ số lượng sản phẩm !'
                ];
            } else {
                $totalUpdate = $cartUser['tong_tien'] + $total;
                $quantityUpdate = $cartUser['so_luong'] + $quantity_cart;
                $this->cart->updateCart($cartUser['id'], $totalUpdate, $quantityUpdate);
                $response = [
                    'status' => 'success',
                    'title' => 'Thành công',
                    'message' => 'Thêm thành công vào giỏ hàng !'
                ];
            }
        } else {
            $this->cart->addCartDB($tensp, $quantity_cart, $id_product, $price_cart, $total, $id_variant, $image_cart, $iduser);
            $response = [
                'status' => 'success',
                'title' => 'Thành công',
                'message' => 'Thêm thành công vào giỏ hàng !'
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }


    public function checkout()
    {

        $id = $_GET['id'];
        $cart = $this->dashboard->getCart($id);
        $total = $this->cart->getTotal($id);
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

    public function comment()
    {
        if (!isset($_SESSION['user_client'])) {
            echo "Bạn cần đăng nhập để bình luận.";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $san_pham_id = $_POST['san_pham_id'];
            $tai_khoan_id = $_SESSION['user_client']['id'];
            $noi_dung = $_POST['noi_dung'];
            $ngay_dang = date('Y-m-d H:i:s'); // Tự động lấy ngày hiện tại
            $trang_thai = 1;

            if ($this->binh_luan->create($san_pham_id, $tai_khoan_id, $noi_dung, $ngay_dang, $trang_thai)) {
                header('Location: http://localhost:80/du_an_1/?act=chi-tiet-san-pham&id=' . $san_pham_id);
            } else {
                echo "Đã có lỗi xảy ra. Vui lòng thử lại.";
            }
        }
    }
    public function removeCart()
    {
        $id = $_GET['id'];
        $iduser = $_SESSION['user_client']['id'];
        $this->cart->removeCart($id);
        header('location:?act=cart&id=' . $iduser);
    }
    public function updateCart()
    {
        $id = $_GET['id'];
        $price = $_GET['price'];
        $quantity = $_GET['quantity'];
        $variant = $_GET['variant'];
        $product = $_GET['product'];
        $total = intval($quantity) * intval($price);
        $iduser = $_SESSION['user_client']['id'];
        $variantDB = $this->dashboard->getOneVariant($variant);

        if ($quantity > $variantDB['quantity']) {
            $response = [
                'status' => 'error',
                'title' => 'Đã có lỗi xảy ra',
                'message' => 'Không đủ số lượng sản phẩm !'

            ];
        } else {
            $this->cart->updateCart($id, $total, $quantity);
            $total_cart = $this->cart->getTotal($iduser);

            $response = [
                'status' => 'success',
                'title' => 'Thành công',
                'message' => 'Cập nhật thành công giỏ hàng !',
                'total' => $total_cart[0]['total_sl'],
            ];
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    public function createPayment(){
        $payment_method = $_POST['payment_method'];
        $id =$_SESSION['user_client']['id'];
        $total = $this->cart->getTotal($id);
       
        if($payment_method == 'vnpay'){
            $vnp_TmnCode = "5RWJ4H0U";
            $vnp_HashSecret = "USPLQVHYKRYZBLWMZQEKXHXNLVNNSQZB";
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_TxnRef = time();
            $vnp_OrderInfo = "Thanh toán đơn hàng";
            $vnp_OrderType = "billpayment";
            $vnp_Amount = $total[0]['total_quantity'] * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode ='NCB';
            $vnp_ReturnUrl = "http://localhost/du_an_1/";
           
    
            $inputData = [
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $_SERVER['REMOTE_ADDR'],
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_ReturnUrl,
                "vnp_TxnRef" => $vnp_TxnRef,
            ];
    
            if (!empty($vnp_BankCode)) {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
    
            ksort($inputData);
            $query = "";
            $i = 0;
    
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $query .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $query .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
            }
    
            $hashdata = http_build_query($inputData);
            $vnp_Url .= "?" . $query;
    
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
                $vnp_Url .= '&vnp_SecureHash=' . $vnpSecureHash;
            }
    
            return header('location:'.$vnp_Url);
        }
    }
}
