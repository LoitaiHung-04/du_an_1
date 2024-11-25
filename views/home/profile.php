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
                                    <li class="profile-li" data-animate="animate__fadeInUp" onclick="showTab('wishlist')">
                                        <a href="javascript:void(0)">
                                            Danh sách yêu thích</a>
                                    </li>
                                    <li class="profile-li" data-animate="animate__fadeInUp" onclick="showTab('password')">
                                        <a href="javascript:void(0)">Đổi mật khẩu</a>
                                    </li>
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
                                        <th>Order #</th>
                                        <th>Date purchased</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 08, 2024</td>
                                        <td class="canceled">Canceled</td>
                                        <td>$760.50</td>
                                    </tr>
                                    <tr>
                                        <td>34VB5540K83</td>
                                        <td>April 11, 2024</td>
                                        <td class="process">In progress</td>
                                        <td>$540.30</td>
                                    </tr>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 15, 2024</td>
                                        <td class="delayed">Delayed</td>
                                        <td>$412.00</td>
                                    </tr>
                                    <tr>
                                        <td>78A643CD409</td>
                                        <td>April 18, 2024</td>
                                        <td class="delivered">Delivered</td>
                                        <td>$805.00</td>
                                    </tr>
                                    <tr class="no-bottom-border">
                                        <td>78A643CD409</td>
                                        <td>April 21, 2024</td>
                                        <td class="delivered">Delivered</td>
                                        <td>$270.20</td>
                                    </tr>
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
                                            <li class="billing-li">
                                                <label>Mật khẩu mới</label>
                                                <input type="password" name="mat_khau_moi" placeholder="Mật khẩu mới">
                                            </li>
                                            <li class="billing-li">
                                                <label>Xác nhận mật khẩu</label>
                                                <input type="password" name="mat_khau_cu" placeholder="Xác nhận mật khẩu">
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
                        <div id="wishlist" class="tab-pane" style="display: none;">
                            <h6>Wishlist</h6>
                            <p>Your saved items go here.</p>
                        </div>
                        <div id="password" class="tab-pane" style="display: none;">
                            <h6>Change Password</h6>
                            <form>
                                <label>New Password</label>
                                <input type="password" placeholder="New Password">
                                <!-- Other fields -->
                            </form>
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