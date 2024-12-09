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
                        <h2 data-animate="animate__fadeInUp" class="check-3-title">Thanh toán an toàn</h2>
                        <ul class="check-3-ul">
                            <li class="check-3-li ck-cat">
                                <div class="check-pro">
                                    <h2 data-animate="animate__fadeInUp">1. Trong giỏ hàng của bạn(<?= $total[0]['total_sl'] ?>)</h2>
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
                                                        <span class="item-title">Số lượng:</span>
                                                        <span class="item-type"><?= $item['so_luong'] ?></span>
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
                                    <h2 data-animate="animate__fadeInUp">2. Địa chỉ giao hàng</h2>

                                    <ul>

                                        <li data-animate="animate__fadeInUp">
                                            <label class="form-label">Tên người nhận</label>
                                            <input type="text" name="name" class="form-control" value="<?= $_SESSION['user_client']['ho_ten'] ?>" placeholder="Tên người nhận" required>
                                        </li>
                                        <li data-animate="animate__fadeInUp">
                                            <label class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control" name="phone" value="<?= $_SESSION['user_client']['so_dien_thoai'] ?>" placeholder="Số điện thoại" required>
                                        </li>
                                        <li data-animate="animate__fadeInUp">
                                            <label class="form-label">Địa chỉ</label>
                                            <input type="text" class="form-control" name="address" value="<?= $_SESSION['user_client']['dia_chi'] ?>" placeholder="Địa chỉ" required>

                                        </li>
                                        <li data-animate="animate__fadeInUp">
                                            <label class="form-label">Ghi chú</label>
                                            <textarea class="form-control" name="note" placeholder="Ghi chú"></textarea>
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
                                        <select name="payment_method" id="" required class="form-control">
                                            <option selected value="">Chọn phương thức thanh toán</option>
                                            <option value="vnpay">Thanh toán bằng VNPAY</option>
                                            <option value="cod">Thanh toán khi nhận hàng</option>

                                        </select>
                                        <div style="color:red;"><?= (isset($_SESSION['error_vnpay'])) ? $_SESSION['error_vnpay'] : '' ?> </div>
                                    </div>
                                    <div class="voucher mt-5 ms-1 w-100 mb-3">
                                        <input type="text" id="code_voucher" class="w-75" placeholder="Nhập mã giảm giá ( nếu có )">
                                        <button class="btn btn-primary " id="btn_voucher" type="button">Áp Mã</button >
                                    </div>
                                    <!-- p-method end -->
                                    <!-- order-summary start -->
                                    <div class="order-summary">
                                        <h2 data-animate="animate__fadeInUp">Tóm tắt đơn hàng</h2>
                                        <ul>
                                            <li data-animate="animate__fadeInUp">
                                                <span class="p-name">Tổng tiền:</span>
                                                <span class="p-price" id="price_total_voucher"><?= number_format($total[0]['total_quantity'], 0, ',', '.') ?> VNĐ </span>
                                            </li>

                                        </ul>
                                        <input type="hidden" name="price" id="price_payment" value="<?= $total[0]['total_quantity'] ?>">
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
        <script>
            function applyDiscount(originalPrice, discountPercentage) {

                const discountAmount = (originalPrice * discountPercentage) / 100;




                return originalPrice - discountAmount;
            }

            function formatMoney(amount) {

                const formattedAmount = amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");


                return formattedAmount + " VNĐ";
            }

            function statusAlert(type, title, message) {
                Swal.fire({
                    icon: `${type}`,
                    title: `${title}`,
                    text: `${message}`,

                });
            }
            var btn_voucher = document.querySelector('#btn_voucher');
            var code_voucher = document.querySelector('#code_voucher');
            btn_voucher.addEventListener('click', function() {
                var price = <?= $total[0]['total_quantity'] ?>;
                $.ajax({
                    url: "index.php?act=add-voucher",
                    method: "GET",
                    data: {
                        code: code_voucher.value,
                    },
                    success: function(response) {
                        if (response != false) {

                            if (response?.so_luong != 0) {
                                const discount = applyDiscount(price, response?.giam_gia);
                                let dataPrice = formatMoney(discount);

                                document.querySelector('#price_total_voucher').innerHTML = `${dataPrice} <sup style="color:red;" > - ${response?.giam_gia} %</sup>`;
                                document.querySelector('#price_payment').value = discount;

                                statusAlert('success', 'Thành Công', 'Bạn đã áp mã thành công');

                            } else {
                                statusAlert('error', 'Lỗi', 'Mã giảm giá hết hạn hoặc hết lượt nhập');
                            }
                        } else {
                            statusAlert('error', 'Lỗi', 'Mã giảm giá không tồn tại');
                        }


                    }

                });
            })
        </script>
    </form>
</main>