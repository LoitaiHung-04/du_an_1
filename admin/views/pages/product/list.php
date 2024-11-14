<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Danh mục sản phẩm</title>
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
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Quản lý danh sách sản phẩm</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
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
                                        <h4 class="card-title mb-0 flex-grow-1">Danh sách sản phẩm</h4>
                                        <a href="?act=form-add-product" class="btn btn-soft-success material-shadow-none"><i class="ri-add-circle-line align-middle me-1"></i> Thêm sản phẩm</a>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-nowrap align-middle mb-0" id="data_product">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th scope="col">Giá sản phẩm</th>
                                                            <th scope="col">Số lượng</th>
                                                            <th scope="col">Ảnh</th>
                                                            <th scope="col">Danh Mục</th>
                                                            <th scope="col">Trạng thái</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($data as $key => $value) : ?>
                                                            <tr>
                                                                <td>
                                                                    #<?= $key ?>
                                                                </td>
                                                                <td>
                                                                    <?= $value['ten_san_pham'] ?>
                                                                </td>
                                                                <td><?= number_format($value['gia_san_pham'], 0, ',', '.') ?>
                                                                    VNĐ</td>
                                                                <td><?= $value['so_luong'] ?></td>

                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="<?= "/du_an_1/uploads/products/" . $value['hinh_anh'] ?>" alt="" class="" width="100px" />
                                                                        </div>
                                                                        <div class="flex-grow-1"></div>
                                                                    </div>
                                                                </td>
                                                                <td><?= $value['namedm'] ?></td>
                                                                <td>
                                                                    <?php if ($value['trang_thai'] == 1) : ?>
                                                                        <span class="badge bg-success">Hiển thị</span>
                                                                    <?php else : ?>
                                                                        <span class="badge bg-danger">Không hiển thị</span>
                                                                    <?php endif ?>
                                                                </td>
                                                                <td>
                                                                    <a href="?act=delete-product&id=<?= $value['id'] ?>" class="link-danger fs-15" onclick="return confirm('bạn muốn xóa không ?')"><i class="ri-delete-bin-line"></i></a>
                                                                    <a href="?act=form-sua-product&id=<?= $value['id'] ?>" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach ?>
                                                    </tbody>

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
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script type="module">
        $(document).ready(function() {
            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.
            document.title = 'Danh Sách Sản Phẩm';
            // DataTable initialisation
            $('#data_product').DataTable({

                "paging": true,
                "autoWidth": true,

            });
        });
    </script>
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>