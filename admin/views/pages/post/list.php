<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | NN Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <script src="https://unpkg.com/feather-icons"></script>

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
                                <h4 class="mb-sm-0">Quản lý bài viết</h4>
                                <a href="?act=form-them-bai-viet" class="btn btn-soft-success material-shadow-none"><i class="ri-add-circle-line align-middle me-1"></i> Thêm bài viết</a>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Danh mục bài viết</li>
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
                                        <h4 class="card-title mb-0 flex-grow-1">Bài viết</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="table-responsive table-card">
                                                <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col" style="width: 46px;">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                                                                    <label class="form-check-label" for="cardtableCheck"></label>
                                                                </div>
                                                            </th>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Ảnh</th>
                                                            <th scope="col">Tiêu đề</th>
                                                            <th scope="col">Nội dung</th>
                                                            <th scope="col">Ngày đăng</th>
                                                            <th scope="col">Người đăng</th>
                                                            <th scope="col">Trạng thái</th>
                                                            <th scope="col" style="width: 150px;">Hành động</th>
                                                        </tr>
                                                    </thead>

                                                    <?php foreach ($baiViets as $index => $row) : ?>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck01">
                                                                        <label class="form-check-label" for="cardtableCheck01"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="#" class="fw-medium"><?= $index + 1 ?></a></td>
                                                                <td>
                                                                    <?php if (!empty($row['image'])): ?>
                                                                        <img src="<?= $row['image'] ?>" alt="Ảnh đại diện" style="width: 50px; height: 50px; object-fit: cover;">
                                                                    <?php else: ?>
                                                                        <span>Không có ảnh</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td><?= $row['title'] ?></td>
                                                                <td><?= $row['content'] ?></td>
                                                                <td><?= $row['ngay_dang'] ?></td>
                                                                <td><?= $row['nguoi_dang'] ?></td>

                                                                <?php if ($row['trang_thai'] == 1) { ?>
                                                                    <td><span class="badge bg-success">Hiển thị</span></td>
                                                                <?php } else { ?>
                                                                    <td><span class="badge bg-danger">Không hiển thị</span></td>
                                                                <?php } ?>

                                                                <td>
                                                                    <div class="hstack gap-3 flex-wrap">
                                                                        <a href="?act=form-sua-bai-viet&id=<?= $row['id'] ?>" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                                        <a href="?act=xoa-bai-viet&id=<?= $row['id'] ?>" class="link-danger fs-15" onclick="return confirm('Bạn muốn xóa không?')"><i class="ri-delete-bin-line"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


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
    <?php
    require_once "views/layouts/libs_js.php";
    ?>

</body>

</html>