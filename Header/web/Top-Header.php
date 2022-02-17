<?php 
    include_once $level."Database/reader.php";

     if(!isset($_SESSION)) {
        session_start();
    }
    if(!empty($_SESSION["account"]["role"])){
        $url = $level.pages_path_AD."home.php";
        header("location: ".$url);
        exit();
    }
    if(ISSET($_SESSION["account"]['maDG'])){
        $save=findReaderByID($_SESSION["account"]['maDG'],$conn);

    }
?>
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
			Header Start
	*************************************-->
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="tg-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="tg-addnav">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="icon-envelope"></i>
                                    <em>Liên hệ</em>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="icon-question-circle"></i>
                                    <em>Trợ giúp</em>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown tg-themedropdown tg-currencydropdown">
                            <a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-earth"></i>
                                <span>Tiền tệ</span>
                            </a>
                            <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i>£</i>
                                        <span>Đồng bảng Anh</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i>$</i>
                                        <span>Đô la Mỹ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i>€</i>
                                        <span>Đồng euro</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tg-userlogin">
                            <?php
                                    if(isset($_SESSION["account"])){ ?>
                            <figure><a href="javascript:void(0);"><img
                                        src="<?php echo $level.img_path.'readers/'.$save[0]["HinhAnh"];?>"
                                        alt="image description"></a></figure>
                           
                            <div class="dropdown tg-themedropdown tg-currencydropdown">
                                <a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Xin Chào! <?php echo $_SESSION["account"]["tenDG"] ;?></span>
                                </a>
                                <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">
                                    <li>
                                        <a href="<?php echo $level.pages_path_WEB."profile.php"?>">
                                            <span>Thông Tin Cá Nhân</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $level.pages_path_LG.'post/logout.php'?>">
                                            <span>Đăng Xuất</span>
                                        </a>
                                    </li>

                                </ul>
                                <?php

                                }else{
                                    $url = $level.pages_path_LG."login.php"; 
                                    echo " <span> <a href='$url'>Đăng Nhập </a></span>"; }?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-middlecontainer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <strong class="tg-logo"><a href="<?php echo $level.'index.php'?>"><img
                                    src="<?php echo $level.img_path.'logo.png'?>" alt="company name here"></a></strong>
                        <div class="tg-wishlistandcart">
                            <div class="dropdown tg-themedropdown tg-wishlistdropdown">
                                <a href="javascript:void(0);" id="tg-wishlisst" class="tg-btnthemedropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="tg-themebadge">3</span>
                                    <i class="icon-heart"></i>
                                    <span>Yêu thích</span>
                                </a>
                                <div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-wishlisst">
                                    <div class="tg-description">
                                        <p>Chưa có sản phẩm được thêm vào danh sách yêu thích!</p>
                                    </div>
                                    <div class="tg-minicarproduct">
                                        <figure>
                                            <img src="<?php echo $level.img_path.'products/img-01.jpg'?>"
                                                alt="image description">

                                        </figure>
                                        <div class="tg-minicarproductdata">
                                            <h5><a href="javascript:void(0);"><?php echo "Đắc Nhân Tâm"?></a></h5>
                                            <h6><a href="javascript:void(0);"><?php echo "350.000 VNĐ"?></a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown tg-themedropdown tg-minicartdropdown">
                                <a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="tg-themebadge"><?php if(isset($_SESSION["book"])) echo sizeof($_SESSION["book"])?></span>
                                    <i class="icon-cart"></i>
                                    <span>Giỏ Hàng</span>
                                </a>
                                <div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
                                    <div class="tg-minicartbody">
                                        <?php
                                        if(isset($_SESSION["book"])){
                                            foreach($_SESSION["book"] as $book) { ?>
                                            <div class="tg-minicarproduct">
                                                <figure>
                                                    <img width = "50px" src="<?php echo $level.img_path.'books/'.$book["hinhAnh"]?>"
                                                        alt="image description"> 
                                                </figure>
                                                <div class="tg-minicarproductdata">
                                                    <h5><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$book["maSach"] ?>"><?php echo $book["tenSach"]?></a>
                                                    x<?php echo $book["soLuong"]?> 
                                                    </h5>
                                                    <h6><a href="javascript:void(0);"><?php echo $book["giaTien"]?></a>
                                                    </h6>
                                                </div>
                                            </div>
                                        <?php 
                                            }
                                        }else {
                                            echo '<div class="tg-description">
                                                <p>Chưa có sản phẩm được thêm vào giỏ hàng!</p>
                                                </div>';
                                                $_SESSION["tongTien"] = 0;
                                                $_SESSION["tongSL"] =0;
                                        } ?>
                                    </div>
                                    <div class="tg-minicartfoot">
                                        <a class="tg-btnemptycart" href="<?php echo $level.pages_path_WEB.'post/removeCart.php?id=0'?>">
                                            
                                            <?php if(isset($_SESSION["account"]) && isset($_SESSION["book"])) {
                                                echo '<i class="fa fa-trash-o"></i> <span>Xoá giỏ hàng</span>';
                                            }?>
                                                </a>
                                                <span class="tg-subtotal">Tổng Tiền: <em><?php echo $_SESSION["tongTien"];?> </em></span>
                                    <div class="tg-btns">
                                            <a class="tg-btn tg-active"
                                                href="<?php echo $level.pages_path_WEB.'cart.php'?>">Xem giỏ hàng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tg-searchbox ">
                            <div class="search-header-w">
                                <div id="sosearchpro" class=" ">
                                    <form class="tg-formtheme tg-formsearch " method="POST" style="padding-top:10px"
                                        action="<?php echo $level.pages_path_WEB."post/search.php"?>">
                                        <div id="search0" class="search input-group form-group">
                                            <div class="">
                                                <select class="col-md-3" name="category_id">
                                                    <option value="sach">Sách</option>
                                                    <option value="theLoai">Thể loại</option>
                                                    <option value="tacGia">Tác giả</option>
                                                </select>
                                            </div>
                                            <input class="col-md-9" type="text" value="" size="50"
                                                autocomplete="off" placeholder="Thông tin tìm kiếm..." name="keyword">
                                            <span class="input-group-btn">
                                                <button  type="submit" class="button-search btn btn-primary"style="background-color:#77b748;border: 1px solid #77b748;"
                                                    name="search"><i class="icon-magnifier" ></i></button>
                                            </span>
                                        </div>
                                        <input type="hidden" name="route" value="product/search" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tg-navigationarea">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Chuyển đổi điều hướng</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                <ul>
                                    <li class="menu-item-has-children menu-item-has-mega-menu">
                                        <a href="javascript:void(0);">Tát cả danh mục</a>
                                        <div class="mega-menu">
                                            <ul class="tg-themetabnav" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#artandphotography" aria-controls="artandphotography"
                                                        role="tab" data-toggle="tab">Nghệ thuật &amp; Nhiếp ảnh</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#biography" aria-controls="biography" role="tab"
                                                        data-toggle="tab">Tiểu sử</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#childrensbook" aria-controls="childrensbook" role="tab"
                                                        data-toggle="tab">Sách thiếu nhi</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#craftandhobbies" aria-controls="craftandhobbies"
                                                        role="tab" data-toggle="tab">Thủ công &amp; Sở thích</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#crimethriller" aria-controls="crimethriller" role="tab"
                                                        data-toggle="tab">Tội phạm &amp; Phim kinh dị</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#fantasyhorror" aria-controls="fantasyhorror" role="tab"
                                                        data-toggle="tab">Tưởng tượng &amp; Truyện kinh dị</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#fiction" aria-controls="fiction" role="tab"
                                                        data-toggle="tab">Viễn tưởng</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#fooddrink" aria-controls="fooddrink" role="tab"
                                                        data-toggle="tab">Ẩm thực &amp; Thức uống</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#graphicanimemanga" aria-controls="graphicanimemanga"
                                                        role="tab" data-toggle="tab">Đồ hoạ, Anime &amp;Truyện</a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#sciencefiction" aria-controls="sciencefiction" role="tab"
                                                        data-toggle="tab">Khoa học viễn tưởng</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content tg-themetabcontent">
                                                <div role="tabpanel" class="tab-pane active" id="artandphotography">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>Xem thêm<span>12,0657,53</span>Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="biography">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>More Than<span>12,0657,53</span>Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="childrensbook">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">View
                                                                All</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>Xem thêm<span>12,0657,53</span> Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="craftandhobbies">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>Xem thêm<span>12,0657,53</span>Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="crimethriller">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>Xem thêm<span>12,0657,53</span>Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="fantasyhorror">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</aGặp được một
                                                                            quyển sách hay nên mua liền dù đọc được hay
                                                                            không đọc được, vì sớm muộn gì cũng cần đến
                                                                            nó.>
                                                                </li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>More Than<span>12,0657,53</span>Books Collection
                                                                </h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="fiction">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>Xem thêm<span>12,0657,53</span>Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="fooddrink">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">View
                                                                All</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>Xem thêm<span>12,0657,53</span>Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="graphicanimemanga">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>Xem thêm<span>12,0657,53</span>Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="sciencefiction">
                                                    <ul>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Lịch sử</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Trăm
                                                                        năm nhìn lại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Thực
                                                                        tiễn lịch sử</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử thế giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Lịch
                                                                        sử về nhân loại</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đại
                                                                        Việt sử ký</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Kiến trúc</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nền
                                                                        móng cứng cáp</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Tương
                                                                        lai của kiến trúc</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng ký ức</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Dữ
                                                                        liệu kiến trúc sư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Xây
                                                                        dựng hoặc để lại cho chúng tôi</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                        <li>
                                                            <div class="tg-linkstitle">
                                                                <h2>Hình thức nghệ thuật</h2>
                                                            </div>
                                                            <ul>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Nghệ
                                                                        thuật sống của người Đan Mạch</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Hội
                                                                        hoạ toàn thư</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Đường
                                                                        bay nghệ thuật và Ký ức trần gian</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Từ
                                                                        Điển Mỹ Thuật Hội Họa Thế Giới</a></li>
                                                                <li><a
                                                                        href="<?php echo $level.pages_path_WEB.'products.php'?>">Sáng
                                                                        tạo nghệ thuật</a></li>
                                                            </ul>
                                                            <a class="tg-btnviewall"
                                                                href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                tất cả</a>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <figure><img src="<?php echo $level.img_path.'img-01.png'?>"
                                                                    alt="image description"></figure>
                                                            <div class="tg-textbox">
                                                                <h3>Xem thêm<span>12,0657,53</span>Bộ sưu tập sách</h3>
                                                                <div class="tg-description">
                                                                    <p>Gặp được một quyển sách hay nên mua liền dù đọc
                                                                        được hay không đọc được, vì sớm muộn gì cũng cần
                                                                        đến nó.</p>
                                                                </div>
                                                                <a class="tg-btn"
                                                                    href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem
                                                                    tất cả</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href=<?php echo $level.'index.php'?>>Trang chủ</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Tác giả</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo $level.pages_path_WEB.'authors.php'?>">Tác giả</a>
                                            </li>
                                            <li><a href="<?php echo $level.pages_path_WEB.'authordetail.php'?>">Thông
                                                    tin tác giả</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo $level.pages_path_WEB.'products.php'?>">Bán chạy nhất</a>
                                    </li>
                                    <li><a href="<?php echo $level.pages_path_WEB.'products.php'?>">Giảm giá hằng
                                            tuần</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Danh sách sản phẩm</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo $level.pages_path_WEB.'newslist.php'?>">Sản phẩm dạng
                                                    danh sách</a></li>
                                            <li><a href="<?php echo $level.pages_path_WEB.'newsgrid.php'?>">Sản phẩm dạng
                                                    lưới</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo $level.pages_path_WEB.'contactus.php'?>">Liên lạc</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
				Header End
		*************************************-->
       