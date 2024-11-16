<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | NN Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- CSS -->
    <?php
    require_once "views/layouts/libs_css.php";
    ?>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- HEADER -->
        <?php
        require_once "views/layouts/header.php";
        require_once "views/layouts/siderbar.php";
        ?>
        <!-- Left Sidebar End -->
        <div class="vertical-overlay"></div>

        <!-- Start right Content here -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">admin</a></li>
                                        <li class="breadcrumb-item active">Danh sách đơn hàng</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card" id="demo">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-header border-bottom-dashed p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h2>Quản lí danh sách đơn hàng - đơn hàng
                                                        <?= $donHang['ma_don_hang'] ?>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="card-body p-4">
                                                <div class="row g-3">
                                                    <div class="col-lg-3 col-6">
                                                        <?php
                                                        $colorElerts = 'secondary'; 

                                                        if ($donHang['trang_thai_id'] >= 1 && $donHang['trang_thai_id'] < 9) {
                                                            $colorElerts = 'primary';  
                                                        } elseif ($donHang['trang_thai_id'] == 9) {
                                                            $colorElerts = 'success';   
                                                        } elseif ($donHang['trang_thai_id'] == 10) {
                                                            $colorElerts = 'warning';   
                                                        } elseif ($donHang['trang_thai_id'] == 11) {
                                                            $colorElerts = 'info';  
                                                        } elseif ($donHang['trang_thai_id'] > 11) {
                                                            $colorElerts = 'danger';     
                                                        }                                                
                                                        ?>
                                                        <div class="alert alert-<?= $colorElerts ?>" role="alert">
                                                            Trạng thái đơn hàng : 
                                                            <?= $donHang['ten_trang_thai_id']; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-6">
                                                        <p class="text-muted mb-2 text-uppercase fw-semibold">Ngày đặt hàng</p>
                                                        <h5 class="fs-14 mb-0"><span
                                                                id="invoice-date"><?= $donHang['ngay_dat'] ?></span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-lg-3 col-6">
                                                        <p class="text-muted mb-2 text-uppercase fw-semibold">Trạng thái thanh toán
                                                            Status
                                                        </p>
                                                        <span class="badge bg-success-subtle text-success fs-11"
                                                            id="payment-status"><?= $donHang['ten_trang_thai_thanh_toan'] ?></span>
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card-body p-4 border-top border-top-dashed">
                                                <div class="row g-3">
                                                    <div class="col-6">
                                                        <h6 class="text-muted text-uppercase fw-semibold mb-3">Thông tin tài khoản 
                                                            đặt hàng
                                                        </h6>
                                                        <p class="fw-medium mb-2" id="billing-name">
                                                            <?= $donHang['ho_ten'] ?>
                                                        </p>
                                                        <p class="text-muted mb-1"><span>Số điện thoại :</span><span
                                                                id="billing-phone-no"><?= $donHang['so_dien_thoai'] ?></span>
                                                        </p>
                                                        <p class="text-muted mb-0"><span>Email : </span><span
                                                                id="billing-tax-no"><?= $donHang['email'] ?></span> </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6 class="text-muted text-uppercase fw-semibold mb-3">
                                                            Thông tin người nhận </h6>
                                                        <p class="fw-medium mb-2" id="shipping-name">
                                                            <?= $donHang['ten_nguoi_nhan'] ?>
                                                        </p>
                                                        <p class="text-muted mb-1"><span>Số điện thoại người
                                                                nhận : </span><span
                                                                id="shipping-phone-no"><?= $donHang['sdt_nguoi_nhan'] ?></span>
                                                        </p>
                                                        <p class="text-muted mb-0"><span>Địa chỉ người nhận : </span><span
                                                                id="billing-tax-no"><?= $donHang['dia_chi_nguoi_nhan'] ?></span>
                                                        </p>
                                                        <p class="text-muted mb-0"><span>Ghi chú : </span><span
                                                                id="billing-tax-no"><?= $donHang['ghi_chu'] ?></span>
                                                        </p>
                                                        <p class="text-muted mb-0"><span>Email người nhận : </span><span
                                                                id="billing-tax-no"><?= $donHang['email_nguoi_nhan'] ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card-body p-4">
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-borderless text-center table-nowrap align-middle mb-0">
                                                        <thead>
                                                            <tr class="table-active">
                                                                <th scope="col" style="width: 50px;">STT</th>
                                                                <th scope="col" >Sản Phẩm</th>
                                                                <th scope="col" >Đơn giá</th>
                                                                <th scope="col" >Số Lượng</th>
                                                                <th scope="col" class="text-end">Thành Tiền</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="products-list">
                                                            <?php $thanhtien = 0; ?>
                                                            <?php $tongTienSanPham = 0 ?>
                                                        <?php foreach ($sanPhamDonHang as $index => $row): ?>
                                                        <?php    $thanhtien = $row['don_gia'] * $row['so_luong'];  // Tính thành tiền cho từng sản phẩm
                                                            $tongTienSanPham += $thanhtien;   ?>
                                                            

                                                                <tr>
                                                                    <th scope="row"><?= $index + 1 ?></th>
                                                                    <td class="text-center">
                                                                        <p class="text-muted mb-0">
                                                                            <?= $row['ten_san_pham'] ?>
                                                                        </p>
                                                                    </td>
                                                                   
                                                                    <td><?= number_format($row['don_gia'], 0, ',', '.') ?> đ</td> <!-- Đơn giá -->
                                                                    <td><?= $row['so_luong'] ?></td> <!-- Số lượng -->
                                                                    <td class="text-end">
                                                                        <?= number_format($row['don_gia']* $row['so_luong'], 0, ',', '.') ?> đ
                                                                    </td> <!-- Thành tiền -->
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="border-top border-top-dashed mt-2">
                                                    <table
                                                        class="table table-borderless table-nowrap align-middle mb-0 ms-auto"
                                                        style="width:250px">
                                                        <tbody>
                                                            <tr>
                                                                <td>Discount <small
                                                                        class="text-muted"><?= $khuyenMai['ten_khuyen_mai'] ?></small>
                                                                </td>
                                                                <td class="text-end"> - <?= number_format($khuyenMai['giam_gia'], 0, ',', '.') ?> đ</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shipping Charge</td>
                                                                <td class="text-end"> + <?= number_format($row['van_chuyen'], 0, ',', '.') ?> đ</td>
                                                            </tr>
                                                            <tr class="border-top border-top-dashed fs-15">
                                                                <th scope="row">Total Amount</th>
                                                                <th class="text-end">
                                                                    <?= number_format($tongTien = $tongTienSanPham - $khuyenMai['giam_gia']+$row['van_chuyen'], 0, ',', '.') ?> đ
                                                                </th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="mt-3">
                                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment
                                                        Details:
                                                    </h6>
                                                    <p class="text-muted mb-1">Payment Method:
                                                        <span class="fw-bold" style="color: #007bff;"
                                                            id="payment-method">
                                                            <?= $donHang['ten_phuong_thuc'] ?>
                                                        </span>
                                                    </p>
                                                    <p class="text-muted">Total Amount: <span class="fw-medium" id="">
                                                        </span><span id="card-total-amount"><?= number_format($tongTien, 0, ',', '.') ?>đ</span>
                                                    </p>
                                                </div>

                                                <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                                    <a href="javascript:window.print()" class="btn btn-success"><i
                                                            class="ri-printer-line align-bottom me-1"></i> Print</a>
                                                    <a href="javascript:void(0);" class="btn btn-primary"><i
                                                            class="ri-download-2-line align-bottom me-1"></i>
                                                        Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php
    require_once "views/layouts/libs_js.php";
    ?>
</body>

</html>

