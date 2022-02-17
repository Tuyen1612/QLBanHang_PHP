<?php 
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		
		$count=0;
		include_once $level.'Database/book.php';	
		
		$result = findDetailBookByID($id,$conn)->fetch();
		
?>
<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
					News Grid Start
			*************************************-->
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-twocolumns" class="tg-twocolumns">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                        <div id="tg-content" class="tg-content">
                            <div class="tg-featurebook alert" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="tg-featureditm">

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 hidden-sm hidden-xs">
                                            <figure><img src="<?php echo $level . img_path . 'img-04.png' ?>"
                                                    alt="image description"></figure>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                            <div class="tg-featureditmcontent">
                                                <div class="tg-themetagbox"><span class="tg-themetag">Đặc Sắc</span>
                                                </div>
                                                <div class="tg-booktitle">
                                                    <h3><a href="javascript:void(0);">Kiến trúc tương lai</a></h3>
                                                </div>
                                                <span class="tg-bookwriter">Tác Giả: <a href="javascript:void(0);">Trịnh
                                                        Phần</a></span>
                                                <span class="tg-stars"><span></span></span>
                                                <div class="tg-priceandbtn">
                                                    <span class="tg-bookprice">
                                                        <ins>450.000 VNĐ</ins>
                                                        <del>600.000 VNĐ</del>
                                                    </span>
                                                    <a class="tg-btn tg-btnstyletwo tg-active"
                                                        href="javascript:void(0);">
                                                        <i class="fa fa-shopping-basket"></i>
                                                        <em>Thêm Giỏ Hàng</em>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-productdetail">
                                <div class="row">
                                    <!--------------------------------------------FOREACH GIOI THIEU SAN PHAM-------------------------------------------------->
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="tg-postbook">
                                            <form
                                                action="<?php echo $level.pages_path_WEB.'post/addCart.php?id='.$result["MaSach"]?>"
                                                method="POST">
                                                <figure class="tg-featureimg"><img
                                                        src="<?php echo $level . img_path .'books/'. $result["HinhAnhSach"] ?>"
                                                        alt="image description"></figure>
                                                <div class="tg-postbookcontent">

                                                    <span class="tg-bookprice">
                                                        <ins><?php echo number_format($result["GiaBan"]) . " VNĐ"?> </ins>
                                                        <del><?php echo number_format($result["GiaMacDinh"]) . " VNĐ"?></del>
                                                    </span>
                                                    <ul class="tg-delevrystock">
                                                        <li><i class="icon-rocket"></i><span>Giao hàng miễn phí</span>
                                                        </li>
                                                        <li><i class="icon-checkmark-circle"></i><span>Nhận trong 2 ngày
                                                            </span></li>
                                                        <li><i class="icon-store"></i><span>Trạng Thái:
                                                                <em><?php if($result["TrangThai"]==1){?>Còn
                                                                    Hàng<?php }else{ ?>Hết Hàng <?php } ?></em></span>
                                                        </li>
                                                    </ul>
                                                    <div class="tg-quantityholder">
                                                        <em class="minus">-</em>
                                                        <input type="text" class="result" value="1" id="quantity1"
                                                            name="quantity">
                                                        <em class="plus">+</em>
                                                    </div>
                                                    <button type="submit" name="addCart"
                                                        class="tg-btn tg-active tg-btn-lg" href="">Thêm Giỏ
                                                        Hàng</button>
                                                    <!-- <a class="tg-btnaddtowishlist" href="javascript:void(0);">
													<span>Yêu Thích</span>
												</a> -->

                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!--------------------------------------------FOREACH CHI TIET SAN PHAM-------------------------------------------------->
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                        <div class="tg-productcontent">
                                            <ul class="tg-bookscategories">
                                                <li><a
                                                        href="javascript:void(0);"><?php echo $result["TenTheLoai"] ?></a>
                                                </li>
                                            </ul>
                                            <div class="tg-themetagbox"><span class="tg-themetag">Khuyến Mãi</span>
                                            </div>
                                            <div class="tg-booktitle">
                                                <h3><?php echo $result["TenSach"] ?></h3>
                                            </div>
                                            <span class="tg-bookwriter">Tác Giả: <a
                                                    href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$result["MaTacGia"] ?>"><?php echo $result["TenTacGia"] ?></a></span>
                                            <span class="tg-stars"><span></span></span>
                                            <span class="tg-addreviews"><a href="javascript:void(0);">Thêm Đánh
                                                    Giá</a></span>
                                            <div class="tg-share">
                                                <span>Chia Sẻ:</span>
                                                <ul class="tg-socialicons">
                                                    <li class="tg-facebook"><a href="javascript:void(0);"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                    <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                    <li class="tg-linkedin"><a href="javascript:void(0);"><i
                                                                class="fa fa-linkedin"></i></a></li>
                                                    <li class="tg-googleplus"><a href="javascript:void(0);"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                    <li class="tg-rss"><a href="javascript:void(0);"><i
                                                                class="fa fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="tg-description">
                                                <!-- <p>Đây là cuốn sách từng được bình chọn là cuốn sách vĩ đại nhất mọi
                                                    thời đại, một trong những cuốn sách hay nên đọc.</p> -->
                                                <p><?php echo $result["MoTa"] ?></p>
                                            </div>
                                            <div class="tg-sectionhead">
                                                <h2>Chi Tiết Sản Phẩm</h2>
                                            </div>
                                            <ul class="tg-productinfo">
                                                <li><span>Dạng:</span><span><?php echo $result["Dang"] ?></span></li>
                                                <li><span>Số Trang:</span><span><?php echo $result["SoTrang"] ?>
                                                        Trang</span></li>
                                                <li><span>Kích
                                                        Thước:</span><span><?php echo $result["KichThuoc"] ?></span>
                                                </li>
                                                <li><span>Ngày Xuất Bản:</span><span><?php echo $result["ngayXB"] ?>
                                                        Tháng <?php echo $result["thangXB"] ?> Năm
                                                        <?php echo $result["namXB"] ?></span></li>
                                                <li><span>Nhà Xuất
                                                        Bản:</span><span><?php echo $result["TenNXB"] ?></span></li>
                                                <li><span>Ngôn Ngữ:</span><span><?php echo $result["NgonNgu"] ?></span>
                                                </li>
                                               
                                            <!-- <div class="tg-alsoavailable">
                                                <figure>
                                                    <img src="<?php echo $level . img_path . 'img-02.jpg' ?>"
                                                        alt="image description">
                                                    <figcaption>
                                                        <h3>Có Sẵn:</h3>
                                                        <ul>
                                                            <li><span><?php echo $result["Dang"] ?> 369.000
                                                                    VNĐ</span></li>
                                                            <li><span><?php echo $result["Dang"] ?> 270.000
                                                                    VNĐ</span></li>
                                                            <li><span><?php echo $result["Dang"] ?> 500.000
                                                                    VNĐ</span></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!--------------------------------------------FOREACH THONG TIN TAC GIA-------------------------------------------------->
                                    <div class="tg-aboutauthor">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tg-sectionhead">
                                                <h2>Thông tin tác giả</h2>
                                            </div>
                                            <div class="tg-authorbox">
                                                <figure class="tg-authorimg">
                                                    <img src="<?php echo $level . img_path . 'author/'. $result["HinhAnhTacGia"] ?>"
                                                        alt="image description">
                                                </figure>
                                                <div class="tg-authorinfo">
                                                    <div class="tg-authorhead">
                                                        <div class="tg-leftarea">
                                                            <div class="tg-authorname">
                                                                <h2><?php echo $result["TenTacGia"] ?></h2>
                                                                <span>Ngày sinh:
                                                                    <?php echo $result["day(NgaySinh)"]?>/<?php echo $result["month(NgaySinh)"]?>/<?php echo $result["year(NgaySinh)"]?></span>
                                                                </br>
                                                            </div>
                                                        </div>
                                                        <div class="tg-rightarea">
                                                            <ul class="tg-socialicons">
                                                                <li class="tg-facebook"><a href="javascript:void(0);"><i
                                                                            class="fa fa-facebook"></i></a></li>
                                                                <li class="tg-twitter"><a href="javascript:void(0);"><i
                                                                            class="fa fa-twitter"></i></a></li>
                                                                <li class="tg-linkedin"><a href="javascript:void(0);"><i
                                                                            class="fa fa-linkedin"></i></a></li>
                                                                <li class="tg-googleplus"><a
                                                                        href="javascript:void(0);"><i
                                                                            class="fa fa-google-plus"></i></a></li>
                                                                <li class="tg-rss"><a href="javascript:void(0);"><i
                                                                            class="fa fa-rss"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tg-description">
                                                        <p><?php echo $result["ThongTin"] ?> </p>
                                                    </div>
                                                    <a class="tg-btn tg-active" href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$result["MaTacGia"] ?>">Xem Tất
                                                        Cả</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--End-------------------------------------->

                         