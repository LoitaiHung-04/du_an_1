<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/plugins.js"></script>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Vector map-->
<script src="assets/libs/jsvectormap/jsvectormap.min.js"></script>
<script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

<!--Swiper slider js-->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- Dashboard init -->
<script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- jsvectormap css -->
<link href="assets/libs/jsvectormap/jsvectormap.min.css" rel="stylesheet" type="text/css" />

<!--Swiper slider css-->
<link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

<!-- Layout config Js -->
<script src="assets/js/layout.js"></script>
<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Quản lý</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#danhmuc" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="danhmuc">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Danh mục sản phẩm</span>
                    </a>
                    <div class="collapse menu-dropdown" id="danhmuc">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=danh-mucs" class="nav-link" data-key="t-sweet-alerts">
                                    Danh sách
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=form-them-danh-muc" class="nav-link" data-key="t-nestable-list">
                                    Thêm mới
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sanpham" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sanpham">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Sản phẩm</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sanpham">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=list-product" class="nav-link" data-key="t-sweet-alerts">
                                    Danh sách
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=form-add-product" class="nav-link" data-key="t-nestable-list">
                                    Thêm mới
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#baiviet" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="baiviet">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Bài Viết</span>
                    </a>
                    <div class="collapse menu-dropdown" id="baiviet">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=bai-viets" class="nav-link" data-key="t-sweet-alerts">
                                    Danh sách
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=form-them-bai-viet" class="nav-link" data-key="t-nestable-list">
                                    Thêm mới
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarbanner" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarbanner">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lý banner</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarbanner">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=list-banner" class="nav-link" data-key="t-sweet-alerts">
                                    Danh sách
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="?act=add-banner" class="nav-link" data-key="t-nestable-list">
                                    Thêm mới
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#taikhoan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="taikhoan">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Tài Khoản</span>
                    </a>
                    <div class="collapse menu-dropdown" id="taikhoan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=tai-khoans" class="nav-link" data-key="t-sweet-alerts">
                                    Danh sách
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#donhang" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="donhang">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lí đơn hàng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="donhang">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=don-hangs" class="nav-link" data-key="t-sweet-alerts">
                                    Danh sách
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#trangthaidonhang" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="trangthaidonhang">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Quản lí trạng thái đơn hàng</span>
                    </a>
                    <div class="collapse menu-dropdown" id="trangthaidonhang">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=trang-thai-don-hangs" class="nav-link" data-key="t-sweet-alerts">
                                    Danh sách
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="?act=them-trang-thai-don-hangs" class="nav-link" data-key="t-nestable-list">
                                    Thêm mới
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#lienhe" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="banner">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Liên hệ</span>
                    </a>
                    <div class="collapse menu-dropdown" id="lienhe">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="?act=lien-he" class="nav-link" data-key="t-sweet-alerts">
                                    Danh sách
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Bán hàng</span></li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>