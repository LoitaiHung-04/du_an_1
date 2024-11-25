<!-- notification-bar end -->
<!-- header start -->

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
                                <span class="breadcrumb-text">Contact us</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- get-info-area start -->
    <section class="get-info-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-content">
                        <!-- about title start -->
                        <div class="section-capture">
                            <div class="section-title">
                                <h2 data-animate="animate__fadeInUp"><span>Khuyến mãi hot </span></h2>
                            </div>
                        </div>
                        <!-- about title end -->

                        <!-- contact-detail start -->
                        <?php $idCounter = 1;
                        foreach ($KhuyenMaiClient as $row): ?>
                            <div class="get-info contact-detail">
                                <ul class="get-info-ul">
                                    <li class="get-info-li" data-animate="animate__fadeInUp">
                                        <span>
                                            <h3 id="tenkhuyenmai-<?php echo $idCounter; ?>"><?php echo $row['ten_khuyen_mai']; ?></h3>
                                        </span>
                                        <span class="get-icon"><i class="bi bi-info-circle"></i></span>
                                        <span class="get-add contact-block">
                                            <span><?php echo $row['mo_ta']; ?> - <?php echo $row['giam_gia']; ?>đ - Kết thúc vào: <?php echo $row['ngay_ket_thuc']; ?></span>
                                        </span>
                                        <button onclick="copyText('tenkhuyenmai-<?php echo $idCounter; ?>')" style="background-color: #800080; border: none; color: white; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; margin-top: 10px; cursor: pointer; border-radius: 5px;">
                                            Copy
                                        </button>
                                    </li>
                                </ul>

                            </div>
                            <hr>
                        <?php $idCounter++;
                        endforeach; ?>
                        <!-- contact-detail end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get-info-area end -->
</main>
<!-- main section end-->
<!-- footer start -->

<!-- footer start -->
<!-- footer-copyright start -->

<script>
    function copyText(elementId) {
        var text = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(text).then(() => {
            Swal.fire({
                title: "Thành công!",
                text: "Đã sao chép mã thành công!",
                icon: "success"
            });
        }).catch(err => {
            console.error('Failed to copy text: ', err);
        });
    }
</script>