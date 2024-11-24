<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Chi tiết liên hệ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJmL8R+KnujsWWqni4y7knxkCp9xa0rPRf4gClXvq64WqTtiuAAfK5MSYwE7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fa;
        }

        .main-content {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        h1, h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 1rem;
            color: #555;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .table {
            background-color: #fff;
            border-radius: 8px;
        }

        .table-bordered th, .table-bordered td {
            border: 1px solid #ddd;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .container {
            max-width: 960px;
            margin: auto;
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
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="container">
                <h1>Chi tiết liên hệ</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <div id="layout-wrapper">
                                <div class="main-content">
                                    <div class="container">
                                        <h2>Thông tin chi tiết</h2>
                                        <p><strong>Tên:</strong> <?php echo htmlspecialchars($contact['ten']); ?></p>
                                        <p><strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?></p>
                                        <p><strong>Nội dung:</strong> <?php echo nl2br(htmlspecialchars($contact['message'])); ?></p>
                                        <a href="index.php?act=lien-he" class="back-button">Quay lại</a>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                    </table>
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

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-dRUpMKZZqk0v0p2hh8yLh4s04ft+KAm/gzGgs+XqvbJJ0WvKfn0GjexuKja1fqQm" crossorigin="anonymous"></script>
    <!-- Include additional JS -->
    <?php require_once "views/layouts/libs_js.php"; ?>

</body>

</html>
