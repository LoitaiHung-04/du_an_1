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
                                <a class="breadcrumb-link" href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Liên hệ</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- article-area start -->
    <section class="get-info-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-content">
                        <!-- contact-detail start -->
                        <div class="get-info contact-detail">
                            <ul class="get-info-ul">
                                <li class="get-info-li" data-animate="animate__fadeInUp">
                                    <span class="get-icon"><i class="bi bi-geo"></i></span>
                                    <span class="get-add contact-block">
                                        <span>401 Broadway, 24th floor,</span>
                                        <span>orchard view, london, UK</span>
                                    </span>
                                </li>
                                <li class="get-info-li" data-animate="animate__fadeInUp">
                                    <span class="get-icon"><i class="bi bi-telephone"></i></span>
                                    <div class="contact-block">
                                        <a href="tel:(+91)123456789" class="get-add">(+00) 1 23 45 67 89</a>
                                        <a href="tel:(+91)123456789" class="get-add">(+1) 1 23 45 67 89</a>
                                    </div>
                                </li>
                                <li class="get-info-li" data-animate="animate__fadeInUp">
                                    <span class="get-icon"><i class="bi bi-envelope"></i></span>
                                    <div class="contact-block">
                                        <a href="mailto:demo@support.com" class="get-add">demo@support.com</a>
                                        <a href="mailto:support@spacingtech.com" class="get-add get-sup">support@spacingtech.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- contact-detail end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="article-area section-ptb">
        <div class="container">
            <div class="blog-grid-wrap blog-article">
                <?php
                // Kiểm tra và hiển thị thông báo thành công nếu có
                if (isset($_SESSION['success'])) {
                    echo '<div class="alert alert-success" role="alert">' . $_SESSION['success'] . '</div>';
                    unset($_SESSION['success']); // Xóa thông báo sau khi hiển thị
                }

                // Kiểm tra và hiển thị thông báo lỗi nếu có
                if (isset($_SESSION['error'])) {
                    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
                    unset($_SESSION['error']); // Xóa thông báo sau khi hiển thị
                }
                ?>

                <!-- drop-detail  start -->
                <section class="drop-detail section-ptb">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!-- contact us title start -->
                                <div class="section-capture">
                                    <div class="section-title">
                                        <h2 data-animate="animate__fadeInUp"><span>Liên hệ với chúng tôi</span></h2>
                                    </div>
                                </div>
                                <!-- contact us title end -->
                                <!-- contact us from start -->
                                <div class="form-warp contact-detail">
                                    <div class="contact-form-list">
                                        <form method="POST" action="index.php?act=contact-store">
                                            <ul class="form-fill">
                                                <li class="form-fill-li Name">
                                                    <label>Họ và tên</label>
                                                    <input type="text" name="name" autocomplete="name" placeholder="Nhập họ và tên" required>
                                                </li>
                                                <li class="form-fill-li Email">
                                                    <label>Email</label>
                                                    <input type="email" name="email" autocomplete="email" placeholder="Nhập địa chỉ Email" required>
                                                </li>
                                                <li class="form-fill-li Message">
                                                    <label>Nội dung</label>
                                                    <textarea rows="10" name="message" placeholder="Nhập nội dung" class="custom-textarea" required></textarea>
                                                </li>
                                            </ul>
                                            <div class="contact-submit">
                                                <button type="submit" class="btn btn-style2">
                                                    <span>Gửi</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- contact us from start -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- drop-detail  end  -->
            </div>
        </div>
    </section>
    
    <!-- article-area end -->
</main>