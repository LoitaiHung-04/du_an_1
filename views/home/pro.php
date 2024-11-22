

        <!-- header end -->
        <!-- main section start-->
        <main>
            <!-- breadcrumb start -->
 <?php if (isset($_SESSION['user_client'])) { ?>
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
                                <span class="breadcrumb-text">Profile</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!--profile start -->
    <section class="pro-address-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="password-block">
                        <!-- order profile start -->
                        <div class="profile-info">
                            <div class="account-profile">
                                <div class="pro-img">
                                    <a href="javascript:void(0)">
                                        <img src="/du_an_1/uploads/users/<?=$_SESSION['user_client']['anh_dai_dien']?>" class="img-fluid" alt="Avatar">
                                    </a>
                                </div>
                                <div class="profile-text">
                                    <h6><?=$_SESSION['user_client']['ho_ten']?></h6>
                                </div>
                            </div>
                        </div>
                        <!-- order profile end -->
                        <!-- order info start -->
                        <div class="profile-form profile-address">
                            <div class="billing-area">
                                <form method="POST" action="?act=check-tai-khoan" enctype="multipart/form-data">
                                    <input type="hidden" value="<?=$_SESSION['user_client']['id']?>" name="id">

                                    <div class="pro-add-title">
                                        <h6>Thông tin cá nhân</h6>
                                    </div>

                                    <?php if (isset($_SESSION['error'])): ?>
                                        <div class="alert alert-danger">
                                            <?= $_SESSION['error']; ?>
                                        </div>
                                        <?php unset($_SESSION['error']); ?>
                                    <?php endif; ?>

                                    <div class="billing-form">
                                        <ul class="input-2">
                                            <li class="billing-li">
                                                <label>Họ tên</label>
                                                <input type="text" name="ho_ten" placeholder="Họ tên" value="<?=$_SESSION['user_client']['ho_ten']?>">
                                            </li>
                                            <li class="billing-li">
                                                <label>Email</label>
                                                <input type="email" name="email" placeholder="Email" value="<?=$_SESSION['user_client']['email']?>" required>
                                            </li>
                                            <li class="billing-li">
                                                <label>Số điện thoại</label>
                                                <input type="text" name="so_dien_thoai" placeholder="Số điện thoại" value="<?=$_SESSION['user_client']['so_dien_thoai']?>">
                                            </li>
                                            <li class="billing-li">
                                                <label>Giới tính</label>
                                                <select name="gioi_tinh">
                                                    <option value="1" <?= ($_SESSION['user_client']['gioi_tinh'] == 1) ? 'selected' : ''; ?>>Nam</option>
                                                    <option value="2" <?= ($_SESSION['user_client']['gioi_tinh'] == 2) ? 'selected' : ''; ?>>Nữ</option>
                                                </select>
                                            </li>
                                            <li class="billing-li">
                                                <label>Địa chỉ</label>
                                                <input type="text" name="dia_chi" placeholder="Địa chỉ" value="<?=$_SESSION['user_client']['dia_chi']?>">
                                            </li>
                                            <li class="billing-li">
                                                <label>Ngày sinh</label>
                                                <input type="date" name="ngay_sinh" value="<?=$_SESSION['user_client']['ngay_sinh']?>">
                                            </li>
                                            <li class="billing-li">
                                                <label>Ảnh đại diện</label>
                                                <input type="file" name="anh_dai_dien">
                                            </li>
                                            <li class="billing-li">
                                                <label>Mật khẩu mới</label>
                                                <input type="password" name="mat_khau_moi" placeholder="Mật khẩu mới">
                                            </li>
                                            <li class="billing-li">
                                                <label>Xác nhận mật khẩu</label>
                                                <input type="password" name="mat_khau_cu" placeholder="Xác nhận mật khẩu">
                                            </li>
                                        </ul>
                                        <ul class="pro-submit">
                                            <li>
                                                <label class="box-area btn btn-style2">
                                                    <span class="text">Đăng ký nhận thông báo</span>
                                                    <input type="checkbox" class="cust-checkbox">
                                                    <span class="cust-check"></span>
                                                </label>
                                            </li>
                                            <li>
                                                <input type="submit" class="btn btn-style2 checkout disabled" value="Cập nhật">
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- order info end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- profile end -->
<?php } ?>
