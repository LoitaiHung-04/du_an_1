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
                                <span class="breadcrumb-text">Your shopping cart</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- cart-page start -->
    <section class="cart-page section-ptb">
        <form method="post">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cart-page-wrap">
                            <div class="cart-wrap-info">
                                <div class="cart-item-wrap">
                                    <div class="cart-title">
                                        <h6 data-animate="animate__fadeInUp">My cart:</h6>
                                        <span class="cart-count" data-animate="animate__fadeInUp">
                                            <span class="cart-counter"><?= $total[0]['total_sl'] ?> </span>
                                            <span class="cart-item-title"> Sản phẩm</span>
                                        </span>
                                    </div>
                                    <div class="item-wrap">
                                        <?php foreach ($cart as $item): ?>

                                            <ul class="cart-wrap">
                                                <!-- cart-info start -->
                                                <li class="item-info">
                                                    <!-- cart-img start -->
                                                    <div class="item-img">
                                                        <a href="?act=chi-tiet-san-pham&id=<?= $item['san_pham_id'] ?>" data-animate="animate__fadeInUp">
                                                            <img src="/du_an_1/uploads/products/<?= $item['image'] ?>" class="img-fluid" alt="p-1">
                                                        </a>
                                                    </div>
                                                    <!-- cart-img end -->
                                                    <!-- cart-title start -->
                                                    <div class="item-text">
                                                        <a href="?act=chi-tiet-san-pham&id=<?= $item['san_pham_id'] ?>" data-animate="animate__fadeInUp"><?= $item['ten_san_pham'] ?></a>
                                                        <span class="item-option" data-animate="animate__fadeInUp">
                                                            <span class="item-title">Màu sắc:</span>
                                                            <span class="item-type"><?= $item['mausac'] ?></span>
                                                        </span>
                                                        <span class="item-option" data-animate="animate__fadeInUp">
                                                            <span class="item-title">Dung lượng:</span>
                                                            <span class="item-type"><?= $item['dungluong'] ?></span>
                                                        </span>
                                                        <span class="item-option" data-animate="animate__fadeInUp">
                                                            <span class="item-price"><?= number_format($item['gia_san_pham'], 0, ',', '.') ?> VNĐ</span>
                                                        </span>
                                                    </div>
                                                    <!-- cart-title send -->
                                                </li>
                                                <!-- cart-info end -->
                                                <!-- cart-qty start -->
                                                <li class="item-qty">
                                                    <div class="product-quantity-action">
                                                        <div class="product-quantity" data-animate="animate__fadeInUp">
                                                            <div>

                                                                <input type="number" data-variant="<?= $item['bien_the_id'] ?>" data-product="<?= $item['san_pham_id'] ?>" id="quantity_update" data-id="<?= $item['id'] ?>" data-price="<?= $item['gia_san_pham'] ?>" value="<?= $item['so_luong'] ?>">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-remove">
                                                        <span class="remove-wrap" data-animate="animate__fadeInUp">
                                                            <a href="?act=remove-cart&id=<?= $item['id'] ?>" class="text-danger"><i class='bx bxs-trash'></i></a>
                                                        </span>
                                                    </div>
                                                </li>
                                                <!-- cart-qty end -->
                                                <!-- cart-price start -->
                                                <li class="item-price" data-animate="animate__fadeInUp">
                                                    <span class="amount full-price" id="total_price_<?= $item['id'] ?>">
                                                        <?= number_format($item['tong_tien'], 0, ',', '.') ?> VNĐ
                                                    </span>
                                                </li>
                                                <!-- cart-price end -->
                                            </ul>


                                        <?php endforeach ?>

                                    </div>

                                </div>

                            </div>
                            <div class="cart-info-wrap">

                                <div class="cart-total-wrap cart-info">
                                    <div class="cart-total">
                                        <div class="total-amount" data-animate="animate__fadeInUp">
                                            <h6 class="total-title">Tổng tiền</h6>
                                            <span class="amount total-price"><?= number_format($total[0]['total_quantity'], 0, ',', '.') ?> VNĐ</span>
                                        </div>
                                        <div class="proceed-to-discount" data-animate="animate__fadeInUp">
                                            <input type="text" name="discount" placeholder="Discount code">
                                        </div>
                                        <div class="proceed-to-checkout" data-animate="animate__fadeInUp">
                                            <a href="checkout-style1.html" class="btn btn-style2">Checkout</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- cart-page end -->
    <!-- product-tranding start -->
    <section class="Trending-product bg-color section-ptb">
        <div class="collection-category">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture">
                            <div class="section-title">
                                <span class="sub-title" data-animate="animate__fadeInUp">Browse collection</span>
                                <h2><span data-animate="animate__fadeInUp">Trending product</span></h2>
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
                                    <div class="swiper-slide" data-animate="animate__fadeInUp">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="product-template.html" class="pro-img">
                                                    <img src="img/product/home1-pro-1.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="img/product/home1-pro-2.jpg" class="img-fluid img2 mobile-img2" alt="p2">
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
                                                    <span>Wireless device</span>
                                                </div>
                                                <div class="product-title">
                                                    <h6><a href="product-template.html">Wireless headphones</a></h6>
                                                </div>
                                                <div class="product-price">
                                                    <div class="pro-price-box">
                                                        <span class="new-price">$21.00</span>
                                                        <span class="old-price">$25.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-description">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                </div>
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

        const quantity_update = document.querySelectorAll('#quantity_update');
        for (const element of quantity_update) {
            element.addEventListener('change', (e) => {
                const id = element.dataset.id; 
                const price = parseFloat(element.dataset.price); 
                const variant =element.dataset.variant;
                const product =element.dataset.product;
                const quantity = parseInt(e.target.value); 
                const totalPriceElement = document.querySelector(`#total_price_${id}`); 
                const totalAmountElement = document.querySelector('.total-price'); 

                
                const newTotal = price * quantity;

              
                totalPriceElement.textContent = `${newTotal.toLocaleString('vi-VN')} VNĐ`;

              
                let totalCart = 0;
                document.querySelectorAll('.full-price').forEach(priceElement => {
                    const itemPrice = parseFloat(priceElement.textContent.replace(/\D/g, '')) || 0;
                    totalCart += itemPrice;
                });

                totalAmountElement.textContent = `${totalCart.toLocaleString('vi-VN')} VNĐ`;

                
                $.ajax({
                    url: "index.php?act=update-quantity-cart",
                    method: "GET",
                    data: {
                        id,
                        price,
                        quantity,
                        variant,
                        product
                    },
                    success: function(response) {
                       document.querySelector('.cart-counter').innerHTML =response.total;
                        statusAlert(response.status, response.title, response.message);
                    }
                });
            });
        }
    </script>
</main>