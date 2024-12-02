<main>
    <style>
        .voucher{
            width: 150px;
            height: 40px;
            color: white;
            padding: 9px 20px 5px 20px;
            background-color: black;
            border: none;
            border-radius: 5px;
        }
        .voucher-container{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            gap: 5px;
        }
    </style>
    <?php
    $userName = isset($_SESSION['user_client']) ? $_SESSION['user_client'] : null;
    ?>
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
                                                <a src="<?= "/du_an_1/uploads/products/" . $value['link_hinh_anh'] ?>"
                                                    class="product-single">
                                                    <figure class="zoom" onmousemove="zoom(event)"
                                                        style="background-image: url()">
                                                        <img src="<?= "/du_an_1/uploads/products/" . $data['hinh_anh'] ?>"
                                                            class="img-fluid" alt="pro-1">
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
                                        <?php foreach ($image as $value): ?>


                                            <div class="slick-slide ">
                                                <a href="javascript:void(0)" class="product-single--thumbnail">
                                                    <img src="<?= "/du_an_1/uploads/products/" . $value['link_hinh_anh'] ?>"
                                                        class="img-fluid" alt="pro-1">
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
                                        <?php if ($total_rating > 0): ?>
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
                                                <span
                                                    class="new-price"><?= ($data['today_deal_active'] == 1) ? number_format($data['gia_khuyen_mai'], 0, ',', '.') : number_format($data['gia_san_pham'], 0, ',', '.') ?>
                                                    VNĐ</span>

                                                <!-- <span class="percent-count">16</span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-inventory">
                                            <div class="stock-inventory stock-more">
                                                <p class="text-success">Nhanh lên! chỉ còn
                                                    <span
                                                        class="available-stock bg-success"><?= $data['so_luong'] ?></span>
                                                    <span>sản phẩm !</span>
                                                </p>
                                            </div>
                                            <!-- <div class="product-variant">
                                                <h6>Availability:</h6>
                                                <span class="stock-qty in-stock text-success">
                                                    <span>In stock<i class="bi bi-check2"></i></span>
                                                </span>
                                                <span class="stock-qty out-stock text-danger collapse"
                                                    style="display:none;">
                                                    <span>Out of stock</span>
                                                </span>
                                            </div> -->
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
                                                                            <input type="radio" class="variant-checked"
                                                                                id="checked-<?= $value['id'] ?>"
                                                                                data-price="<?= $value['price'] ?>"
                                                                                data-id="<?= $value['id'] ?>"
                                                                                data-quantity="<?= $value['quantity'] ?>"
                                                                                data-sku="<?= $value['sku'] ?>"
                                                                                name="option" value="<?= $value['id'] ?>">
                                                                            <label
                                                                                for="checked-<?= $value['id'] ?>"><?= $value['mau_sac'] . '-' . $value['dung_luong'] ?></label>
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
                                                        <button type="button" id="minus" class=" qtybutton minus "><i
                                                                class="fa-solid fa-minus"></i></button>
                                                        <input type="text" min="0" id="quantity-value" name="quantity" disabled
                                                            value="1" max="<?= $data['gia_san_pham'] ?>">
                                                        <button type="button" id="plus" class="qtybutton plus  "><i
                                                                class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-actions">

                                            <div class="pro-detail-button">
                                                <?php if ($userName != null): ?>
                                                    <button type="button" id="add-to-cart"
                                                        class="btn add-to-cart ajax-spin-cart">
                                                        <span class="cart-title">Thêm vào giỏ hàng</span>
                                                    </button>
                                                <?php else: ?>
                                                    <button type="button" id="add-cart-null"
                                                        class="btn add-to-cart ajax-spin-cart">
                                                        <span class="cart-title">Thêm vào giỏ hàng</span>
                                                    </button>
                                                <?php endif ?>

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
                                        <div class="product-sku">
                                            <h6>Mã hàng:</h6>
                                            <span class="variant-sku">?</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div >
                                            <div><h6>Các voucher</h6> </div> <br>
                                           <div class="voucher-container">
                                           <?php foreach ($vouchers as $voucher): ?>
                                                <div class="voucher">
                                                    <input id="voucher-<?= $voucher['id'] ?>" type="radio" name="voucher" hidden value="<?php echo $voucher['ma']; ?>"
                                                        onclick="copyToClipboard('<?php echo $voucher['ma']; ?>')">
                                                    <label for="voucher-<?= $voucher['id'] ?>">
                                                        Giảm giá <?php echo $voucher['giam_gia']; ?>%

                                                    </label>
                                                </div>
                                            <?php endforeach; ?>
                                           </div>
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
    <section class="product-description-tab pro-style7 section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-tab collpase-tab">
                        <ul class="tab" role="tablist" id="collapse-tab">
                            <li role="presentation">
                                <a href="#description" class="tab-title active collapsed" data-bs-toggle="collapse"
                                    aria-expanded="true">
                                    <h6 class="tab-name">Mô tả</h6>
                                    <span class="tab-icon"><i class="bi bi-plus"></i></span>
                                </a>
                                <div class="collapse show" id="description" data-bs-parent="#collapse-tab" role="tab"
                                    aria-expanded="true">
                                    <div class="description-review-text">
                                        <div class="product-description">
                                            <p><?= $data['mo_ta'] ?></p>


                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li role="presentation">

                                <a href="#reviews" class="tab-title collapsed" data-bs-toggle="collapse">
                                    <h6 class="tab-name">Bình luận về sản phẩm </h6>
                                    <span class="tab-icon"><i class="bi bi-plus"></i></span>
                                </a>

                                <div class="collapse" id="reviews" data-bs-parent="#collapse-tab">
                                    <div class="description-review-text">
                                        <div id="product-reviews">
                                            <div class="spr-container">
                                                <div class="spr-header">
                                                    <?php if ($userName != null): ?>
                                                        <div class="spr-summary rte">

                                                            <span class="spr-summary-actions">
                                                                <a href="#add-review" data-bs-toggle="collapse"
                                                                    class="spr-summary-actions-newreview">Viết bình luận của bạn</a>
                                                            </span>
                                                        </div>
                                                    <?php endif ?>
                                                    <!-- product-rating end -->
                                                </div>
                                                <div class="spr-content">
                                                    <!-- spar-from start -->
                                                    <div class="spr-form collapse" id="add-review">
                                                        <form method="post" action="?act=binh-luan"
                                                            class="new-review-form">
                                                            <input type="hidden" value="<?= $data['id'] ?> "
                                                                name="san_pham_id">
                                                            <div class="spr-form-review-body">
                                                                <label class="spr-form-label">Bình luận

                                                                </label>
                                                                <div class="spr-form-input">
                                                                    <textarea class="spr-form-input spr-form-input-textarea" placeholder="Viết bình luận tại đây..." rows="10" name="noi_dung"></textarea>
                                                                </div>
                                                            </div>

                                                            <fieldset class="spr-form-actions">
                                                                <input type="submit" name="q"
                                                                    class="spr-button spr-button-primary button button-primary btn btn-primary"
                                                                    value="Gửi bình luận">
                                                            </fieldset>
                                                        </form>
                                                    </div>

                                                    <!-- spar-from end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-container mt-4">
                                    <?php foreach ($binhluan as $items) { ?>
                                        <div class="review-header d-flex align-items-center mb-3">
                                            <img class="rounded-circle me-3"
                                                src="/du_an_1/uploads/users/<?= $items['anh_dai_dien'] ?>" alt="avatar"
                                                width="60" height="60" />
                                            <div>
                                                <h6 class="fw-bold text-primary mb-1"><?= $items['ho_ten'] ?></h6>
                                                <p class="text-muted small mb-0">Chia sẻ công khai - <?= $items['ngay_dang'] ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <p class="mb-3">
                                                <?= $items['noi_dung'] ?>
                                            </p>

                                        <?php } ?>

                                        </div>

                                </div>

                            </li>

                        </ul>
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
                                                        <img src="/du_an_1/uploads/products/<?= $item['hinh_anh'] ?>"
                                                            class="img-fluid img1 mobile-img1" alt="p1">
                                                        <img src="/du_an_1/uploads/products/<?= $item['hinh_anh'] ?>"
                                                            class="img-fluid img2 mobile-img2" alt="p2">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="#quickview" class="quickview" data-bs-toggle="modal"
                                                            data-bs-target="#quickview">
                                                            <span class="tooltip-text">Quickview</span>
                                                            <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                        </a>
                                                        <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal"
                                                            data-bs-target="#add-to-cart">
                                                            <span class="tooltip-text">Add to cart</span>
                                                            <span class="pro-action-icon"><i
                                                                    class="feather-shopping-bag"></i></span>
                                                        </a>
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="tooltip-text">Wishlist</span>
                                                            <span class="pro-action-icon"><i
                                                                    class="feather-heart"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-sub-title">
                                                        <span><?= $item['namedm'] ?></span>
                                                    </div>
                                                    <div class="product-title">
                                                        <h6><a
                                                                href="?act=chi-tiet-san-pham&id=<?= $item['id'] ?>"><?= $item['ten_san_pham'] ?></a>
                                                        </h6>
                                                    </div>
                                                    <div class="product-price">
                                                        <div style="color: red;">
                                                            <span
                                                                class="new-price"><?= number_format($item['gia_san_pham'], 0, ',', '.') ?>
                                                                VNĐ</span>

                                                        </div>
                                                    </div>
                                                    <div class="product-description">
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s.</p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    <?php endforeach ?>

                                </div>
                                <div class="collection-button">

                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-Trending"><span><i
                                                class="feather-arrow-left"></i></span></button>
                                    <button class="swiper-next swiper-next-Trending"><span><i
                                                class="feather-arrow-right"></i></span></button>
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
        function copyToClipboard(voucherCode) {
            var tempInput = document.createElement('input');
            document.body.appendChild(tempInput);
            tempInput.value = voucherCode;
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);


            statusAlert('success','Copy Thành Công',`Bạn đã copy thành công mã ${voucherCode}`);
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
        document.querySelector('#add-to-cart')?.addEventListener('click', () => {
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
        const btncard_null = document.querySelector('#add-cart-null');
        // console.log(btncard_null);

        btncard_null?.addEventListener('click', () => {
            Swal.fire({
                icon: `error`,
                title: `Lỗi`,
                text: `Bạn chưa đăng nhập !`,
                footer: '<a href="?act=login">Nhấn để đăng nhập</a>'

            });
        })
    </script>

</main>