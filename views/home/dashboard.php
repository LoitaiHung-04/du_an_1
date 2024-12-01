<?php include_once './views/layous/header.php'; // Đảm bảo đường dẫn tới header.php chính xác
?>

<main id="main-content">
    <!-- slider-area start-->
    <section class="slider-content">
        <div class="home-slider owl-carousel owl-theme" id="home-slider">
            <?php foreach ($banner as $item): ?>

                <div class="item">
                    <div class="slider-image-info">
                        <!-- slider-text start -->
                        <div class="slider-image">
                            <img src="/du_an_1/uploads/<?= $item['image'] ?>" class="img-fluid desk-img" alt="slider1">
                            <img src="/du_an_1/uploads/<?= $item['image'] ?>" class="img-fluid mobile-img" alt="mobile-slider1">
                        </div>
                        <!-- slider-img end -->
                        <div class="container slider-info-content">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-info-wrap slider-content-left slider-text-left">
                                        <!-- slider-text start -->
                                        <div class="slider-info-text">
                                            <div class="slider-text-info">
                                                <span class="sub-title">
                                                    Nhận ngay ưu đãi giảm giá 80%</span>
                                                <h2><span><?= $item['title'] ?></span></h2>
                                                <div class="slider-text">
                                                    <span><?= $item['content'] ?></span>

                                                </div>
                                                <a href="?act=product" class="btn btn-style">BỘ SƯU TẬP TRỰC TUYẾN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- slider-text end -->
                    </div>
                </div>

            <?php endforeach ?>

        </div>
    </section>

    <!-- <section class="home-banner-grid section-pt">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="banner-grid-block">
                        <ul class="banner-grid-ul">
                            <li class="banner-grid-li big-banner">
                                <div class="banner-block">
                                    <a href="collection.html">
                                        <span class="image-block">
                                            <img src="assets/slider/home1-mobile-slider1.jpg" class="img-fluid" alt="big-banner1">
                                        </span>
                                        <div class="banner-content banner-text-left banner-content-right">
                                            <span class="subtitle" data-animate="animate__fadeInUp">60% Off</span>
                                            <h2 class="title" data-animate="animate__fadeInUp">Wireless devices</h2>
                                            <span class="banner-button btn-style" data-animate="animate__fadeInUp">Shop now</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="banner-grid-li big-banner">
                                <div class="banner-block">
                                    <a href="collection.html">
                                        <span class="image-block">
                                            <img src="assets/slider/home1-mobile-slider2.jpg" class="img-fluid" alt="big-banner2">
                                        </span>
                                        <div class="banner-content banner-text-left banner-content-right">
                                            <span class="subtitle" data-animate="animate__fadeInUp">45% Off</span>
                                            <h2 class="title" data-animate="animate__fadeInUp">A music players</h2>
                                            <span class="banner-button btn-style" data-animate="animate__fadeInUp">Shop now</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="banner-grid-li big-banner">
                                <div class="banner-block">
                                    <a href="collection.html">
                                        <span class="image-block">
                                            <img src="assets/slider/home1-mobile-slider3.jpg" class="img-fluid" alt="big-banner3">
                                        </span>
                                        <div class="banner-content banner-text-left banner-content-right">
                                            <span class="subtitle" data-animate="animate__fadeInUp">20% off</span>
                                            <h2 class="title" data-animate="animate__fadeInUp">Android watch T6</h2>
                                            <span class="banner-button btn-style" data-animate="animate__fadeInUp">Shop now</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="our-service-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="grid-wrap">
                        <li class="grid-wrapper" data-animate="animate__fadeInUp">
                            <div class="ser-block">
                                <a href="javascript:void(0)">
                                    <span class="ser-icon">
                                        <img src="assets/service/home-ser1.png" class="img-fluid" alt="service-1">
                                        <span></span>
                                    </span>
                                    <div class="service-text">
                                        <h6>Vận chuyển trên toàn quốc</h6>

                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="grid-wrapper" data-animate="animate__fadeInUp">
                            <div class="ser-block">
                                <a href="javascript:void(0)">
                                    <span class="ser-icon">
                                        <img src="assets/service/home-ser2.png" class="img-fluid" alt="service-2">
                                        <span></span>
                                    </span>
                                    <div class="service-text">
                                        <h6>Thanh toán an toàn</h6>

                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="grid-wrapper" data-animate="animate__fadeInUp">
                            <div class="ser-block">
                                <a href="javascript:void(0)">
                                    <span class="ser-icon">
                                        <img src="assets/service/home-ser3.png" class="img-fluid" alt="service-3">
                                        <span></span>
                                    </span>
                                    <div class="service-text">
                                        <h6>Hoàn hàng nhanh chóng!</h6>

                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="grid-wrapper" data-animate="animate__fadeInUp">
                            <div class="ser-block">
                                <a href="javascript:void(0)">
                                    <span class="ser-icon">
                                        <img src="assets/service/home-ser4.png" class="img-fluid" alt="service-4">
                                        <span></span>
                                    </span>
                                    <div class="service-text">
                                        <h6>Áp dụng nhiều mã giảm giá hot</h6>

                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="Trending-product bg-color section-ptb">
        <div class="collection-category">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <span class="sub-title" data-animate="animate__fadeInUp">Bộ Sưu tập</span>
                                <h2><span data-animate="animate__fadeInUp">Sản phẩm Khuyến Mãi Hôm Nay</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="Trending-product">
                                <div class="swiper-wrapper">
                                    <?php foreach ($product as $value): ?>


                                        <div class="swiper-slide" data-animate="animate__fadeInUp" style="position: relative;">
                                            <div style="position: absolute; right:0px; top:20px; z-index: 1000;"><img width="60px" style="background-color: transparent;" src="/du_an_1/assets/images/tag_5901132.png" alt=""></div>

                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="?act=chi-tiet-san-pham&id=<?= $value['id'] ?>" class="pro-img">
                                                        <img src="<?= "/du_an_1/uploads/products/" . $value['hinh_anh'] ?>" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="<?= "/du_an_1/uploads/products/" . $value['hinh_anh'] ?>" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <!-- <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div> -->
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-sub-title">
                                                        <span><?= $value['namedm'] ?></span>
                                                    </div>
                                                    <div class="product-title">
                                                        <h6><a href="?act=chi-tiet-san-pham&id=<?= $value['id'] ?>"><?= $value['ten_san_pham'] ?></a></h6>
                                                    </div>
                                                    <div class="product-price">
                                                        <div>
                                                            <span class="new-price"> <del><?= number_format($value['gia_san_pham'], 0, ',', '.') ?></del> </span> - 
                                                            <span class="new-price" style="color: red;"> <?= number_format($value['gia_khuyen_mai'], 0, ',', '.') ?> VNĐ</span>

                                                        </div>
                                                    </div>
                                                    <!-- <div class="product-description">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                    </div> -->
                                                    <!-- <div class="product-action">
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                        <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            <span class="tooltip-text">Add to cart</span>
                                                            <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                        </a>
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                    </div> -->
                                                </div>
                                                <!-- <div class="pro-label-retting">
                                                    <div class="product-ratting">
                                                        <span class="pro-ratting">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <div class="product-label pro-new-sale">
                                                        <span class="product-label-title">Sale<span>20%</span></span>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    <?php endforeach ?>

                                </div>
                                <div class="collection-button" data-animate="animate__fadeInUp">
                                    <!-- <a href="collection.html" class="btn btn-style2" data-animate="animate__fadeInUp">View all item</a> -->
                                </div>
                            </div>
                            <div class="swiper-buttons" data-animate="animate__fadeInUp">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-Trending"><span><i class="feather-arrow-left"></i></span></button>
                                    <button class="swiper-next swiper-next-Trending"><span><i class="feather-arrow-right"></i></span></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeInUp">
                                <div class="swiper-pagination swiper-pagination-Trending"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tranding end -->
    <!-- deal-day start -->
    <section class="deal-day section-pt">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="deal-day-wrap">
                        <div class="deal-day-block deal-wrap">
                            <div class="deal-block" style="background-image: url('assets/deal/deal-bg.jpg');">
                                <div class="section-capture">
                                    <div class="section-title">
                                        <span data-animate="animate__fadeInUp" class="sub-title">Mua sắm hàng ngày</span>
                                        <h2 data-animate="animate__fadeInUp"><span>Giảm giá trong ngày</span></h2>
                                    </div>
                                </div>
                                <div class="timer-section1" id="the-24h-countdown" data-animate="animate__fadeInUp">
                                    <ul class="clock"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Featured -product bg-color section-ptb">
        <div class="collection-category">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <span class="sub-title" data-animate="animate__fadeInUp">
                                    Bộ sưu tập nổi bật</span>
                                <h2 data-animate="animate__fadeInUp"><span>Sản phẩm Nổi Bật </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="Featured-product">
                                <div class="swiper-wrapper">
                                    <?php foreach ($productFeature as $value): ?>

                                        <div class="swiper-slide" data-animate="animate__fadeInUp" style="position: relative;">
                                            <div style="position: absolute; right:0px; top:20px; z-index: 1000;"><img width="60px" style="background-color: transparent;" src="/du_an_1/assets/images/promotional_3199306.png" alt=""></div>

                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="?act=chi-tiet-san-pham&id=<?= $value['id'] ?>" class="pro-img">
                                                        <img src="<?= "/du_an_1/uploads/products/" . $value['hinh_anh'] ?>" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="<?= "/du_an_1/uploads/products/" . $value['hinh_anh'] ?>" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <!-- <div class="product-action">
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                            <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                <span class="tooltip-text">Add to cart</span>
                                                                <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                            </a>
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                        </div> -->
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-sub-title">
                                                        <span><?= $value['namedm'] ?></span>
                                                    </div>
                                                    <div class="product-title">
                                                        <h6><a href="p?act=chi-tiet-san-pham&id=<?= $value['id'] ?>"><?= $value['ten_san_pham'] ?></a></h6>
                                                    </div>
                                                    <div class="product-price">
                                                        <div style="color: red;">
                                                            <span class="new-price"><?= number_format($value['gia_san_pham'], 0, ',', '.') ?> VNĐ</span>

                                                        </div>
                                                    </div>
                                                    <!-- <div class="product-description">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                    </div> -->
                                                    <!-- <div class="product-action">
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                        <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                            <span class="tooltip-text">Add to cart</span>
                                                            <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                        </a>
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                        </a>
                                                    </div> -->
                                                </div>
                                                <!-- <div class="pro-label-retting">
                                                    <div class="product-ratting">
                                                        <span class="pro-ratting">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <div class="product-label pro-new-sale">
                                                        <span class="product-label-title">Sale<span>20%</span></span>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>

                                    <?php endforeach ?>

                                </div>
                                <div class="collection-button" data-animate="animate__fadeInUp">
                                    <!-- <a href="collection.html" class="btn btn-style2">View all item</a> -->
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-Featured"><span><i class="feather-arrow-left"></i></span></button>
                                    <button class="swiper-next swiper-next-Featured"><span><i class="feather-arrow-right"></i></span></button>
                                </div>
                            </div>
                            <div class="swiper-dots">
                                <div class="swiper-pagination swiper-pagination-Featured"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="instagram section-ptb">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="section-capture">
                                <div class="section-title">
                                    <span class="sub-title" data-animate="animate__fadeInUp">Our instagram shop</span>
                                    <h2 data-animate="animate__fadeInUp"><span>Follow on instagram</span></h2>
                                </div>
                            </div>
                            <div class="insta-slider">
                                <div class="instagram-slider owl-carousel owl-theme" id="instagram-slider">
                                    <div class="item" data-animate="animate__fadeInUp">
                                        <div class="insta-content banner-hover">
                                            <a href="index.html" class="insta-img ">
                                                <img src="img/insta/insta-1.jpg" class="img-fluid" alt="insta-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item" data-animate="animate__fadeInUp">
                                        <div class="insta-content banner-hover">
                                            <a href="index.html" class="insta-img">
                                                <img src="img/insta/insta-2.jpg" class="img-fluid" alt="insta-2">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item" data-animate="animate__fadeInUp">
                                        <div class="insta-content banner-hover">
                                            <a href="index.html" class="insta-img">
                                                <img src="img/insta/insta-3.jpg" class="img-fluid" alt="insta-3">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item" data-animate="animate__fadeInUp">
                                        <div class="insta-content banner-hover">
                                            <a href="index.html" class="insta-img">
                                                <img src="img/insta/insta-4.jpg" class="img-fluid" alt="insta-4">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item" data-animate="animate__fadeInUp">
                                        <div class="insta-content banner-hover">
                                            <a href="index.html" class="insta-img">
                                                <img src="img/insta/insta-5.jpg" class="img-fluid" alt="insta-5">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item" data-animate="animate__fadeInUp">
                                        <div class="insta-content banner-hover">
                                            <a href="index.html" class="insta-img">
                                                <img src="img/insta/insta-6.jpg" class="img-fluid" alt="insta-6">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item" data-animate="animate__fadeInUp">
                                        <div class="insta-content banner-hover">
                                            <a href="index.html" class="insta-img">
                                                <img src="img/insta/insta-7.jpg" class="img-fluid" alt="insta-7">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="insta-button" data-animate="animate__fadeInUp">
                                    <a href="collection.html" class="btn btn-style2"># Electon Template</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

    <!-- <div class="brand-logo">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="brand-logo-wrap">
                                <div class="brand-logo-slider owl-carousel owl-theme" id="brand-logo">
                                    <div class="item">
                                        <a href="index.html">
                                            <span class="brand-img" data-animate="animate__fadeInUp">
                                                <img src="img/brand-logo/home1-brand-logo1.png" class="img-fluid" alt="brand-logo1">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="index.html">
                                            <span class="brand-img" data-animate="animate__fadeInUp">
                                                <img src="img/brand-logo/home1-brand-logo2.png" class="img-fluid" alt="brand-logo2">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="index.html">
                                            <span class="brand-img" data-animate="animate__fadeInUp">
                                                <img src="img/brand-logo/home1-brand-logo3.png" class="img-fluid" alt="brand-logo3">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="index.html">
                                            <span class="brand-img" data-animate="animate__fadeInUp">
                                                <img src="img/brand-logo/home1-brand-logo4.png" class="img-fluid" alt="brand-logo4">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="index.html">
                                            <span class="brand-img" data-animate="animate__fadeInUp">
                                                <img src="img/brand-logo/home1-brand-logo5.png" class="img-fluid" alt="brand-logo5">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="index.html">
                                            <span class="brand-img" data-animate="animate__fadeInUp">
                                                <img src="img/brand-logo/home1-brand-logo6.png" class="img-fluid" alt="brand-logo6">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

</main>
<?php include_once './views/layous/footer.php'; // Đảm bảo đường dẫn footer.php chính xác
?>