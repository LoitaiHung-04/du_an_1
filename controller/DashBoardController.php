<?php
include './models/DashBoard.php';
include './models/GioHang.php';
include './models/DonHang.php';
include './admin/models/DanhMuc.php';
include 'VNPayController.php';
include './models/BinhLuanClient.php';
class DashBoardController
{
    public $dashboard;
    public $category;
    public $cart;
    public $binh_luan;
    public $vnpaySanbox;
    public $order;

    public function __construct()
    {
        $this->dashboard = new DashBoard();
        $this->category = new DanhMuc();
        $this->cart = new GioHang();
        $this->binh_luan = new BinhLuanClient();
        $this->vnpaySanbox = new VNPayController();
        $this->order = new DonHang();
    }
    public function index()
    {
        $product = $this->dashboard->getAll();
        $productFeature = $this->dashboard->getAllFeature();
        $banner = $this->dashboard->getBanner();

        include_once './views/home/dashboard.php';
    }
    public function reviewProduct()
    {
        $iduser = $_SESSION['user_client']['id'];
        $product = $_GET['product'];
        $rating = $_GET['rating'];
        $content = $_GET['content'];
        $this->dashboard->review($content, $rating, $product, $iduser);
    }
    public function access()
    {
        $id = $_GET['id'];
        $status = $_GET['status'];
        if ($status == 11 || $status == 10) {
            $getDetai = $this->dashboard->orderDetail($id);
            foreach ($getDetai as $key => $value) {
                $product = $this->dashboard->getOne($value['san_pham_id']);
                $variant = $this->dashboard->getOneVariant($value['bien_the_id']);
                $quantityProduct = intval($value['so_luong']) + intval($product['so_luong']);
                $quantityVariant = intval($value['so_luong']) + intval($variant['quantity']);
                $this->dashboard->updateProductQuantity($value['san_pham_id'], $quantityProduct);
                $this->dashboard->updateVariantQuantity($value['bien_the_id'], $quantityVariant);
            }
        }
        $this->dashboard->accept($id, $status);
    }
    public function orderDetail()
    {
        $id = $_GET['id'];
        $donHang = $this->dashboard->getOneOrder($id);
        $sanPhamDonHang = $this->dashboard->getOrderDetail($id);

        // Truyền dữ liệu sang view
        include_once './views/home/detail-order.php';
    }

    public function show()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            if ($id !== null && filter_var($id, FILTER_VALIDATE_INT)) {
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

                include_once './views/home/detail-product.php';
            } else {
                header('location:index.php');
            }
        } else {
            header('location:index.php');
        }
    }
    public function cart()
    {
        if (isset($_SESSION['user_client'])) {
            $id = $_GET['id'];
            $cart = $this->dashboard->getCart($id);
            $total = $this->cart->getTotal($id);
            // var_dump($total);die();
            include_once './views/home/cart.php';
        } else {
            header('location:index.php');
        }
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
        if (isset($_SESSION['user_client'])) {
            $id = $_GET['id'];
            $cart = $this->dashboard->getCart($id);
            $total = $this->cart->getTotal($id);
            include_once './views/home/checkout.php';
        } else {
            header('location:index.php');
        }
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
        $cart = $this->cart->getOneCart($id);
        if ($quantity != 0) {
            if ($quantity > $variantDB['quantity']) {
                $response = [
                    'status' => 'error',
                    'title' => 'Đã có lỗi xảy ra',
                    'message' => 'Không đủ số lượng sản phẩm !',
                    'quantity' => $cart['so_luong'],

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
        } else {
            $response = [
                'status' => 'error',
                'title' => 'Đã có lỗi xảy ra',
                'message' => 'Số lượng không thể bằng 0 !',
                'quantity' => $cart['so_luong'],

            ];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }
    public function addOrderDetail($id_order)
    {
        $id = $_SESSION['user_client']['id'];
        $cart = $this->cart->getAllCart($id);
        // var_dump($cart);die();
        foreach ($cart as $item) {
            $this->order->addDetail($id_order, $item['san_pham_id'], $item['gia_san_pham'], $item['so_luong'], $item['tong_tien'], $item['bien_the_id'], $item['ten_san_pham']);
        }
    }
    private function addQuantityAndDeleteCart()
    {
        $id = $_SESSION['user_client']['id'];

        $cart = $this->cart->getAllCart($id);
        foreach ($cart as $item) {
            $variantDB = $this->dashboard->getOneVariant($item['bien_the_id']);
            $productDB = $this->dashboard->getOne($item['san_pham_id']);
            $quantity = intval($variantDB['quantity']) - intval($item['so_luong']);
            $quantityProduct = intval($productDB['so_luong']) - intval($item['so_luong']);
            $this->dashboard->updateProductQuantity($item['san_pham_id'], $quantityProduct);
            $this->cart->updateQuantityProduct($item['bien_the_id'], $quantity);
        }
        return $this->cart->deleteCart($id);
    }
    public function createPayment()
    {
        unset($_SESSION['error_vnpay']);
        $payment_method = $_POST['payment_method'];
        $id = $_SESSION['user_client']['id'];
        $email = $_SESSION['user_client']['email'];
        $total = $this->cart->getTotal($id);
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $code = rand(1, 100000);
        $date = date('Y-m-d');

        // if ($payment_method == 'vnpay' && intval($total[0]['total_quantity']) > 100000000) {
        //     $_SESSION['error_vnpay'] = 'Không thể thanh toán VNPAY với số tiền trên 100TR';
        //     header('location:?act=checkout&id=' . $id);
        // } else {
        if ($payment_method == 'vnpay') {

            $id_order = $this->order->createOrder($code, $id, $name, $email, $phone, $address, $date, $total[0]['total_quantity'], $note, $VN_PAY = true);
            $this->addOrderDetail($id_order);
            $this->vnpaySanbox->createSanboxVnpay($total[0]['total_quantity']);
            $this->addQuantityAndDeleteCart();
        } else {
            $id_order = $this->order->createOrder($code, $id, $name, $email, $phone, $address, $date, $total[0]['total_quantity'], $note);
            $this->addOrderDetail($id_order);
            $vnp_amount = intval($total[0]['total_quantity']) * 100;
            $current_time = date('YmdHis');
            $this->addQuantityAndDeleteCart();
            header('location:?act=payment-complete&vnp_ResponseCode=11&vnp_BankTranNo=1625381636763&vnp_Amount=' . $vnp_amount . '&vnp_PayDate=' . $current_time);
        }
        // }
    }
    public function orderComplete()
    {
        include './views/home/order-complete.php';
    }
    public function getOrdersByUser()
    {
        if (!isset($_SESSION['user_client']['id'])) {
            echo "Bạn cần đăng nhập để xem đơn hàng.";
            return;
        }

        $userId = $_SESSION['user_client']['id'];


        $orders = $this->order->getOrdersByUser($userId);


        var_dump($orders);
        die();


        include './views/home/profile.php';
    }
}
