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
                                <a class="breadcrumb-link" href="index.html">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Bộ sưu tập</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- collection start -->
    <section class="main-content-wrap bg-color shop-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pro-grli-wrapper left-side-wrap">
                        <div class="pro-grli-wrap product-grid">
                            <div class="collection-img-wrap">
                                <h6 data-animate="animate__fadeInUp" class="st-title">Bộ sưu tập (23)</h6>
                                <!-- collection info start -->
                                <div class="collection-info">
                                    <div class="collection-image" data-animate="animate__fadeInUp">
                                        <img src="/du_an_1/assets/images/logo/sall-banner.jpg" class="img-fluid" alt="sall-banner">
                                    </div>
                                </div>
                                <!-- collection info end -->
                            </div>
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar wow">
                                <div class="product-filter without-sidebar">
                                    <button class="filter-button" type="button"><i class="fa-solid fa-filter"></i><span>Filter</span></button>
                                </div>
                                <div class="product-view-mode">
                                    <!-- shop-item-filter-list start -->
                                    <a href="javascript:void(0)" class="list-change-view grid-three active" data-grid-view="3"><i class="fa-solid fa-border-all"></i></a>
                                    <a href="javascript:void(0)" data-grid-view="1" class="list-change-view list-one"><i class="fa-solid fa-list"></i></a>
                                    <!-- shop-item-filter-list end -->
                                </div>
                                <!-- product-short start -->
                                <div class="product-short">
                                    <label for="SortBy">Sort by:</label>
                                    <select class="nice-select" name="sortby" id="SortBy">
                                        <option value="manual">Featured</option>
                                        <option value="best-selling">Best Selling</option>

                                    </select>
                                    <a href="javascript:void(0)" class="short-title">
                                        <span class="sort-title">Best Selling</span>
                                        <span class="sort-icon"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <a href="javascript:void(0)" class="short-title short-title-lg">
                                        <span class="sort-title">Best Selling</span>
                                        <span class="sort-icon"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <ul class="pro-ul collapse">
                                        <li class="pro-li"><a href="javascript:void(0)">Featured</a></li>
                                        <li class="pro-li selected"><a href="javascript:void(0)">Best Selling</a></li>

                                    </ul>
                                </div>
                                <!-- product-short end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- Latest-product start -->
                            <div class="special-product grid-3">
                                <div class="collection-category">
                                    <div class="row">
                                        <div class="col">
                                            <div class="collection-wrap">
                                                <ul class="product-view-ul">
                                                    <?php if ($data != null): ?>
                                                        <?php foreach ($data as $item): ?>

                                                            <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image banner-hover">
                                                                        <a href="?act=chi-tiet-san-pham&id=<?= $item['id'] ?>" class="pro-img">
                                                                            <img src="/du_an_1/uploads/products/<?= $item['hinh_anh'] ?>" class="img-fluid img1 mobile-img1" alt="p1">
                                                                            <img src="/du_an_1/uploads/products/<?= $item['hinh_anh'] ?>" class="img-fluid img2 mobile-img2" alt="p2">
                                                                        </a>

                                                                    </div>
                                                                    <div class="product-caption">
                                                                        <div class="product-content">
                                                                            <div class="product-sub-title">
                                                                                <span><?= $item['namedm'] ?></span>
                                                                            </div>
                                                                            <div class="product-title">
                                                                                <h6><a href="?act=chi-tiet-san-pham&id=<?= $item['id'] ?>"><?= $item['ten_san_pham'] ?></a></h6>
                                                                            </div>
                                                                            <div class="product-price">
                                                                                <div class="" style="color: red;">
                                                                                    <span class="new-price"><?= number_format($item['gia_san_pham'], 0, ',', '.') ?> VNĐ</span>

                                                                                </div>
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
                                                                                <span class="product-label-title">Sale<span>22%</span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        <?php endforeach ?>
                                                    <?php else: ?>
                                                        <div class="" style="padding: 20px 500px 20px 100px; margin-left:350px;" ><i style="font-size: 200px;" class='bx bx-package'></i></div>
                                                    <?php endif ?>
                                                </ul>
                                            </div>
                                            <div class="paginatoin-area">
                                                <ul class="pagination-page-box" data-animate="animate__fadeInUp">
                                                    <li class="number active"><a href="javascript:void(0)" class="theme-glink">1</a></li>
                                                    <li class="number"><a href="javascript:void(0)" class="gradient-text">2</a></li>
                                                    <li class="page-next"><a href="javascript:void(0)" class="theme-glink"><i class="fa -solid fa-angle-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Latest-product end -->
                        </div>
                        <div class="pro-grli-wrap product-sidebar">
                            <div class="pro-grid-block">
                                <div class="shop-sidebar-inner">
                                    <div class="shop-sidebar-wrap filter-sidebar">
                                        <!-- button start -->
                                        <button class="close-sidebar" type="button">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                        <!-- button end -->
                                        <!-- filter-form start -->
                                        <div class="facets">
                                            <form class="facets-form" action="?act=product" method="POST">
                                                <div class="facets-wrapper">
                                                    <!-- Product-Categories start -->
                                                    <div class="shop-sidebar">
                                                        <h6 class="shop-title" data-animate="animate__fadeInUp">Danh Mục</h6>
                                                        <a href="#collapse-5" data-bs-toggle="collapse" class="shop-title shop-title-lg" data-animate="animate__fadeInUp">Categories<i class="fa fa-angle-down"></i></a>
                                                        <div class="collapse show shop-element" id="collapse-5">
                                                            <ul class="brand-ul scrollbar">
                                                                <?php foreach ($categories as $item): ?>

                                                                    <li class="cat-checkbox" data-animate="animate__fadeInUp">
                                                                        <label class="checkbox-label">
                                                                            <input type="checkbox" class="cust-checkbox" value="<?= $item['id'] ?>" name="category[]">
                                                                            <span class="check-name"><?= $item['ten_danh_muc'] ?></span>
                                                                            <!-- <span class="count-check">(12)</span> -->
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>

                                                                <?php endforeach ?>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="shop-sidebar sidebar-price">
                                                        <h6 class="shop-title" data-animate="animate__fadeInUp">Giá</h6>
                                                        <a href="#collapse-3" data-bs-toggle="collapse" class="shop-title shop-title-lg" data-animate="animate__fadeInUp">Price</a>
                                                        <div class="filter-info" data-animate="animate__fadeInUp">
                                                            <span class="shop-price">Giá cao nhất: 50.000.000 VNĐ</span>
                                                            <facet-remove><a href="" class="reset-text">Làm mới</a></facet-remove>
                                                        </div>
                                                        <!-- Product-price start -->
                                                        <div class="collapse price-wrap" id="collapse-3">
                                                            <price-range class="price-range">
                                                                <div class="price-range-group group-range">
                                                                    <input type="range" class="range" name="price_min" min="0" max="30000000" value="0" id="range1">
                                                                    <input type="range" class="range" name="price_max" min="0" max="50000000" value="0" id="range2">
                                                                </div>
                                                                <div class="price-input-group group-input" data-animate="animate__fadeInUp">
                                                                    <div class="price-range-input input-price">
                                                                        <label class="label-text">Từ</label>
                                                                        <span class="price-value">VNĐ</span>
                                                                        <span id="demo1" class="price-field">0</span>
                                                                    </div>
                                                                    <span class="price-range-delimeter">-</span>
                                                                    <div class="price-range-input input-price">
                                                                        <label class="label-text">Đến</label>

                                                                        <span id="demo2" class="price-field">50.000.000</span>
                                                                        <span class="price-value">VNĐ</span>
                                                                    </div>
                                                                </div>
                                                            </price-range>
                                                        </div>

                                                    </div>
                                                    <div class="shop-sidebar sidebar-price">
                                                        <h6 class="shop-title" data-animate="animate__fadeInUp">Sắp xếp </h6>
                                                        <div class="filter-info" data-animate="animate__fadeInUp">
                                                            <span class="shop-price">Chọn cách sắp xếp</span>

                                                        </div>
                                                        <!-- Product-price start -->
                                                        <div class="collapse price-wrap" id="collapse-3">
                                                            <select name="order_by" id="" class="form-control">
                                                                <option selected>Chọn kiểu</option>
                                                                <option value="ASC">Tăng dần</option>
                                                                <option value="DESC">Giảm dần</option>

                                                            </select>
                                                        </div>

                                                    </div>

                                                </div>
                                                <button class="btn btn-outline-success mt-5 w-100">Lọc</button>
                                            </form>
                                        </div>
                                        <!-- filter-form end -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collection end -->
</main>