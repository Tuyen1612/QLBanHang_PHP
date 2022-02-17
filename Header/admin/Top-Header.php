 <?php
    session_start();
    if(!isset($_SESSION["account"])){
      $url = $level.pages_path_LG."login.php";
      header("location: ".$url);
      exit();
    }else{
      if(!isset($_SESSION["account"]["role"]) || empty($_SESSION["account"]["role"])){
        $url = $level."index.php";
        header("location: ".$url);
        exit();
      }
    }

?> 

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo $level.img_path_AD."sidebar-1.jpg"?>">
      <div class="logo"><img src="<?php echo $level.img_path_AD."logo.png"?>" alt="company name here"><a href="<?php echo $level.pages_path_AD."dashboard.php"?>" class="simple-text logo-normal"></a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          
          <?php //TRANG CHỦ
            if($home) 
              echo '<li class="nav-item active">';
            else echo '<li class="nav-item  ">';
          ?>
              <a class="nav-link" href="<?php echo $level.pages_path_AD."home.php"?>">
                <i class="material-icons">dashboard</i>
                <p>Trang Chủ</p>
              </a>
            </li>

          <?php //THÔNG TIN CÁ NHÂN
            if($userprofile)
                    echo '<li class="nav-item active  ">';
                else echo '<li class="nav-item  ">';
          ?>
            <!-- <a class="nav-link" href="./template/user.php"> -->
            <a class="nav-link" href="<?php echo $level.pages_path_AD."template/user.php"?>">
              <i class="material-icons">person</i>
              <p>Thông Tin Cá Nhân</p>
            </a>
          </li>

          <?php //QUẢN LÝ ĐỘC GIẢ
            if($reader)
                    echo '<li class="nav-item active  ">';
                else echo '<li class="nav-item  ">';
          ?>
            <a class="nav-link" href="<?php echo $level.pages_path_AD."template/reader.php"?>">
              <i class="material-icons">content_paste</i>
              <p>Quản Lý Độc Giả</p>
            </a>
          </li>

          <?php //QUẢN LÝ SẢN PHẨM
                if($product)
                    echo '<li class="nav-item active  ">';
                else echo '<li class="nav-item  ">';
          ?>
            <a class="nav-link" href="<?php echo $level.pages_path_AD."template/product.php"?>">
              <i class="material-icons">content_paste</i>
              <p>Quản Lý Sản Phẩm</p>
            </a>
          </li>

          <?php //QUẢN LÝ TÁC GIẢ
                if($author)
                    echo '<li class="nav-item active  ">';
                else echo '<li class="nav-item  ">';
          ?>
            <a class="nav-link" href="<?php echo $level.pages_path_AD."template/author.php"?>">
              <i class="material-icons">content_paste</i>
              <p>Quản Lý Tác Giả</p>
            </a>
          </li>

          <?php //HÓA ĐƠN ĐÃ BÁN   HÓA ĐƠN ĐÃ DUYỆT   HÓA ĐƠN ĐÃ HỦY   HÓA ĐƠN CHỜ DUYỆT
                if($billsold || $billapprovaled || $billcanceled || $billpendingapproval)
                    echo '<li class="nav-item active  ">';
                else echo '<li class="nav-item  ">';
          ?>
            <a class="nav-link" href="<?php echo $level.pages_path_AD."template/billsold.php"?>">
              <i class="material-icons">content_paste</i>
              <p>Quản Lý Hóa Đơn</p>
            </a>
          </li>

          <?php //THÔNG BÁO
                if($notification)
                    echo '<li class="nav-item active  ">';
                else echo '<li class="nav-item  ">';
          ?>

            <a class="nav-link" href="<?php echo $level.pages_path_AD."template/notifications.php"?>">
              <i class="material-icons">notifications</i>
              <p>Thông Báo</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
       <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Bảng Điều Khiển</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
              <div class="navbar-form">
                            <div class="search-header-w">
                                <div id="sosearchpro" class="">
                                    <form class="tg-formtheme tg-formsearch " method="POST" 
                                        action="<?php echo $level.pages_path_AD."post/search.php"?>">
                                        <div id="search0" class="search input-group form-group">
                                            <div class="col-md-2"style="padding:0px;text-align: center;">
                                                <select class="" name="category_id"style="padding-left:20px;width:100px;height:41px;">
                                                    <option value="docgia">Đọc Giả</option>
                                                    <option value="sach">Sách</option>
                                                    <option value="tacgia">Tác Giả</option>
                                                    <option value="hoadon">Hóa Đơn</option>
                                                </select>
                                            </div>
                                            <input class="col-md-8" type="text" value="" size="50"
                                                autocomplete="off" placeholder="Thông tin tìm kiếm..." name="keyword">
                                            <span class="input-group-btn">
                                                <button  type="submit" class="btn btn-white btn-round btn-just-icon"
                                                    name="search"><i class="material-icons">search</i></button>
                                            </span>
                                        </div>
                                        <input type="hidden" name="route" value="product/search" />
                                    </form>
                                </div>
                            </div>
                        </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Bích Tuyền đã gửi email cho bạn</a>
                  <a class="dropdown-item" href="#">Sách A sắp hết</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="<?php echo $level.pages_path_AD."template/user.php"?>">Thông Tin Các Nhân</a>
                  <div class="dropdown-divider"></div>
                  <a href="<?php echo $level.pages_path_LG."post/logout.php"?>" class="dropdown-item">Đăng Xuất</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->