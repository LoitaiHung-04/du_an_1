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
        #price_km{
            display: none;
        }
        /* Ẩn tất cả các tab nội dung trừ tab đang được chọn */
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

        .attribute-color {
            display: flex;
            gap: 5px;

        }

        .attribute-capacity {
            display: flex;
            gap: 5px;
        }

        .color-attribute {

            padding: 10px 15px 10px 15px;
            border: 2px solid lightblue;
            border-radius: 5px;

        }

        .capacity-attribute {
            padding: 10px 15px 10px 15px;
            border: 2px solid lightblue;
            border-radius: 5px;
        }

        .color-container {
            display: flex;
        }

        .capacity-container {
            display: flex;
        }

        .title-capacity {
            min-width: 200px;
        }

        .title-color {
            min-width: 200px;
        }

        .color-attribute {
            display: inline-block;
            position: relative;
            padding: 10px 15px;
            border: 2px solid lightblue;
            border-radius: 5px;
            font-weight: normal;
            color: black;
        }

        .color input:checked+.color-attribute {
            color: aqua;
            font-weight: bold;
        }

        .color-option:checked+label::before {
            content: "✔";
            position: absolute;
            top: 0;
            right: 0;
            background: black;
            color: white;
            padding: 2px 5px;
            border-radius: 0 3px 0 90%;
            font-size: 10px;
        }

        /* Ẩn input nhưng vẫn giữ chọn được */
        .color-option {
            position: absolute;
            opacity: 0;
        }



        .capacity-attribute {
            display: inline-block;
            position: relative;

        }

        .capacity input:checked+.capacity-attribute {
            color: #e74c3c;
            font-weight: bold;
        }

        .capacity-option:checked+label::before {
            content: "✔";
            position: absolute;
            top: 0;
            right: 0;
            background: #e74c3c;
            color: white;
            padding: 2px 5px;
            border-radius: 0 3px 0 90%;
            font-size: 10px;
        }

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
                            <form action="?act=add-product" method="POST" enctype="multipart/form-data">
                                <div class="content">

                                    <div id="general" class="content-section active">
                                        <h1>Thông tin cơ bản sản phẩm</h1>
                                        <div class="form-group">
                                            <label for="" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" name="name" placeholder="Nhập tên..">
                                            <p class="text-danger"><?= !empty($_SESSION['error']['title']) ? $_SESSION['error']['title'] : ''    ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Giá sản phẩm</label>
                                            <input type="text" class="form-control" name="giasanpham" placeholder="nhập giá...">
                                            <p class="text-danger">
                                                <?= !empty($_SESSION['error']['content'])  ? $_SESSION['error']['content'] : ''    ?>
                                            </p>

                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Ngày Nhập</label>
                                            <input type="date" class="form-control" name="ngay_nhap">
                                            <p class="text-danger">
                                                <?= !empty($_SESSION['error']['content'])  ? $_SESSION['error']['content'] : ''    ?>
                                            </p>

                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Số lượng</label>
                                            <input type="text" class="form-control" name="soluong" placeholder="soluong">
                                            <p class="text-danger">
                                                <?= !empty($_SESSION['error']['content'])  ? $_SESSION['error']['content'] : ''    ?>
                                            </p>

                                        </div>


                                        <div class="form-group">
                                            <label for="" class="form-label">Danh Mục</label>
                                            <select name="danhmuc" id="" class="form-control">
                                                <option selected>Chọn danh mục</option>
                                                <?php foreach ($category as $item): ?>

                                                    <option value="<?= $item['id'] ?>"><?= $item['ten_danh_muc'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <p class="text-danger">
                                                <?= !empty($_SESSION['error']['content'])  ? $_SESSION['error']['content'] : ''    ?>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Trạng thái </label>
                                            <select name="trangthai" id="" class="form-control">
                                                <option value="">Chọn trạng thái</option>
                                                <option value="1">Hiển Thị</option>
                                                <option value="2">Không Hiển Thị</option>
                                            </select>
                                            <p class="text-danger">
                                                <?= !empty($_SESSION['error']['content'])  ? $_SESSION['error']['content'] : ''    ?>
                                            </p>

                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Sản phẩm nổi bật</label>
                                            <div class="toggle-switch">
                                                <input
                                                    type="checkbox"
                                                    id="swich"
                                                    name="status" />
                                                <label
                                                    for="swich"
                                                    class="toggle-label"></label>
                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Sản phẩm khuyến mại hôm nay</label>
                                            <div class="toggle-switch">
                                                <input
                                                    type="checkbox"
                                                    id="swich-deal"
                                                    name="status" />
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
                                            <label for="" class="form-label">Mô tả </label>
                                            <textarea name="mo_ta" id="editor"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="image">
                                            <p class="text-danger"><?= !empty($_SESSION['error']['image']) ? $_SESSION['error']['image'] : ''    ?></p>

                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Image (Thêm nhiều ảnh)</label>
                                            <input type="file" class="form-control" name="images[]" multiple>
                                            <p class="text-danger"><?= !empty($_SESSION['error']['image']) ? $_SESSION['error']['image'] : ''    ?></p>

                                        </div>
                                    </div>
                                    <div id="variant" class="content-section">
                                        <h1>Thông tin biến thể ( Nếu có )</h1>
                                        <div class="color-container">
                                            <div class="title-color">
                                                <h4 style="font-weight: bold;">Color</h4>
                                            </div>
                                            <div class="attribute-color">
                                                <?php foreach ($color as $items): ?>
                                                    <div class="color">
                                                        <input type="checkbox" class="color-option" value="<?= $items['name'] ?>" id="color-<?= $items['id'] ?>">
                                                        <label for="color-<?= $items['id'] ?>" class="color-attribute" style="background-color:<?= $items['name'] ?>; cursor: pointer; "><?= $items['name'] ?></label>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>

                                        </div>


                                        <div class="capacity-container">
                                            <div class="title-capacity">
                                                <h4 style="font-weight: bold;">Capacity</h4>
                                            </div>
                                            <div class="attribute-capacity">
                                                <?php foreach ($capacity as $items): ?>
                                                    <div class="capacity">
                                                        <input type="checkbox" value="<?= $items['name'] ?>" id="capacity-<?= $items['id'] ?>" class="capacity-option" hidden>
                                                        <label class="capacity-attribute" for="capacity-<?= $items['id'] ?>" style="cursor: pointer;">
                                                            <?= $items['name'] ?>
                                                        </label>
                                                    </div>
                                                <?php endforeach ?>

                                            </div>
                                        </div>
                                        <button type="button" onclick="generateVariants()" class="btn btn-success">Tạo biến thể</button>

                                        <!-- Bảng hiện thị biến thể -->
                                        <div id="variants-table-container" style="display: none;">
                                            <table id="variants-table" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Variant</th>
                                                        <th> Price</th>
                                                        <th>SKU</th>
                                                        <th>Quantity</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
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

    <script>
        document.querySelectorAll('.capacity-option').forEach(option => {
            option.addEventListener('change', function() {
                const label = this.nextElementSibling;
                if (this.checked) {
                    label.classList.add('active');
                } else {
                    label.classList.remove('active');
                }
            });
        });
    </script>
    <script>
        function generateVariants() {


            const colors = Array.from(document.querySelectorAll('.color-option:checked')).map(el => el.value);
            const capacities = Array.from(document.querySelectorAll('.capacity-option:checked')).map(el => el.value);

            const tableContainer = document.getElementById("variants-table-container");
            const tableBody = document.getElementById("variants-table").querySelector("tbody");
            tableBody.innerHTML = ""; // Xóa các hàng trước đó

            // Tạo biến thể từ các lựa chọn
            colors.forEach(color => {
                capacities.forEach(capacity => {
                    const row = document.createElement("tr");

                    // Cột biến thể
                    const variantCell = document.createElement("td");
                    variantCell.textContent = `${color}-${capacity}`;
                    row.appendChild(variantCell);

                    // Các cột nhập liệu khác
                    row.innerHTML = `
                    <input type="hidden" name="variants[][color]" value="${color}">
                    <input type="hidden" name="variants[][capacity]" value="${capacity}">
                <td>${color}-${capacity}</td>
                
                <td><input type="text" name="variants[][variant_price]" value="0"></td>
                <td><input type="text" name="variants[][sku]"></td>
                <td><input type="number" name="variants[][quantity]" value="10"></td>
                <td><button class="btn btn-danger"><i class='bx bx-trash'></i></button></td>
            `;
                    tableBody.appendChild(row);

                });
            });

            // Hiển thị bảng
            tableContainer.style.display = colors.length && capacities.length ? "block" : "none";
        }
    </script>
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