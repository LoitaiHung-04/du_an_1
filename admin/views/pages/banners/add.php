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
                    <form action="?act=store-banner" method="POST" enctype="multipart/form-data">
                        <h1>ADD BANNER</h1>
                        <div class="form-group">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            <p class="text-danger"><?= !empty($_SESSION['error']['title']) ? $_SESSION['error']['title'] : ''    ?></p>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Content</label>
                            <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                            <p class="text-danger">
                                <?= !empty($_SESSION['error']['content'])  ? $_SESSION['error']['content'] : ''    ?>
                            </p>
                 
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                            <p class="text-danger"><?= !empty($_SESSION['error']['image']) ? $_SESSION['error']['image'] : ''    ?></p>

                        </div>
                        <button class="btn btn-primary mt-3">Submit</button>
                    </form>
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

</body>

</html>