<main>
    <style>
        .tab-pane {
            display: none;
        }

        .tab-pane.active,
        .tab-pane[style="display: block;"] {
            display: block;
        }

        .profile-ul a.active {
            font-weight: bold;
            color: #007bff;
        }
    </style>
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
                                <span class="breadcrumb-text">Order history</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- order history start -->
    <section class="order-histry-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="password-block">
                        <!-- order profile start -->
                        <div class="profile-info">
                            <div class="account-profile">
                                <div class="pro-img">
                                    <a href="javascript:void(0)">
                                        <img src="/du_an_1/uploads/users/<?= $_SESSION['user_client']['anh_dai_dien'] ?>" width="100px" height="100px" style="border-radius: 50%; border:5px solid black" alt="Avatar">
                                    </a>
                                </div>
                                <div class="profile-text">
                                    <h6><?= $_SESSION['user_client']['ho_ten'] ?></h6>
                                </div>
                            </div>

                            <div class="account-detail">
                                <ul class="profile-ul">
                                    <li class="profile-li" data-animate="animate__fadeInUp" onclick="showTab('order')">
                                        <a href="javascript:void(0)" class="active">Đơn hàng</a>
                                    </li>
                                    <li class="profile-li" data-animate="animate__fadeInUp" onclick="showTab('profile')">
                                        <a href="javascript:void(0)">Trang cá nhân</a>
                                    </li>
                                    
                                    <li class="profile-li" data-animate="animate__fadeInUp" onclick="showTab('password')">
                                        <a href="javascript:void(0)">Đổi mật khẩu</a>
                                    </li>
                                    <?php if (isset($_SESSION['error'])): ?>



                                        <div class="alert alert-danger">
                                            <?= $_SESSION['error']; ?>
                                        </div>
                                        <?php unset($_SESSION['error']); ?>
                                    <?php endif; ?>
                                    <?php if (isset($_SESSION['success'])): ?>
                                        <div class="alert alert-success">
                                            <?= $_SESSION['success']; ?>
                                        </div>
                                        <?php unset($_SESSION['success']); ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="profile-form order-info tab-pane" style="display: block;" id="order" data-animate="animate__fadeInUp">
                            <div class="pro-add-title">
                                <h6>Đơn hàng</h6>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Đơn hàng #</th>
                                        <th>Ngày Mua</th>
                                        <th>Trạng thái</th>
                                        <th>Tổng tiền</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($orders)) : ?>
                                        <?php foreach ($orders as $item): ?>
                                            <tr>
                                                <td>#<?= $item['ma_don_hang'] ?></td>
                                                <td><?= $item['ngay_dat'] ?></td>
                                                <td class="canceled"><?= $item['ten_trang_thai_id'] ?></td>
                                                <td><?= number_format($item['tong_tien'], 0, ',', '.') ?> VND</td>
                                                <td><a href="?act=detail-order&id=<?= $item['id'] ?>" style="font-size: 25px;"><i class='bx bx-show' ></i></a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="4">Bạn chưa có đơn hàng nào.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="profile-form profile-address tab-pane" id="profile" style="display: none;">
                            <div class="billing-area">

                                <form method="POST" action="?act=check-tai-khoan" enctype="multipart/form-data">
                                    <input type="hidden" value="<?= $_SESSION['user_client']['id'] ?>" name="id">

                                    <div class="pro-add-title">
                                        <h6>Thông tin cá nhân</h6>
                                    </div>


                                    <div class="billing-form">
                                        <ul class="input-2">
                                            <li class="billing-li">
                                                <label>Họ tên</label>
                                                <input type="text" name="ho_ten" placeholder="Họ tên" value="<?= $_SESSION['user_client']['ho_ten'] ?>">
                                            </li>
                                            <li class="billing-li">
                                                <label>Email</label>
                                                <input type="email" name="email" placeholder="Email" value="<?= $_SESSION['user_client']['email'] ?>" required>
                                            </li>
                                            <li class="billing-li">
                                                <label>Số điện thoại</label>
                                                <input type="number" pattern="^0[3|5|7|8|9][0-9]{8}$"
                                                    name="so_dien_thoai" placeholder="Số điện thoại" value="<?= $_SESSION['user_client']['so_dien_thoai'] ?>">

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
                                                <input type="text" name="dia_chi" placeholder="Địa chỉ" value="<?= $_SESSION['user_client']['dia_chi'] ?>">
                                            </li>
                                            <li class="billing-li">
                                                <label>Ngày sinh</label>

                                                <input type="date" disabled name="ngay_sinh" value="<?= $_SESSION['user_client']['ngay_sinh'] ?>">

                                            </li>
                                            <li class="billing-li">
                                                <label>Ảnh đại diện</label>
                                                <input type="file" name="anh_dai_dien">
                                            </li>

                                        </ul>
                                        <ul class="pro-submit" style="margin-top: 20px;">
                                            <div class="" style="display:flex; justify-content: space-between;">
                                                <label class="box-area btn btn-style2">
                                                    <span class="text">Đăng ký nhận thông báo</span>
                                                    <input type="checkbox" class="cust-checkbox">
                                                    <span class="cust-check"></span>
                                                </label>

                                                <input type="submit" class="btn btn-style2 checkout disabled" value="Cập nhật">
                                            </div>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="address" class="tab-pane" style="display: none;">
                            <h6>Address</h6>
                            <p>Manage your address details here.</p>
                        </div>
                      
                        <div id="password" class="tab-pane" style="display: none;">
                            <div class="profile-form">
                                <div class="pro-add-title">
                                    <h6 data-animate="animate__fadeInUp">Đổi mật khẩu</h6>
                                </div>
                                <form method="POST" action="?act=doi-mat-khau">

                                    <ul class="pro-input-label mt-3" data-animate="animate__fadeInUp">
                                        <li>
                                            <label>Mật khẩu cũ</label>
                                            <input type="password" name="mat_khau_cu" placeholder="Old password" required>
                                        </li>
                                    </ul>
                                    <ul class="pro-input-label mt-3" data-animate="animate__fadeInUp">
                                        <li>
                                            <label>Mật khẩu mới</label>
                                            <input type="password" name="mat_khau_moi" placeholder="New password" required>
                                        </li>
                                    </ul>
                                    <ul class="pro-input-label mt-3" data-animate="animate__fadeInUp">
                                        <li>
                                            <label>Nhập lại mật khẩu</label>
                                            <input type="password" name="xac_nhan_mat_khau"
                                                placeholder="Confirm new password" required>
                                        </li>
                                    </ul>
                                    <ul class="pro-submit mt-3" data-animate="animate__fadeInUp">
                                        <li class="label-info">
                                            <label class="box-area">
                                                <span class="agree-text">Đăng ký nhận thông báo mới</span>
                                                <input type="checkbox" class="cust-checkbox">
                                                <span class="cust-check"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="submit" class="btn btn-style2 checkout" value="Cập nhật">
                                        </li>
                                    </ul>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function showTab(tabId) {
            // Ẩn tất cả nội dung các tab
            const tabs = document.querySelectorAll('.tab-pane');
            tabs.forEach(tab => tab.style.display = 'none'); // Ẩn tab

            // Hiển thị nội dung của tab được chọn
            const selectedTab = document.getElementById(tabId);
            if (selectedTab) {
                if (selectedTab.style.display == 'none') {
                    selectedTab.style.display = 'block'
                }
            }

            // Xóa class 'active' khỏi tất cả các thẻ <a>
            const links = document.querySelectorAll('.profile-ul a');
            links.forEach(link => link.classList.remove('active'));

            // Thêm class 'active' vào thẻ <a> của tab được chọn
            const selectedLink = document.querySelector(`.profile-ul li[onclick="showTab('${tabId}')"] a`);
            if (selectedLink) {
                selectedLink.classList.add('active');
            }
        }
    </script>
</main>