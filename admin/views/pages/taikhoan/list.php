<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | NN Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";

        require_once "views/layouts/siderbar.php";
        ?>

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">quản lí người dùng</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">danh mục người dùng</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Tìm kiếm người dùng</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="users">
                                        <div class="row mb-2">
                                            <form action="?act=tim-kiem" method="POST">
                                                <div class="col">
                                                    <div>
                                                        <input name="key" class="search form-control"
                                                            placeholder="Search" />
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-light sort" data-sort="name">
                                                        Tìm kiếm
                                                    </button>
                                                </div>
                                        </div>
                                        <form>


                                            <div data-simplebar style="height: 242px;" class="mx-n3">
                                                <ul class="list list-group list-group-flush mb-0">

                                                    <!-- end list item -->


                                                    <!-- end list item -->

                                                    <!-- end list item -->
                                                    <ul class="list-group">

                                                    </ul>
                                                    <!-- end list item -->
                                                </ul>
                                                <!-- end ul list -->
                                            </div>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <div class="col">

                            <div class="h-100">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">tài khoản</h4>

                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">


                                    <div class="live-preview">
                                        <div class="table-responsive table-card">
                                            <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 46px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value=""
                                                                    id="cardtableCheck">
                                                                <label class="form-check-label"
                                                                    for="cardtableCheck"></label>
                                                            </div>
                                                        </th>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Họ Tên</th>
                                                        <th scope="col">Ảnh đại diện</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Số điện thoại</th>

                                                        <th scope="col">Thao tác</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    
                                                    if (!isset($TaiKhoan)) {
                                                        $TaiKhoan = []; 
                                                    }

                                                    // Kiểm tra nếu có kết quả tìm kiếm
                                                    if (isset($resultSearch) && !empty($resultSearch)) {
                                                        $dataToDisplay = $resultSearch;
                                                    } else {
                                                        $dataToDisplay = $TaiKhoan; 
                                                    }

                                                    // Kiểm tra xem $dataToDisplay có phải là mảng và có dữ liệu không
                                                    if (is_array($dataToDisplay) && count($dataToDisplay) > 0) {
                                                        foreach ($dataToDisplay as $index => $row) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value=""
                                                                            id="cardtableCheck<?= $index ?>">
                                                                        <label class="form-check-label"
                                                                            for="cardtableCheck<?= $index ?>"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#" class="fw-medium"><?= $index + 1 ?></a></td>
                                                                <td><?= $row['ho_ten'] ?></td>
                                                                <td>
                                                                    <img src="<?= '/du_an_1/uploads/users/'.$row['anh_dai_dien'] ?>" alt="Avatar"
                                                                        style="width: 100px; height: 100px; border-radius: 50%;">
                                                                </td>
                                                                <td><?= $row['email'] ?></td>
                                                                <td><?= $row['so_dien_thoai'] ?></td>
                                                                <td>
                                                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                                                        <a href="?act=chi-tiet&id=<?= $row['id'] ?>"
                                                                            class="btn btn-link">
                                                                            <i data-feather="eye" class="text-primary"></i>
                                                                            <!-- Nút chi tiết tài khoản -->
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                               
                                                            </tr>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <tr>
                                                            <td colspan="7" class="text-center">Không tìm thấy kết quả nào.
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>

                                                <!-- Thẻ <script> cho Feather Icons -->
                                                <script src="https://unpkg.com/feather-icons"></script>
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function () {
                                                        feather.replace();
                                                    });
                                                </script>


                                            </table>
                                        </div>
                                    </div>

                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div> <!-- end .h-100-->

                    </div> <!-- end col -->
                </div>


            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>

</body>

</html>