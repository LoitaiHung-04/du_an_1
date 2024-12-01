<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | NN Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    include "views/layouts/libs_css.php";
    ?>
    <style>
        .toggle-switch {
            position: relative;
            width: 50px;
            height: 25px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-label {
            position: absolute;
            cursor: pointer;
            background-color: #ccc;
            border-radius: 25px;
            width: 100%;
            height: 100%;
            transition: background-color 0.3s;
        }

        .toggle-label::after {
            content: "";
            position: absolute;
            width: 23px;
            height: 23px;
            border-radius: 50%;
            background-color: white;
            top: 1px;
            left: 1px;
            transition: transform 0.3s;
        }

        .toggle-switch input:checked+.toggle-label {
            background-color: #4caf50;
        }

        .toggle-switch input:checked+.toggle-label::after {
            transform: translateX(25px);
        }

        #price_km {
            display: none;
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        /* Styling cho các nút tab */
        .tab-btn.active {
            background-color: black;
            color: white;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        include "views/layouts/header.php";

        include "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="container" style="margin-top: 100px;">

                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="tabs">
                                <button class="tab-btn active btn btn-primary" onclick="openTab(event, 'general')">Cơ Bản</button>
                                <button class="tab-btn btn btn-warning" onclick="openTab(event, 'variant')">Biến Thể</button>

                            </div>
                        </div>
                        <div class="col-9">
                            <form action="?act=update-product&id=<?= $data['id'] ?>" method="POST" enctype="multipart/form-data">
                                <div class="content">

                                    <div id="general" class="content-section active">

                                        <h1>Update Product</h1>

                                        <div class="form-group">
                                            <label for="" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="name" placeholder="Nhập tên.." value="<?= $data['ten_san_pham'] ?>">
                                            <p class="text-danger"><?= !empty($_SESSION['error']['title']) ? $_SESSION['error']['title'] : '' ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Giá sản phẩm</label>
                                            <input type="text" class="form-control" name="giasanpham" placeholder="Nhập giá..." value="<?= $data['gia_san_pham'] ?>">
                                            <p class="text-danger"><?= !empty($_SESSION['error']['content']) ? $_SESSION['error']['content'] : '' ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Ngày Nhập</label>
                                            <input type="date" class="form-control" name="ngay_nhap" value="<?= $data['ngay_nhap'] ?>">
                                            <p class="text-danger"><?= !empty($_SESSION['error']['content']) ? $_SESSION['error']['content'] : '' ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Số lượng</label>
                                            <input type="text" class="form-control" name="soluong" placeholder="Số lượng" value="<?= $data['so_luong'] ?>">
                                            <p class="text-danger"><?= !empty($_SESSION['error']['content']) ? $_SESSION['error']['content'] : '' ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Danh Mục</label>
                                            <select name="danhmuc" class="form-control">
                                                <option selected>Chọn danh mục</option>
                                                <?php foreach ($danhmuc as $item): ?>
                                                    <option value="<?= $item['id'] ?>" <?= $item['id'] == $data['danh_muc_id'] ? 'selected' : '' ?>>
                                                        <?= $item['ten_danh_muc'] ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <p class="text-danger"><?= !empty($_SESSION['error']['content']) ? $_SESSION['error']['content'] : '' ?></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Trạng thái</label>
                                            <select name="trangthai" class="form-control">
                                                <option value="">Chọn trạng thái</option>
                                                <option value="1" <?= $data['trang_thai'] == 1 ? 'selected' : '' ?>>Hiển Thị</option>
                                                <option value="2" <?= $data['trang_thai'] == 2 ? 'selected' : '' ?>>Không Hiển Thị</option>
                                            </select>
                                            <p class="text-danger"><?= !empty($_SESSION['error']['content']) ? $_SESSION['error']['content'] : '' ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Sản phẩm nổi bật</label>
                                            <div class="toggle-switch">
                                                <input
                                                    type="checkbox"
                                                    id="swich"
                                                    name="feature"
                                                    <?= $data['feature_active'] == 1 ? 'checked' : '' ?> />
                                                <label for="swich" class="toggle-label"></label>
                                            </div>



                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Sản phẩm khuyến mại hôm nay</label>
                                            <div class="toggle-switch">
                                                <input
                                                    type="checkbox"
                                                    id="swich-deal"
                                                    name="sale" />
                                                <label
                                                    for="swich-deal"
                                                    class="toggle-label"></label>
                                            </div>


                                        </div>
                                        <div class="form-group" id="price_km">
                                            <label for="" class="form-label">Giá sản phẩm khuyến mãi</label>
                                            <input type="text" class="form-control" name="giasanpham_km" placeholder="nhập giá...">


                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Mô tả</label>
                                            <textarea name="mo_ta" id="editor"><?= $data['mo_ta'] ?></textarea>
                                        </div>
                                        <?php if (!empty($data['hinh_anh'])): ?>
                                            <img src="/du_an_1/uploads/products/<?= $data['hinh_anh'] ?>" alt="Product Image" width="100" class="mt-2">
                                        <?php endif; ?>
                                        <div class="form-group">
                                            <label for="" class="form-label">Ảnh chính</label>
                                            <input type="file" class="form-control" name="image">

                                            <p class="text-danger"><?= !empty($_SESSION['error']['image']) ? $_SESSION['error']['image'] : '' ?></p>
                                        </div>
                                        <input type="hidden" name="name_image" value="<?= $data['hinh_anh'] ?>">
                                        <div class="list-image" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr;">
                                            <?php if (!empty($image)) : ?>

                                                <?php foreach ($image as $items) : ?>
                                                    <div class="images">
                                                        <img src="/du_an_1/uploads/products/<?= $items['link_hinh_anh'] ?>" width="100px" alt="">
                                                        <a href="?act=delete-image&id=<?= $items['id'] ?>&id-product=<?= $data['id'] ?>" onclick="return confirm('Bạn muốn xóa ?')"><i class='bx bx-x-circle'></i></a>
                                                    </div>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="form-label">Ảnh phụ (Thêm nhiều ảnh)</label>
                                            <input type="file" class="form-control" name="images[]" multiple>
                                            <p class="text-danger"><?= !empty($_SESSION['error']['image']) ? $_SESSION['error']['image'] : '' ?></p>
                                        </div>



                                    </div>
                                    <div id="variant" class="content-section">
                                        <h1>Thông tin biến thể ( Nếu có )</h1>
                                        <div id="variants-table-container">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Variant</th>
                                                        <th>Price</th>
                                                        <th>SKU</th>
                                                        <th>Quantity</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($variant as $index => $value): ?>
                                                        <tr>
                                                            <input type="hidden" name="variants[<?= $index ?>][id]" value="<?= $value['id'] ?>">
                                                            <input type="hidden" name="variants[<?= $index ?>][color]" value="<?= $value['mau_sac'] ?>">
                                                            <input type="hidden" name="variants[<?= $index ?>][capacity]" value="<?= $value['dung_luong'] ?>">
                                                            <td><?= $value['mau_sac'] . '-' . $value['dung_luong'] ?></td>

                                                            <td><input type="text" name="variants[<?= $index ?>][variant_price]" value="<?= $value['price'] ?>"></td>
                                                            <td><input type="text" name="variants[<?= $index ?>][sku]" value="<?= $value['sku'] ?>"></td>
                                                            <td><input type="number" name="variants[<?= $index ?>][quantity]" value="<?= $value['quantity'] ?>"></td>
                                                            <td><button class="btn btn-danger"><i class='bx bx-trash'></i></button></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>



                                    <!-- Bảng hiện thị biến thể -->

                                </div>
                                <button class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("content-section");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            tablinks = document.getElementsByClassName("tab-btn");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }
    </script>
    <script type="module">
        CKEDITOR.replace('editor');
    </script>
    <script>
        document.getElementById('swich-deal').addEventListener('click', () => {
            const checkbox = document.getElementById('swich-deal');
            if (checkbox.checked) {
                document.querySelector('#price_km').style.display = "block";
            } else {
                document.querySelector('#price_km').style.display = "none";

            }
        });
    </script>
</body>

</html>