
<section class="article-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="blog-grid-wrapper without-wrap">
                    <div class="blog-grid-wrap blog-article">
                        <div class="blog-grid-view">
                            <ul class="blog-area-wrap row">
                                <?php if (!empty($data)): ?>
                                    <?php foreach ($data as $item): ?>
                                        <li class="blog-slider col-md-4 mb-4" data-animate="animate__fadeInUp">
                                            <div class="blog-post">
                                                <div class="blog-img">
                                                    <a href="?act=chi-tiet-bai-viet&id=<?= $item['id'] ?>" class="banner-img">
                                                        <!-- Hiển thị ảnh bài viết từ thư mục public/uploads -->
                                                        <img src="<?= '/uploads' . $item['image'] ?>" class="img-fluid" alt="imagê">
                                                    </a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-tag">
                                                        <h2><?= htmlspecialchars($item['title']) ?></h2>
                                                    </div>
                                                    <a href="?act=chi-tiet-bai-viet&id=<?= $item['id'] ?>" class="blog-btn btn-style2">Xem bài viết</a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>    
                                <?php else: ?>
                                    <li>
                                        <p class="text-danger">Không có bài viết nào để hiển thị.</p>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
