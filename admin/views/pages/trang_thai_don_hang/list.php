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
                                <h4 class="mb-sm-0">Quản lí trạng thái đơn hàng</h4>
                                <a href="?act=form-them-trang-thai-don-hangs" class="btn btn-soft-success material-shadow-none">
                                    <i class="ri-add-circle-line align-middle me-1"></i> Thêm trạng thái đơn hàng
                                </a>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Trạng thái đơn hàng</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                       
                        <div class="col">

                            <div class="h-100">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">trạng thái đơn hàng</h4>

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
                                                        <th scope="col">Tên Trạng Thái</th>
                                                        

                                                        <th scope="col" style="width: 150px;">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    
                                                   
                                                        foreach ($TrangThaiDonHang as $index => $row) {
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
                                                                <td><?= $row['ten_trang_thai_id'] ?></td>
                                                                <td>
                                                                    <div class="hstack gap-3 flex-wrap">
                                                                    <a href="?act=form-sua-trang-thai-don-hangs&id=<?=$row['id']?>" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>

                                                                    <form action="?act=xoa-trang-thai-don-hangs" method="POST" onsubmit="return confirm('Bạn có đồng ý xóa không')">
                                                                                <input type="hidden" name="trang_thai_don_hangs_id" value="<?= $row['id'] ?>">
                                                                                <button type="submit" class="link-danger fs-15" style="border:none; background:none">
                                                                                    <i class="ri-delete-bin-line"></i>
                                                                                </button>
                                                                            </form>

                                                                    </div>
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