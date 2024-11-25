<section class="breadcrumb-area bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-index">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb p-0 mb-0 d-flex flex-column">
                        
                        <!-- blog content start -->
                        <div class="blog-post-opt blog-post-content">
                            <div class="blog-content">
                                <div class="blog-wrap-desc">
                                    <li class="breadcrumb-item">
                                        <p class="text-muted"><?= ($data['content']) ?></p>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <!-- blog content end -->

                        <!-- Hiển thị ngày đăng theo định dạng ngày/tháng/năm -->
                        <li class="breadcrumb-item">
                            <small class="text-secondary"><?= date('d F Y', strtotime($data['ngay_dang'])) ?></small>
                        </li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</section>
