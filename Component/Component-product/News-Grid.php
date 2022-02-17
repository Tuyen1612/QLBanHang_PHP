<?php 
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$count=0;
		include_once $level.'Database/book.php';
		if(isset($_GET["has"]))
			$result1 = $_SESSION["items"];
		else
			$result1 = findBookByStatus(1,$conn);
	
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
                            <div class="tg-products">
                                <div class="tg-sectionhead">
                                    <h2><span>Nhiều người lựa chọn</span>Sách Bán Chạy Nhất</h2>
                                </div>
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
                                                        <h3><a href="javascript:void(0);">Thả mình với thiên nhiên</a>
                                                        </h3>
                                                    </div>
                                                    <span class="tg-bookwriter">Tác Giả: <a
                                                            href="javascript:void(0);">Lê Mỹ Linh</a></span>
                                                    <span class="tg-stars"><span></span></span>
                                                    <div class="tg-priceandbtn">
                                                        <span class="tg-bookprice">
                                                            <ins>300,000 VNĐ</ins>
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
                                <div class="tg-productgrid">
                                    <div class="tg-refinesearch">
                                        <span>Hiện thị 12 trên 20</span>
                                        <form class="tg-formtheme tg-formsortshoitems">
                                            <fieldset>
                                                <div class="form-group">
                                                    <label>Tìm Kiếm:</label>
                                                    <span class="tg-select">
                                                        <select>
                                                            <option>Tên</option>
                                                            <option>Thể Loại</option>
                                                            <option>16</option>
                                                        </select>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Hiện thị:</label>
                                                    <span class="tg-select">
                                                        <select>

                                                            <option>12</option>
                                                            <option>20</option>
                                                        </select>
                                                    </span>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <!-------------------------FOREACH HIEN THI SACH------------------------------->
                                    <?php 
										if(empty($result1)){
                                    ?>
											<div class="search"><img src="<?php echo $level . img_path . 'search.png'?>" alt="Không tìm thấy kết quả" style="float:left;width:100px;height:100px;"></div>
									<?php	
											echo 'Không Tìm Thấy Kết Quả';
										}else{
											foreach($result1 as $values1) { 
									?>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-postbook">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <a
                                                    href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values1["MaSach"] ?>">
                                                    <div class="tg-frontcover"><img
                                                            src="<?php echo $level . img_path . 'books/' . $values1["HinhAnh"] ?>"
                                                            alt="image description"></div>
                                                </a>
                                                <div class="tg-backcover"><img
                                                        src="<?php echo $level . img_path . 'books/' . $values1["HinhAnh"] ?>"
                                                        alt="image description"></div>
                                            </div>
                                            <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                <i class="icon-heart"></i>
                                                <span>Yêu Thích</span>
                                            </a>
                                        </figure>
                                        <div class="tg-postbookcontent">
                                            <ul class="tg-bookscategories">
                                                <li><a
                                                        href="javascript:void(0);"><?php echo $values1["TenTheLoai"] ?></a>
                                                </li>
                                            </ul>
                                            <div class="tg-themetagbox"><span class="tg-themetag">Khuyến Mãi</span>
                                            </div>
                                            <div class="tg-booktitle">
                                                <h3><a
                                                        href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values1["MaSach"] ?>"><?php echo $values1["TenSach"] ?></a>
                                                </h3>
                                            </div>
                                            <span class="tg-bookwriter">Tác Giả: <a
                                                    href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values1["MaTacGia"] ?>"><?php echo $values1["TenTacGia"] ?></a></span>
                                            <span class="tg-stars"><span></span></span>
                                            <span class="tg-bookprice">
                                                <ins><?php echo number_format($values1["GiaBan"]) . " VNĐ"?></ins>
                                                </br>
                                                <del><?php echo number_format($values1["GiaMacDinh"]) . " VNĐ"?></del>
                                            </span>
                                            <a class="tg-btn tg-btnstyletwo"
                                                href="<?php echo $level.pages_path_WEB.'post/addCart.php?id='.$values1["MaSach"] ?>">
                                                <i class="fa fa-shopping-basket"></i>
                                                <em>Thêm Giỏ Hàng</em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
													$count++;
													if ($count >= 12)
														break;
												}
											}$count=0; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
                    <aside id="tg-sidebar" class="tg-sidebar">
                        <div class="tg-widget tg-widgetsearch">
                            <form class="tg-formtheme tg-formsearch">
                                <div class="form-group">
                                    <button type="submit"><i class="icon-magnifier"></i></button>
                                    <input type="search" name="search" class="form-group"
                                        placeholder="Tìm kiếm từ khóa, tác giả...">
                                </div>
                            </form>
                        </div>