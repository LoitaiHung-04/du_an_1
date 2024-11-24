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
                                <span class="breadcrumb-text">Stripping pliers</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- pro-detail-page start -->
    <section class="product-details-page pro-style1 section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-details-pos pro-details-left-pos">
                        <!-- Product slider start -->
                        <div class="product-detail-slider product-details-tb product-details">
                            <a href="product-template7.html" class="next-prev-product prev">
                                <span>Prev</span>
                            </a>
                            <a href="product-template2.html" class="next-prev-product next">
                                <span>Next</span>
                            </a>
                            <!-- Product slider start -->
                            <div class="product-detail-img product-detail-img-bottom">
                                <!-- top slick-slider start -->
                                <div class="product-img-top">
                                    <button class="full-view"><i class="bi bi-arrows-fullscreen"></i></button>
                                    <div class="slider-big slick-slider">
                                        <?php foreach ($image as $value): ?>

                                            <div class="slick-slide ">
                                                <a src="<?= "/du_an_1/uploads/products/" . $value['link_hinh_anh'] ?>" class="product-single">
                                                    <figure class="zoom" onmousemove="zoom(event)"
                                                        style="background-image: url()">
                                                        <img src="<?= "/du_an_1/uploads/products/" . $data['hinh_anh'] ?>" class="img-fluid" alt="pro-1">
                                                    </figure>
                                                </a>
                                            </div>
                                        <?php endforeach ?>

                                    </div>
                                </div>
                                <!-- top slick-slider end -->
                                <!-- small slick-slider start -->
                                <div class="pro-slider">
                                    <div class="slider-small pro-detail-slider small-slider">
                                        <?php foreach ($image as $value) : ?>


                                            <div class="slick-slide ">
                                                <a href="javascript:void(0)" class="product-single--thumbnail">
                                                    <img src="<?= "/du_an_1/uploads/products/" . $value['link_hinh_anh'] ?>" class="img-fluid" alt="pro-1">
                                                </a>
                                            </div>

                                        <?php endforeach ?>

                                    </div>
                                </div>
                                <!-- small slick-slider end -->
                            </div>
                            <!-- Product slider end -->
                        </div>
                        <!-- peoduct detail start -->
                        <div class="product-details-wrap product-details-tb product-details">
                            <div class="product-details-info">
                                <div class="pro-nprist">
                                    <div class="product-info">
                                        <!--  product-ratting start -->
                                        <?php if ($total_rating > 0) : ?>
                                            <div class="product-ratting">
                                                <span class="pro-ratting">
                                                    <?php
                                                    $totalRating = $total_rating;
                                                    $fullStars = intval($totalRating);
                                                    $halfStar = ($totalRating - $fullStars) >= 0.5;


                                                    for ($i = 0; $i < $fullStars; $i++): ?>
                                                        <i class="fas fa-star"></i>
                                                    <?php endfor; ?>


                                                    <?php if ($halfStar): ?>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    <?php endif; ?>
                                                </span>
                                                <span class="spr-badge-caption"><?= count($count) ?> Đánh giá</span>
                                            </div>

                                        <?php else: ?>
                                            <p>Chưa có đánh giá</p>
                                        <?php endif ?>

                                    </div>
                                    <div class="product-info">
                                        <!-- product-title start -->
                                        <div class="product-title">
                                            <h2><?= $data['ten_san_pham'] ?></h2>
                                        </div>
                                        <!-- product-title end -->
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-prlb pro-sale">
                                            <div style="color: red;">
                                                <span class="new-price"><?= number_format($data['gia_san_pham'], 0, ',', '.') ?> VNĐ</span>

                                                <!-- <span class="percent-count">16</span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-inventory">
                                            <div class="stock-inventory stock-more">
                                                <p class="text-success">Hurry up! only
                                                    <span class="available-stock bg-success"><?= $data['so_luong'] ?></span>
                                                    <span>products left in stock!</span>
                                                </p>
                                            </div>
                                            <div class="product-variant">
                                                <h6>Availability:</h6>
                                                <span class="stock-qty in-stock text-success">
                                                    <span>In stock<i class="bi bi-check2"></i></span>
                                                </span>
                                                <span class="stock-qty out-stock text-danger collapse" style="display:none;">
                                                    <span>Out of stock</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="pro-detail-action">
                                            <form method="get" class="cart">
                                                <div class="product-variant-option">
                                                    <div class="swatch-variant">
                                                        <div class="swatch clearfix Color">
                                                            <div class="header">
                                                                <h6><span>Chọn phân loại</span></h6>
                                                            </div>
                                                            <div class="variant-wrap">
                                                                <div class="variant-property">
                                                                    <?php foreach ($variant as $key => $value): ?>


                                                                        <div class="swatch-element">
                                                                            <input type="radio" class="variant-checked" id="checked-<?= $value['id'] ?>" data-price="<?= $value['price'] ?>" data-id="<?= $value['id'] ?>" data-quantity="<?= $value['quantity'] ?>" data-sku="<?= $value['sku'] ?>" name="option" value="<?= $value['id'] ?>">
                                                                            <label for="checked-<?= $value['id'] ?>"><?= $value['mau_sac'] . '-' . $value['dung_luong'] ?></label>
                                                                        </div>

                                                                    <?php endforeach ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <form method="post" class="cart">
                                            <div class="product-quantity-action">
                                                <h6>Quantity:</h6>
                                                <div class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <button type="button" id="minus" class=" qtybutton minus "><i class="fa-solid fa-minus"></i></button>
                                                        <input type="text" min="0" id="quantity-value" name="quantity" value="1" max="<?= $data['gia_san_pham'] ?>">
                                                        <button type="button" id="plus" class="qtybutton plus  "><i class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-actions">

                                            <div class="pro-detail-button">
                                                <button type="button" id="add-to-cart" class="btn add-to-cart ajax-spin-cart">
                                                    <span class="cart-title">Add to cart</span>
                                                </button>

                                            </div>


                                        </div>
                                    </div>

                                    <div class="group-cart">
                                        <input type="hidden" value="<?= $data['ten_san_pham'] ?>" id="name-product">
                                        <input type="hidden" value="<?= $data['id'] ?>" id="id-product">
                                        <input type="hidden" id="quantity-cart" value="1">
                                        <input type="hidden" id="price-cart">
                                        <input type="hidden" id="image-cart" value="<?= $data['hinh_anh'] ?>">
                                        <input type="hidden" id="variant-id-cart">
                                    </div>
                                    <div class="product-info">
                                        <p><span>🚚</span> Item will be delivered on or before <span id="ten-days-ahead">Mar 3 2024</span></p>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-sku">
                                            <h6>SKU:</h6>
                                            <span class="variant-sku">?</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="share-icons">
                                            <h6>Share:</h6>
                                            <div class="pro-social">
                                                <ul class="social-icon">
                                                    <li>
                                                        <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://web.telegram.org/" class="twitter"><i class="fab fa-telegram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-payment-image">
                                            <ul class="payment-icon">
                                                <li>
                                                    <a href="index.html"><svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24">
                                                            <title id="visa">Visa</title>
                                                            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                                                            <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                                                            <path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path>
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="index.html"><svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24">
                                                            <title id="master">Mastercard</title>
                                                            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                                                            <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                                                            <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                                                            <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                                                            <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path>
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24">
                                                            <title id="american-express">American Express</title>
                                                            <path fill="#000" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z" opacity=".07"></path>
                                                            <path fill="#006FCF" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z"></path>
                                                            <path fill="#FFF" d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z"></path>
                                                            <path fill="#006FCF" d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z"></path>
                                                            <path fill="#006FCF" d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z"></path>
                                                            <path fill="#FFF" d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z"></path>
                                                            <path fill="#006FCF" d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z"></path>
                                                            <path fill="#006FCF" d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z"></path>
                                                        </svg></a>
                                                </li>
                                                <li>
                                                    <a href="index.html"><svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img">
                                                            <title id="paypal">PayPal</title>
                                                            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                                                            <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                                                            <path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"></path>
                                                            <path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"></path>
                                                            <path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"></path>
                                                        </svg></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- peoduct detail end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pro-detail-page end -->
    <!-- product-tranding start -->
    <section class="Trending-product bg-color section-ptb">
        <div class="collection-category">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <!-- <span class="sub-title" data-animate="animate__fadeInUp">Browse collection</span> -->
                                <h2><span data-animate="animate__fadeInUp">Sản phẩm liên quan</span></h2>
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
                                    <?php foreach ($productDetail as $item): ?>



                                        <div class="swiper-slide" data-animate="animate__fadeInUp">
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="?act=chi-tiet-san-pham&id=<?= $item['id'] ?>" class="pro-img">
                                                        <img src="/du_an_1/uploads/products/<?= $item['hinh_anh'] ?>" class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="/du_an_1/uploads/products/<?= $item['hinh_anh'] ?>" class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action">
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
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-sub-title">
                                                        <span><?= $item['namedm']?></span>
                                                    </div>
                                                    <div class="product-title">
                                                        <h6><a href="?act=chi-tiet-san-pham&id=<?= $item['id'] ?>"><?= $item['ten_san_pham'] ?></a></h6>
                                                    </div>
                                                    <div class="product-price">
                                                        <div style="color: red;">
                                                            <span class="new-price"><?= number_format($item['gia_san_pham'],0,',','.') ?> VNĐ</span>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="product-description">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="pro-label-retting">
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
                                                </div>
                                            </div>
                                        </div>

                                    <?php endforeach ?>

                                </div>
                                <div class="collection-button">
                                    <a href="collection.html" class="btn btn-style2" data-animate="animate__fadeInUp">View all item</a>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-Trending"><span><i class="feather-arrow-left"></i></span></button>
                                    <button class="swiper-next swiper-next-Trending"><span><i class="feather-arrow-right"></i></span></button>
                                </div>
                            </div>
                            <div class="swiper-dots">
                                <div class="swiper-pagination swiper-pagination-Trending"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function statusAlert(type, title, message) {
            Swal.fire({
                icon: `${type}`,
                title: `${title}`,
                text: `${message}`,

            });
        }

        function formatCurrency(amount) {
            // Chuyển đổi thành số nếu đầu vào là chuỗi
            amount = Number(amount);
            return amount.toLocaleString('vi-VN').replace(/,/g, '.') + ' VNĐ';
        }

        let variant_input = document.querySelectorAll('.variant-checked');
        var max = 0;
        for (const btn of variant_input) {
            btn.addEventListener('click', () => {
                let price = btn.dataset.price;
                let quantity = btn.dataset.quantity;
                let sku = btn.dataset.sku;
                let id = btn.dataset.id;
                max = quantity;


                document.querySelector('.new-price').innerHTML = formatCurrency(price);
                document.querySelector('#price-cart').value = price;
                document.querySelector('#variant-id-cart').value = id;
                document.querySelector('.available-stock').innerHTML = quantity;
                document.querySelector('.variant-sku').innerHTML = sku;
            });
        }
        let quantity_value = document.querySelector('#quantity-value');
        let plus = document.querySelector('#plus');
        let minus = document.querySelector('#minus');
        plus.addEventListener('click', () => {

            let currentQuantity = parseInt(quantity_value.value) || 0;
            let maxQuantity = parseInt(max) || 0;

            if (maxQuantity === 0) {

                statusAlert('error', 'Lỗi', 'Bạn chưa chọn phân loại !');
                quantity_value.value = 1;

                return;
            }

            if (currentQuantity >= maxQuantity) {

                statusAlert('error', 'Lỗi', 'Số lượng không đủ!');

                quantity_value.value = maxQuantity;

                return;
            }


            quantity_value.value = currentQuantity + 1;
            document.querySelector('#quantity-cart').value = quantity_value.value;

        });

        minus.addEventListener('click', () => {

            let currentQuantity = parseInt(quantity_value.value) || 0;

            if (currentQuantity <= 1) {

                statusAlert('error', 'Lỗi', 'Số lượng không thể nhỏ hơn 1 !');

                quantity_value.value = 1;
                return;
            }


            quantity_value.value = currentQuantity - 1;
            document.querySelector('#quantity-cart').value = quantity_value.value;

        });
    </script>
    <script type="module">
        document.querySelector('#add-to-cart').addEventListener('click', () => {
            if (max == 0) {

                statusAlert('error', 'Lỗi', 'Bạn chưa chọn phân loại !');

            } else {

                let tensp = document.querySelector('#name-product').value;
                let id_product = document.querySelector('#id-product').value;
                let quantity_cart = document.querySelector('#quantity-cart').value;
                let price_cart = document.querySelector('#price-cart').value;
                let image_cart = document.querySelector('#image-cart').value;
                let id_variant = document.querySelector('#variant-id-cart').value;

                $.ajax({
                    url: "index.php?act=add-to-cart",
                    method: "GET",
                    data: {
                        tensp,
                        id_product,
                        quantity_cart,
                        price_cart,
                        image_cart,
                        id_variant
                    },
                    success: function(response) {

                        statusAlert(response.status, response.title, response.message);

                    }

                });




            }
        })
    </script>
</main>