<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spacingtech.com/html/electon/electon/change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Nov 2024 15:58:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="A best stylish, creative, modern responsive template for different eCommerce business or industries." />
    <meta name="keywords"
        content="food template, bakery products, html, eCommerce html template,plants, organic food, restaurant, live tree, responsive, pizza, burger, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories" />
    <meta name="author" content="spacingtech_webify">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>Electon - The Electronics eCommerce Bootstrap Template</title>
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon/favicon.png">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-icons.css">
    <!-- magnific-popup css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <!--fether css -->
    <link rel="stylesheet" type="text/css" href="css/feather.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!-- owl-carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- collection css -->
    <link rel="stylesheet" type="text/css" href="css/collection.css">
    <!-- blog css -->
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <!-- other-pages css -->
    <link rel="stylesheet" type="text/css" href="css/other-pages.css">
    <!-- product-page css -->
    <link rel="stylesheet" type="text/css" href="css/product-page.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<!-- header end -->
<!-- main section start-->
<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-ul">
                            <li class="breadcrumb-li">
                                <a class="breadcrumb-link" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Account</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- password-area start -->
    <section class="password-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="password-block">
                        <!-- account profile start -->
                        <div class="profile-info">
                        <div class="account-profile">
                                    <div class="pro-img">
                                        <a href="javascript:void(0)">
                                            <img src="/du_an_1/uploads/users/<?= $_SESSION['user_client']['anh_dai_dien'] ?>"
                                                class="img-fluid" alt="Avatar">
                                        </a>
                                    </div>
                                    <div class="profile-text">
                                        <h6><?= $_SESSION['user_client']['ho_ten'] ?></h6>
                                    </div>
                                </div>
                            <div class="account-detail">
                                <ul class="profile-ul">
                                    <li class="profile-li" data-animate="animate__fadeInUp">
                                        <a href="?act=tai-khoan">Profile</a>
                                    </li>

                                    <li class="profile-li" data-animate="animate__fadeInUp">
                                        <a href="?act=form-doi-mat-khau" class="active">
                                            <span>Change password</span>
                                        </a>
                                    </li>
                                    <li class="profile-li" data-animate="animate__fadeInUp">
                                        <a href="?act=logout">
                                            <span>Sign out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- account profile start -->
                        <!-- change password start -->
                        <div class="profile-form">
                            <div class="pro-add-title">
                                <h6 data-animate="animate__fadeInUp">Change Password</h6>
                            </div>
                            <form method="POST" action="?act=doi-mat-khau">
                                <?php if (isset($_SESSION['error'])): ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['error']; ?>
                                    </div>
                                    <?php unset($_SESSION['error']); ?>
                                <?php endif; ?>

                                <ul class="pro-input-label" data-animate="animate__fadeInUp">
                                    <li>
                                        <label>Old password</label>
                                        <input type="password" name="mat_khau_cu" placeholder="Old password" required>
                                    </li>
                                </ul>
                                <ul class="pro-input-label" data-animate="animate__fadeInUp">
                                    <li>
                                        <label>New password</label>
                                        <input type="password" name="mat_khau_moi" placeholder="New password" required>
                                    </li>
                                </ul>
                                <ul class="pro-input-label" data-animate="animate__fadeInUp">
                                    <li>
                                        <label>Confirm new password</label>
                                        <input type="password" name="xac_nhan_mat_khau"
                                            placeholder="Confirm new password" required>
                                    </li>
                                </ul>
                                <ul class="pro-submit" data-animate="animate__fadeInUp">
                                    <li class="label-info">
                                        <label class="box-area">
                                            <span class="agree-text">Subscribe me to newsletter</span>
                                            <input type="checkbox" class="cust-checkbox">
                                            <span class="cust-check"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="submit" class="btn btn-style2 checkout" value="Update">
                                    </li>
                                </ul>
                            </form>
                        </div>

                        <!-- change password end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- password-area end -->
</main>
<!-- main section end-->
<!-- footer start -->

<!-- bottom-menu end -->
<!-- jquery js -->
<script src="js/jquery-3.6.3.min.js"></script>
<!-- bootstrap js -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- magnific-popup js -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- owl-carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- swiper-slider js -->
<script src="js/swiper-bundle.min.js"></script>
<!-- slick js -->
<script src="js/slick.min.js"></script>
<!-- waypoints js -->
<script src="js/waypoints.min.js"></script>
<!-- counter js -->
<script src="js/counter.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>

<!-- Mirrored from spacingtech.com/html/electon/electon/change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Nov 2024 15:58:52 GMT -->

</html>