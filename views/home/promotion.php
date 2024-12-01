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
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"> <!-- Dàn hàng ngang -->
            <?php $idCounter = 1; ?>
            <?php foreach ($KhuyenMaiClient as $row): ?>
                <div class="col"> <!-- Mỗi khuyến mãi sẽ là một cột -->
                    <div class="get-info contact-detail">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <!-- Tiêu đề khuyến mãi -->
                                <h5 class="card-title" id="tenkhuyenmai-<?php echo $idCounter; ?>"><?php echo $row['ten_khuyen_mai']; ?></h5>
                                
                                <!-- Mô tả khuyến mãi -->
                                <p class="card-text mb-2"><?php echo $row['mo_ta']; ?></p>
                                
                                <!-- Giảm giá -->
                                <p class="card-text mb-2"><strong>Giảm giá: </strong><?php echo number_format($row['giam_gia']); ?>đ</p>
                                
                                <!-- Ngày kết thúc -->
                                <p class="card-text mb-3"><strong>Kết thúc vào: </strong><?php echo date('d/m/Y', strtotime($row['ngay_ket_thuc'])); ?></p>

                                <!-- Nút sao chép -->
                                <button onclick="copyText('tenkhuyenmai-<?php echo $idCounter; ?>')" class="btn btn-sm btn-primary">
                                    Sao chép
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $idCounter++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    function copyText(elementId) {
        const textToCopy = document.getElementById(elementId).innerText;
        navigator.clipboard.writeText(textToCopy)
            .then(() => alert('Sao chép thành công: ' + textToCopy))
            .catch(err => alert('Sao chép thất bại!'));
    }
</script>




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