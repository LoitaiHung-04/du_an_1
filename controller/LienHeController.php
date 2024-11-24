<?php
// Kiểm tra nếu chưa có session thì khởi tạo
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Chỉ gọi session_start nếu chưa có session nào hoạt động
}

include_once './models/LienHe.php'; // Bao gồm model liên hệ

class ContactClientController
{
    private $contactModel;

    // Constructor để khởi tạo model
    public function __construct()
    {
        $this->contactModel = new Contact(); // Khởi tạo model liên hệ
    }

    // Hiển thị form liên hệ
    public function contactForm()
    {
        include './views/home/lienhe.php'; // Bao gồm view để hiển thị form
    }

    // Lưu thông tin liên hệ
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form
            $name = isset($_POST['name']) ? trim($_POST['name']) : '';
            $email = isset($_POST['email']) ? trim($_POST['email']) : '';
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
            $message = isset($_POST['message']) ? trim($_POST['message']) : '';

            // Kiểm tra dữ liệu đầu vào
            if (empty($name) || empty($email) || empty($message)) {
                $_SESSION['error'] = 'Vui lòng nhập đầy đủ thông tin!';
                header("Location: index.php?act=lien-he");
                exit;
            }

            // Kiểm tra định dạng email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = 'Email không hợp lệ!';
                header("Location: index.php?act=lien-he");
                exit;
            }

            // Lưu thông tin liên hệ vào database
            $isStored = $this->contactModel->store($name, $email, $message);

            // Kiểm tra kết quả lưu dữ liệu
            if ($isStored) {
                $_SESSION['success'] = 'Cảm ơn bạn đã liên hệ với chúng tôi!';
            } else {
                $_SESSION['error'] = 'Đã xảy ra lỗi khi gửi thông tin. Vui lòng thử lại.';
            }
            // Quay lại trang liên hệ mà không chuyển hướng
            header("Location: index.php?act=lien-he");
            exit;
        }
    }
}
?>
