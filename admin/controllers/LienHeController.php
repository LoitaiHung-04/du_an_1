<?php
include_once '../models/LienHe.php';

class ContactController
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new Contact();
    }

    // Hiển thị danh sách liên hệ
    public function index()
    {
        $contacts = $this->contactModel->getAll();
        require_once './views/pages/contacts/list.php';
    }

    public function show($id)
    {
        $contact = $this->contactModel->getOne($id);
        if (!$contact) {
            echo "Không tìm thấy thông tin liên hệ.";
            exit;
        }
        require_once './views/pages/contacts/detail.php';
    }

    // Mở form để thêm mới liên hệ
    public function create()
    {
        require_once './views/pages/contacts/add.php';
    }

    // Lưu thông tin liên hệ mới
    public function store()
    {
        // Lấy dữ liệu từ form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Kiểm tra và lưu vào cơ sở dữ liệu
        // if ($this->contactModel->form($name, $email, $message)) {
        //     header("Location: index.php?act=lien-he"); // Chuyển hướng về trang danh sách
        //     exit;
        // } else {
        //     echo "Đã xảy ra lỗi khi lưu thông tin liên hệ.";
        // }
    }

    // // Mở form để chỉnh sửa thông tin liên hệ
    // public function edit($id)
    // {
    //     // Lấy thông tin liên hệ theo ID
    //     $contact = $this->contactModel->getOne($id);

    //     if (!$contact) {
    //         echo "Không tìm thấy thông tin liên hệ.";
    //         exit;
    //     }

    //     // Chuyển dữ liệu vào view để hiển thị
    //     require_once './views/pages/contacts/edit.php';
    // }

    // // Cập nhật thông tin liên hệ
    // public function update($id)
    // {
    //     // Lấy dữ liệu từ form
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $message = $_POST['message'];

    //     // Cập nhật thông tin liên hệ trong database
    //     if ($this->contactModel->form($name, $email, $message, $id)) {
    //         header("Location: index.php?act=lien-he");
    //         exit;
    //     } else {
    //         echo "Đã xảy ra lỗi khi cập nhật thông tin liên hệ.";
    //     }
    // }

    //Detail liên hệ


    // Xóa thông tin liên hệ
    public function destroy($id)
    {
        // Xóa thông tin liên hệ
        if ($this->contactModel->delete($id)) {
            header("Location: index.php?act=lien-he");
            exit;
        } else {
            echo "Đã xảy ra lỗi khi xóa thông tin liên hệ.";
        }
    }
}
