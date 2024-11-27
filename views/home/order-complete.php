
<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-ul">
                            <li class="breadcrumb-li">
                                <a class="breadcrumb-link" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Order complete</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- order-complete start -->
    <section class="order-complete section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="order-area">
                        <!-- order-price start -->
                        <div class="order-price">
                            <ul class="total-order" data-animate="animate__fadeInUp">
                                <li>
                                    <span class="order-no">Ngày thanh toán </span>
                                    <span class="order-date"><span class="order-date"><?php
                                                                                        $vnp_PayDate = $_GET['vnp_PayDate'];

                                                                                        $year = substr($vnp_PayDate, 0, 4);
                                                                                        $month = substr($vnp_PayDate, 4, 2);
                                                                                        $day = substr($vnp_PayDate, 6, 2);
                                                                                        $hour = substr($vnp_PayDate, 8, 2);
                                                                                        $minute = substr($vnp_PayDate, 10, 2);
                                                                                        $second = substr($vnp_PayDate, 12, 2);

                                                                                        $formattedDate = "$day/$month/$year $hour:$minute:$second";

                                                                                        echo $formattedDate;
                                                                                        ?></span></span>
                                </li>
                                <li>
                                    <span class="total-price">Tổng tiền</span>
                                    <span class="amount"><?= number_format(($_GET['vnp_Amount'] / 100), 0, ',', '.') ?> VNĐ</span>
                                </li>
                            </ul>
                        </div>
                        <!-- order-price end -->
                        <!-- order-details start -->
                        <div class="order-details">
                            <span class="text-success order-i" data-animate="animate__fadeInUp"><i class="fa fa-check-circle"></i></span>
                            <h6 data-animate="animate__fadeInUp">
                                <?php if ($_GET['vnp_ResponseCode'] == 00): ?>
                                    Thanh toán thành công
                                <?php else : ?>
                                    Thanh toán thất bại
                                <?php endif ?>
                            </h6>
                            <span class="order-s" data-animate="animate__fadeInUp">
                                Đơn hàng của bạn sẽ được giao trong vòng vài giờ</span>
                            <a href="" class="tracking-link btn btn-style2" data-animate="animate__fadeInUp">Kiểm tra đơn hàng</a>
                        </div>
                        <!-- order-details start -->
                        <!-- order-delivery start -->
                        <div class="order-delivery">
                            <ul class="delivery-payment">
                                <li class="delivery" data-animate="animate__fadeInUp">
                                    <h6>Địa chỉ</h6>

                                    <span class="order-span">Hà Nội</span>

                                    <span class="order-span">Số điện thoại :0329500240</span>
                                </li>
                                <li class="pay" data-animate="animate__fadeInUp">
                                    <h6>Thanh toán</h6>
                                    <p class="transition">
                                        Số giao dịch : <?= $_GET['vnp_BankTranNo'] ?></p>
                                    <span class="order-span p-label">
                                        <span class="n-price">Giá</span>
                                        <span class="o-price"><?= number_format(($_GET['vnp_Amount'] / 100), 0, ',', '.') ?> VNĐ</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Phí vận chuyển</span>
                                        <span class="o-price">0 VNĐ</span>
                                    </span>
                                    <span class="order-span p-label">
                                        <span class="n-price">Tổng tiền đơn hàng</span>
                                        <span class="o-price"><?= number_format(($_GET['vnp_Amount'] / 100), 0, ',', '.') ?> VNĐ</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <!-- order-delivery start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order-complete end -->
</main>
