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
                <h1>List Banner</h1>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key => $value) : ?>
                                    <tr>
                                        <td>
                                            <a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#<?= $key ?></a>
                                        </td>
                                        <td>
                                            <?= $value['title'] ?>
                                        </td>
                                        <td><?= $value['content'] ?></td>

                                        <td>
                                            <div class="d-flex align-items-center"> 
                                                <div class="flex-shrink-0 me-2">
                                                    <img src="<?= "/du_an_1/uploads/" . $value['image'] ?>" alt="" class="avatar-xs rounded-circle material-shadow" />
                                                </div>
                                                <div class="flex-grow-1"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="?act=delete-banner&id=<?= $value['id']?>" class="link-danger fs-15" onclick="return confirm('bạn muốn xóa không ?')"><i class="ri-delete-bin-line"></i></a>
                                            <a href="?act=edit-banner&id=<?= $value['id']?>" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>

                                        </td>
                                    </tr>
                                <?php endforeach ?>


                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
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

</body>

</html>