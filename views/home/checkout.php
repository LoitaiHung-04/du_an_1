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
                                <a class="breadcrumb-link" href="?">Home</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Checkout3</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- checkout-area start -->
    <form action="?act=create-payment" method="POST">
        <section class="section-ptb check-3">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 data-animate="animate__fadeInUp" class="check-3-title">Secure checkout</h2>
                        <ul class="check-3-ul">
                            <li class="check-3-li ck-cat">
                                <div class="check-pro">
                                    <h2 data-animate="animate__fadeInUp">1. In your cart (<?= $total[0]['total_sl'] ?>)</h2>
                                    <ul class="check-ul">
                                        <?php foreach ($cart as $item): ?>

                                            <li>
                                                <div class="check-pro-img">
                                                    <a href="product-template.html" data-animate="animate__fadeInUp">
                                                        <img src="/du_an_1/uploads/products/<?= $item['image'] ?>" class="img-fluid" alt="p-1">
                                                    </a>
                                                </div>
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
                                                        <span class="item-price"><?= number_format($item['tong_tien'], 0, ',', '.') ?> VNĐ</span>
                                                    </span>
                                                </div>
                                            </li>
                                        <?php endforeach ?>

                                    </ul>


                                </div>
                            </li>
                            <li class="check-3-li ck-address">
                                <div class="check-add">
                                    <h2 data-animate="animate__fadeInUp">2. Delivery Address</h2>

                                    <ul>
                                       
                                        <li data-animate="animate__fadeInUp">
                                            <label class="form-label">Tên người nhận</label>
                                            <input type="text" name="name" class="form-control" placeholder="Tên người nhận">
                                        </li>
                                        <li data-animate="animate__fadeInUp">
                                            <label class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                                        </li>
                                        <li data-animate="animate__fadeInUp">
                                            <label class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" name="address" placeholder="Địa chỉ">

                                        </li>
                                        <li data-animate="animate__fadeInUp">
                                            <label class="form-label">Ghi chú</label>
                                            <input type="text" class="form-control" name="note" placeholder="Ghi chú">

                                        </li>


                                    </ul>

                                </div>
                            </li>
                            <li class="check-3-li ck-pay">
                                <div class="pay-method">
                                    <!-- p-method title start -->
                                    <h2 data-animate="animate__fadeInUp">3. Chọn phương thức thanh toán</h2>
                                    <!-- p-method title end -->
                                    <!-- p-method start --> 
                                    <div class="pay-pro">
                                        <select name="payment_method" id="" class="form-control">
                                            <option selected>Chọn phương thức thanh toán</option>
                                            <option value="vnpay">Thanh toán bằng VNPAY</option>
                                            <option value="cod">Thanh toán khi nhận hàng</option>
                                         
                                        </select>
                                    </div>
                                    <!-- p-method end -->
                                    <!-- order-summary start -->
                                    <div class="order-summary">
                                        <h2 data-animate="animate__fadeInUp">Tóm tắt đơn hàng</h2>
                                        <ul>
                                            <li data-animate="animate__fadeInUp">
                                                <span class="p-name">Tổng tiền:</span>
                                                <span class="p-price"><?= number_format($total[0]['total_quantity'] ,0,',','.') ?> VNĐ </span>
                                            </li>
                                          
                                        </ul>
                                        <div class="check-btn" data-animate="animate__fadeInUp">
                                            <button class="btn-style2">Thanh toán</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
        <!-- checkout-area end -->
    </form>
</main>