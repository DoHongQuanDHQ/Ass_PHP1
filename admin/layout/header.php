<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Xshop-Dự án Mẫu</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css" />
  <!-- Font awesome -->
  <link rel="stylesheet" href="../public/css/all.min.css" type="text/css" />
  <!-- Slick slider -->
  <link rel="stylesheet" href="../../public/css/slick.css" type="text/css">
    <link rel="stylesheet" href="../../public/css/slick-theme.css" type="text/css">
    <script src="js/slick.min.js"></script>

  <link rel="stylesheet" href="../public/css/dashboard.css" type="text/css" />
  <link rel="stylesheet" href="../public/css/custom.css" type="text/css" />
  <link rel="stylesheet" href="./" type="text/css" />
</head>

<body>
  <!-- Page Preloader -->
  <div id="preloader">
    <div class="loader"></div>
  </div>

  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <a href="index.php">
          <img src="../public/image/xshop.png" alt="logo" class="img-fluid logo">
        </a>
      </div>
      <ul class="list-unstyled components text-secondary">
        <li>
          <a href="../index.php"><i class="fas fa-store"></i>Xem trang web</a>
        </li>
        <li>
          <a href="index.php"><i class="fas fa-home"></i>Trang chủ</a>
        </li>

        <!-- Danh mục -->
        <li>
          <a href="#categories" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Danh mục
            <i class="fas fa-angle-right float-xl-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="categories">
            <li>
              <a href="index.php?act=them_dm">
                <i class="fas fa-plus"></i>Thêm Danh Mục</a>
            </li>
            <li>
              <a href="index.php?act=danh_sach_dm">
                <i class="fas fa-list-ul"></i>Danh sách danh mục</a>
            </li>
          </ul>
        </li>

        <!-- Sản phẩm -->
        <li>
          <a href="#products" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-table"></i>Sản phẩm
            <i class="fas fa-angle-right float-xl-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="products">
            <li>
              <a href="index.php?act=them_san_pham"><i class="fas fa-plus"></i>Thêm sản phẩm</a>
            </li>
            <li>
              <a href="index.php?act=danh_sach_sp_trang">
                <i class="fas fa-list-ul"></i>Danh sách sản phẩm</a>
            </li>
          </ul>
        </li>

        <!-- Khách hàng -->
        <li>
          <a href="#accounts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
            <i class="fas fa-user-friends"></i>Khách hàng
            <i class="fas fa-angle-right float-xl-right"></i>
          </a>
          <ul class="collapse list-unstyled" id="accounts">
            <li>
              <a href="index.php?act=them_tai_khoan"><i class="fas fa-plus"></i>Thêm khách hàng</a>
            </li>
            <li>
              <a href="index.php?act=danh_sach_tk">
                <i class="fas fa-list-ul"></i>Danh sách khách hàng</a>
            </li>
          </ul>
        </li>

        <li>
          <a href="index.php?act=binh_luan"> <i class="fas fa-comments"></i>Bình luận</a>
        </li>
        <li>
          <a href="index.php?act=thong_ke"><i class="fas fa-chart-line"></i></i>Thống kê</a>
        </li>
        <li>
          <a href="index.php?act=don_hang"><i class="fas fa-shipping-fast"></i></i>Đơn hàng</a>
        </li>
        <li>
          <a href=""><i class="fas fa-cog"></i>Cài đặt</a>
        </li>
      </ul>
    </nav>

    <div id="body" class="active">
      <!-- navbar navigation component -->
      <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <button type="button" id="sidebarCollapse" class="btn btn-light">
          <i class="fas fa-bars"></i><span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <div class="nav-dropdown">
                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user"></i> <span>Admin</span>
                  <i style="font-size: 0.8em" class="fas fa-caret-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                  <ul class="nav-list">
                    <li>
                      <a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Hồ sơ</a>
                    </li>
                    <li>
                      <a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Thông báo</a>
                    </li>
                    <li>
                      <a href="" class="dropdown-item"><i class="fas fa-cog"></i> Cài đặt</a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                      <a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- end of navbar navigation -->