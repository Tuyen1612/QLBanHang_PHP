<?php 
		#$id = isset($_GET['id']) ? $_GET['id'] : '';
		
		$count=0;
		include_once $level.'Database/book.php';	
	
		$result2 = findBookByStatus(1,$conn);
		
?>
                                    <!--SAN PHAM LIEN QUAN-------------------------------------->
                                    <div class="tg-relatedproducts">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tg-sectionhead">
                                                <h2><span>Sản Phẩm Liên Quan</span>Có Thể Bạn Sẽ Thích</h2>
                                                <a class="tg-btn" href="javascript:void(0);">Xem Tất Cả</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                            <div id="tg-relatedproductslider"
                                                class="tg-relatedproductslider tg-relatedbooks owl-carousel">
                                                <!--------------------------------------------FOREACH SAN PHAM LIEN QUAN-->
                                                <?php foreach($result2 as $values2)   {    ?>
                                                <div class="item">
                                                    <div class="tg-postbook">
                                                        <figure class="tg-featureimg">
                                                            <div class="tg-bookimg">
                                                                <a
                                                                    href="productdetail.php?id=<?php echo $values2["MaSach"]?>">
                                                                    <div class="tg-frontcover"><img
                                                                            src="<?php echo $level . img_path . 'books/' . $values2["HinhAnh"] ?>"
                                                                            alt="image description"></div>
                                                                </a>
                                                                <div class="tg-backcover"><img
                                                                        src="<?php echo $level . img_path . 'books/' . $values2["HinhAnh"] ?>"
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
                                                                        href="javascript:void(0);"><?php echo $values2["TenTheLoai"]?></a>
                                                                </li>
                                                            </ul>
                                                            <div class="tg-themetagbox"><span class="tg-themetag">Khuyến
                                                                    Mãi</span></div>
                                                            <div class="tg-booktitle">
                                                                <h3><a
                                                                        href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$result["MaSach"] ?>"><?php echo $values2["TenSach"] ?></a>
                                                                </h3>
                                                            </div>
                                                            <span class="tg-bookwriter">Tác Giả: <a
                                                                    href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values2["MaTacGia"] ?>"><?php echo $values2["TenTacGia"] ?></a></span>
                                                            <span class="tg-stars"><span></span></span>
                                                            <span class="tg-bookprice">
                                                                <ins><?php echo number_format($values2["GiaBan"]) . " VNĐ"?></ins></br>
                                                                <del><?php echo number_format($values2["GiaMacDinh"]) . " VNĐ"?></del>
                                                            </span>
                                                            <a class="tg-btn tg-btnstyletwo"
                                                                href="<?php echo $level.pages_path_WEB.'post/addCart.php?id='.$values2["MaSach"] ?>">
                                                                <i class="fa fa-shopping-basket"></i>
                                                                <em> (+) Giỏ Hàng</em>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
													$count++;
													if ($count >= 12)
														break;
												}$count=0; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End-------------------------------------->
                                </div>
                                <?php}?>
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
                           
                           