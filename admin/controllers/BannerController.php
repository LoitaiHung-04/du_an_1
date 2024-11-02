<?php
include '../models/Banner.php';
class BannerController
{
    public $banner;
    public function __construct()
    {
        $this->banner = new Banner();
    }
    public function index()
    {
        $data = $this->banner->getAll();
        include './views/pages/banners/list.php';
    }
    public function create()
    {
        include './views/pages/banners/add.php';
    }
    public function store()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image'];

        $error = [];
        if ($title == "") {
            $error['title'] = " Vui lòng điền title";
        } else {
            unset($error['title']);
        }
        if ($content == "") {
            $error['content'] = " Vui lòng điền content";
        } else {
            unset($error['content']);
        }
        if ($image['name'] == "") {
            $error['image'] = " Vui lòng thêm ảnh";
        } else {
            unset($error['image']);
        }

        $dir = $_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/";
        $name = rand(1, 1000) . '_' . $image['name'];
        $targetFile = $dir . $name;

        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);



        if (count($error) == 0) {
            unset($_SESSION['error']);
            $this->banner->form($title, $content, $name, $id = "");
            header('location:?act=list-banner');
        } else {
            $_SESSION['error'] = $error;
            header('location:?act=add-banner');
            exit();
        }
    }
    public function edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $data = $this->banner->getOne($id);
            include './views/pages/banners/edit.php';
        }
    }
    public function update()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_FILES['image'];
        $id = $_GET['id'];
        $error = [];
        if ($title == "") {
            $error['title'] = " Vui lòng điền title";
        } else {
            unset($error['title']);
        }
        if ($content == "") {
            $error['content'] = " Vui lòng điền content";
        } else {
            unset($error['content']);
        }


        if ($image['name'] != "") {
            $dir = $_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/";
            $name = rand(1, 1000) . '_' . $image['name'];
            $targetFile = $dir . $name;
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/" . $_POST['file'])) {

                unlink($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/" . $_POST['file']);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
        } else {
            $name = $_POST['file'];
        }



        if (count($error) == 0) {
            unset($_SESSION['error']);
            $this->banner->form($title, $content, $name, $id);
            header('location:?act=list-banner');
        } else {
            $_SESSION['error'] = $error;
            header('location:?act=edit-banner&id=' . $id);
            exit();
        }
    }
    public function destroy(){
        if($_GET['id']){
            $id = $_GET['id'];
            $obj = $this->banner->getOne($id);
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/" . $obj['image'])) {

                unlink($_SERVER['DOCUMENT_ROOT'] . "/du_an_1/uploads/" . $obj['image']);
            }
            $this->banner->delete($id);
            header('location:?act=list-banner');
        }
    }
}
