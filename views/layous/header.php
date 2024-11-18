<?php
// Kiểm tra xem session đã được khởi động chưa, nếu chưa thì gọi session_start()
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Kiểm tra xem người dùng đã đăng nhập chưa và gán giá trị cho biến $userName
$userName = isset($_SESSION['user_client']) ? $_SESSION['user_client'] : null;
?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spacingtech.com/html/electon/electon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Nov 2024 15:54:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="description" content="A best stylish, creative, modern responsive template for different eCommerce business or industries." />
    <meta name="keywords" content="food template, bakery products, html, eCommerce html template,plants, organic food, restaurant, live tree, responsive, pizza, burger, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories" />
    <meta name="author" content="spacingtech_webify">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Electon - The Electronics eCommerce Bootstrap Template</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon/favicon.png">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-icons.css">
    <!-- magnific-popup css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!--fether css -->
    <link rel="stylesheet" type="text/css" href="assets/css/feather.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!-- owl-carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- plugin css -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.html">
    <!-- collection css -->
    <link rel="stylesheet" type="text/css" href="assets/css/collection.css">
    <!-- blog css -->
    <link rel="stylesheet" type="text/css" href="assets/css/blog.css">
    <!-- other-pages css -->
    <link rel="stylesheet" type="text/css" href="assets/css/other-pages.css">
    <!-- product-page css -->
    <link rel="stylesheet" type="text/css" href="assets/css/product-page.css">
    <!-- style css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- notification-bar start -->
    <div class="notification-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="notification-content">
                        <li class="noti-wrap noti-email-wrap">
                            <div class="noti-email">
                                <div class="emailtext">
                                    <p><a href="Email:Electondemo@gmail.com" title="Email:Electondemo@gmail.com">Email : Electondemo@gmail.com</a></p>
                                </div>
                            </div>
                        </li>
                        <li class="noti-wrap noti-text-wrap">
                            <p>
                                <span>Free worldwide & Free return for above uk</span>
                                <span class="code-text">Shop now!</span>
                            </p>
                        </li>
                        <li class="noti-wrap noti-social">
                            <ul class="social-icon">
                                <!-- facebook-icon start -->
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <span class="icon-social facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                            </svg></span>
                                        <span>90K Followers</span>
                                    </a>
                                </li>
                                <!-- facebook-icon end -->
                                <!-- insta-icon start -->
                                <li>
                                    <a href="https://in.pinterest.com/">
                                        <span class="icon-social pinterest"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                            </svg></span>
                                        <span>60K Followers</span>
                                    </a>
                                </li>
                                <!-- insta-icon end -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- notification-bar end -->
    <!-- header start -->
    <header class="main-header" id="stickyheader" style="position: relative;">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="header-area">
                            <div class="header-element header-toggle">
                                <div class="header-icon-block">
                                    <ul class="shop-element">
                                        <li class="side-wrap toggler-wrap">
                                            <div class="toggler-wrapper">
                                                <button class="toggler-btn">
                                                    <span class="toggler-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                            <line x1="3" y1="12" x2="21" y2="12"></line>
                                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                                            <line x1="3" y1="18" x2="21" y2="18"></line>
                                                        </svg></span>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-element header-logo">
                                <div class="header-theme-logo">
                                    <a href="index.html" class="theme-logo">
                                        <img src="/du_an_1/assets/images/logo/logo.png" class="img-fluid" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="header-element header-search">
                                <div class="search-crap">
                                    <div class="search-content">
                                        <div class="search-box">
                                            <form action="?act=search" method="post" class="search-bar">
                                                <div class="form-search">
                                                    <input id="timkiem" type="search" name="q" placeholder="Find our search" class="search-input">
                                                    <button disabled type="button" class="search-btn"><i class="feather-search"></i></button>
                                                </div>
                                            </form>
                                            <ul style="position: absolute; z-index: 100;"  id="result"></ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                           
                            <div class="header-element header-icon">
                                <div class="header-icon-block">
                                    <ul class="shop-element">
                                        <li class="side-wrap search-wrap">
                                            <div class="search-wrapper">
                                                <a href="#searchmodal" data-bs-toggle="modal">
                                                    <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9s-9-4.032-9-9s4.032-9 9-9m0 16c3.867 0 7-3.133 7-7s-3.133-7-7-7s-7 3.133-7 7s3.133 7 7 7m8.485.071l2.829 2.828l-1.415 1.415l-2.828-2.829z"></path>
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-element header-details">
                                <div class="header-icon-details">
                                    <ul class="details-ul">
                                        <li class="info-wrap info-headphones">
                                            <div class="info-wrapper">
                                                <a href="index.html" class="icon"><i class="feather-headphones"></i></a>
                                                <div class="info-text">
                                                    <span class="label">Hotline number</span>
                                                    <a href="tel:+260005002600" class="info-link">+2600 0500 2600</a>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="info-wrap info-Login">
                                            <div class="info-wrapper">
                                                <a href="index.html" class="icon"><i class="feather-user"></i></a>
                                                <div class="info-text">
                                                    <span class="label">My account</span>
                                                    <a href="login-account.html" class="info-link">Login & Register</a>
                                                </div>
                                            </div>
                                        </li>
                                        <div class="user-wrapper">
        <?php if ($userName): ?>
            <!-- Nếu đã đăng nhập, hiển thị tên người dùng -->
            <span class="user-title">Welcome, <?php echo htmlspecialchars($_SESSION['user_client']['ho_ten']); ?></span>

            <!-- Nút đăng xuất với biểu tượng -->
            <form action="?act=logout" method="POST" class="mt-2">
                <button type="submit" class="btn btn-outline-danger w-100">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>

        <?php else: ?>
            <!-- Nếu chưa đăng nhập, hiển thị nút đăng nhập và đăng ký -->
            <a href="#store-account" class="collapsed" data-bs-toggle="collapse" aria-expanded="false">
                <span class="user-icon">
                    <i class="fas fa-user-circle fa-lg"></i> <!-- Biểu tượng người dùng -->
                </span>
            </a>
            <div class="user-drawer collapse" id="store-account">
                <!-- Nút đăng nhập với biểu tượng -->
                <a href="?act=login" class="btn btn-outline-primary w-100 mb-2">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
                <!-- Nút đăng ký với biểu tượng -->
                <a href="?act=form-register" class="btn btn-outline-success w-100">
                    <i class="fas fa-user-plus"></i> SignUp
                </a>
            </div>
        <?php endif; ?>
    </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottam start -->
        <div class="header-bottom-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="main-block">
                            <div class="side-wrap header-support">
                                <div class="vega-menu-area">
                                    <a href="#vega-collapse" class="browse-cat" data-bs-toggle="collapse" aria-expanded="false">
                                        <span class="menu-icon"><i class="feather-menu"></i></span>
                                        <span class="menu-title">Trending category</span>
                                        <span class="menu-arrow"><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <a href="#vega-collapse" class="browse-cat browse-cat-lg" data-bs-toggle="collapse" aria-expanded="false">
                                        <span class="menu-icon"><i class="feather-menu"></i></span>
                                        <span class="menu-title">Trending category</span>
                                        <span class="menu-arrow"><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <div class="vegawrap collapse" id="vega-collapse">
                                        <ul class="vega-menu">

                                            <?php

                                            include_once './models/DashBoard.php';
                                            $dashboard = new DashBoard();
                                            $categories = $dashboard->getAllCategory();
                                            foreach ($categories as $item): ?>

                                                <li class="menu-link">
                                                    <a href="?act=danh_muc_sp&id=<?= $item['id'] ?>" class="link-title">
                                                        <!-- <span class="menu-img-icon">
                                                        <img src="img/menu/cate-menu7.jpg" class="img-fluid" alt="cate-menu7">
                                                    </span> -->
                                                        <span class="sp-link-title"><?= $item['ten_danh_muc'] ?></span>
                                                    </a>
                                                </li>

                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="side-wrap header-menu">
                                <div class="mainmenu-content">
                                    <div class="main-wrap">
                                        <ul class="main-menu">
                                            <li class="menu-link">
                                                <a href="?" class="link-title">
                                                    <span class="sp-link-title">Home</span>
                                                </a>

                                            </li>

                                            <li class="menu-link">
                                                <a href="?act=product" class="link-title">
                                                    <span class="sp-link-title">Product<span class="header-sale-lable">Sale</span></span>
                                                    <span class="menu-arrow"><i class="fa fa-angle-down"></i></span>
                                                </a>

                                            </li>
                                            <li class="menu-link">
                                                <a href="blog-grid.html" class="link-title">
                                                    <span class="sp-link-title">Blogs</span>
                                                    <span class="menu-arrow"><i class="fa fa-angle-down"></i></span>
                                                </a>

                                            </li>
                                            <li class="menu-link">
                                                <a href="contact-us.html" class="link-title">
                                                    <span class="sp-link-title">Contact us</span>
                                                    <span class="menu-arrow"><i class="fa fa-angle-down"></i></span>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="side-wrap header-icon">
                                <div class="header-icon-block">
                                    <ul class="shop-element">
                                        <li class="side-wrap toggler-wrap">
                                            <div class="toggler-wrapper">
                                                <button class="toggler-btn">
                                                    <span class="toggler-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                            <line x1="3" y1="12" x2="21" y2="12"></line>
                                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                                            <line x1="3" y1="18" x2="21" y2="18"></line>
                                                        </svg></span>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="side-wrap search-wrap">
                                            <div class="search-wrapper">
                                                <a href="#searchmodal" data-bs-toggle="modal">
                                                    <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9s-9-4.032-9-9s4.032-9 9-9m0 16c3.867 0 7-3.133 7-7s-3.133-7-7-7s-7 3.133-7 7s3.133 7 7 7m8.485.071l2.829 2.828l-1.415 1.415l-2.828-2.829z"></path>
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="side-wrap user-wrap">
                                            <div class="user-wrapper">
                                                <a href="#store-account" class="collapsed" data-bs-toggle="collapse" aria-expanded="false">
                                                    <span class="user-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                            <path fill="currentColor" d="M20 22h-2v-2a3 3 0 0 0-3-3H9a3 3 0 0 0-3 3v2H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5zm-8-9a6 6 0 1 1 0-12a6 6 0 0 1 0 12m0-2a4 4 0 1 0 0-8a4 4 0 0 0 0 8"></path>
                                                        </svg></span>
                                                    <span class="user-title">Login</span>
                                                </a>
                                                <div class="user-drower collapse" id="store-account">
                                                    <a href="login-account.html">Login</a>
                                                    <a href="create-account.html">Register</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="side-wrap wishlist-wrap">
                                            <div class="wishlist-wrapper">
                                                <a href="wishlist-empty.html">
                                                    <span class="wishlist-icon-count">
                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M12.001 4.529a5.998 5.998 0 0 1 8.242.228a6 6 0 0 1 .236 8.236l-8.48 8.492l-8.478-8.492a6 6 0 0 1 8.48-8.464m6.826 1.641a3.998 3.998 0 0 0-5.49-.153l-1.335 1.198l-1.336-1.197a4 4 0 0 0-5.686 5.605L12 18.654l7.02-7.03a4 4 0 0 0-.193-5.454"></path>
                                                            </svg></span>
                                                    </span>
                                                    <span class="wishlist-title">My wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="side-wrap cart-wrap">
                                            <div class="cart-wrapper">
                                                <div class="shopping-cart">
                                                    <a href="?act=cart&id=1" style="background-color: black; cursor: pointer; padding: 10px 10px; color: white; border-radius: 5px; ">
                                                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M6.505 2h11a1 1 0 0 1 .8.4l2.7 3.6v15a1 1 0 0 1-1 1h-16a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4m12.5 6h-14v12h14zm-.5-2l-1.5-2h-10l-1.5 2zm-9.5 4v2a3 3 0 1 0 6 0v-2h2v2a5 5 0 0 1-10 0v-2z"></path>
                                                            </svg></span>
                                                        <span class="cart-title text">My cart</span>
                                                        <span class="bigcounter">04</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>