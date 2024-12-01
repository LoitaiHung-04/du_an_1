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

                    <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="assets/images/profile-bg.jpg" class="profile-wid-img" alt="">
                            <div class="overlay-content">
                                <div class="text-end p-3">
                                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">

                                        <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">

                                            <img src="<?= "/du_an_1/uploads/users/" . $TaiKhoan2['anh_dai_dien'] ?>" class="rounded-circle avatar-xl img-thumbnail user-profile-image">



                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input type="hidden" name="id" value="<?= $TaiKhoan2['id'] ?>">

                                                <input id="profile-img-file-input" name="anh_dai_dien" type="file" class="profile-img-file-input">
                                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">

                                                </label>
                                            </div>

                                        </div>
                                        <h5 class="fs-16 mb-1"><?= $TaiKhoan2['ho_ten'] ?></h5>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Complete Your Profile</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="javascript:void(0);" class="badge bg-light text-primary fs-12"><i class="ri-edit-box-line align-bottom me-1"></i> Edit</a>
                                        </div>
                                    </div>
                                    <div class="progress animated-progress custom-progress progress-label">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <div class="label">30%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Portfolio</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="javascript:void(0);" class="badge bg-light text-primary fs-12"><i class="ri-add-fill align-bottom me-1"></i> Add</a>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-flex">
                                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                                            <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                                <i class="ri-github-fill"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control" id="gitUsername" placeholder="Username" value="@daveadame">
                                    </div>
                                    <div class="mb-3 d-flex">
                                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                                            <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                <i class="ri-global-fill"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="websiteInput" placeholder="www.example.com" value="www.velzon.com">
                                    </div>
                                    <div class="mb-3 d-flex">
                                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                                            <span class="avatar-title rounded-circle fs-16 bg-success">
                                                <i class="ri-dribbble-fill"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="dribbleName" placeholder="Username" value="@dave_adame">
                                    </div>
                                    <div class="d-flex">
                                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                                            <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                <i class="ri-pinterest-fill"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="pinterestName" placeholder="Username" value="Advance Dave">
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                <i class="fas fa-home"></i> Personal Details
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <form action="?act=sua-chi-tiet" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="id" value="<?= $TaiKhoan2['id'] ?>">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="emailidInput" class="form-label">Họ tên</label>
                                                            <input type="text" class="form-control" placeholder="Nhập họ tên" name="ho_ten" value="<?= $TaiKhoan2['ho_ten'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['ho_ten']) ? $_SESSION['error']['ho_ten'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="address1ControlTextarea" class="form-label">Ảnh đại diện</label>
                                                            <input type="file" class="form-control" placeholder="Nhập ảnh" name="anh_dai_dien">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['anh_dai_dien']) ? $_SESSION['error']['anh_dai_dien'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="address1ControlTextarea" class="form-label">Ngày sinh</label>
                                                            <input type="date" class="form-control" placeholder="Nhập ngày sinh" name="ngay_sinh" value="<?= $TaiKhoan2['ngay_sinh'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['ngay_sinh']) ? $_SESSION['error']['ngay_sinh'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="address1ControlTextarea" class="form-label">Email</label>
                                                            <input type="email" class="form-control" placeholder="Nhập email" name="email" value="<?= $TaiKhoan2['email'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['email']) ? $_SESSION['error']['email'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="address1ControlTextarea" class="form-label">Số điện thoại</label>
                                                            <input type="number" class="form-control" placeholder="Nhập số điện thoại" name="so_dien_thoai" value="<?= $TaiKhoan2['so_dien_thoai'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['so_dien_thoai']) ? $_SESSION['error']['so_dien_thoai'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Giới Tính</label>
                                                            <select id="ForminputState" class="form-select" name="gioi_tinh">
                                                                <option selected disabled>Chọn giới tính</option>
                                                                <option value="1" <?= $TaiKhoan2['gioi_tinh'] == 1 ? 'selected' : '' ?>>Nam</option>
                                                                <option value="2" <?= $TaiKhoan2['gioi_tinh'] == 2 ? 'selected' : '' ?>>Nữ</option>
                                                            </select>
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['gioi_tinh']) ? $_SESSION['error']['gioi_tinh'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="address1ControlTextarea" class="form-label">Địa chỉ</label>
                                                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="dia_chi" value="<?= $TaiKhoan2['dia_chi'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['dia_chi']) ? $_SESSION['error']['dia_chi'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="address1ControlTextarea" class="form-label">Mật khẩu</label>
                                                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="mat_khau" value="<?= $TaiKhoan2['mat_khau'] ?>">
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['mat_khau']) ? $_SESSION['error']['mat_khau'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="ForminputState" class="form-label">Trạng thái</label>
                                                            <select id="ForminputState" class="form-select" name="trang_thai">
                                                                <option selected disabled>Chọn trạng thái</option>
                                                                <option value="1" <?= $TaiKhoan2['trang_thai'] == 1 ? 'selected' : '' ?>>Hiển thị</option>
                                                                <option value="2" <?= $TaiKhoan2['trang_thai'] == 2 ? 'selected' : '' ?>>Không hiển thị</option>
                                                            </select>
                                                            <span class="text-danger">
                                                                <?= !empty($_SESSION['error']['trang_thai']) ? $_SESSION['error']['trang_thai'] : '' ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <!--end tab-pane-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div>
                    <!-- container-fluid -->
                </div><!-- End Page-content -->

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
        require_once "views/layouts/libs_css.php";
        ?>

</body>

</html>