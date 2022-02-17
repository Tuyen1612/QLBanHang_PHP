<?php 
		include_once $level.'Database/book.php';	
		$count=0;
		$result = findBookHotSell($conn);

		if(isset($_GET["yeuThich"])){
			echo "Hahaa";
		}
?>

			<!--************************************
					Best Selling Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Nhiều người lựa chọn</span>Sách Bán Chạy</h2>
								<a class="tg-btn" href="<?php echo $level.pages_path_WEB.'products.php' ?>">Xem Tất Cả</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-bestsellingbooksslider" class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel">
							<?php foreach($result as $values)    {   ?>
						<div class="item">
							<div class="tg-postbook">
								<figure class="tg-featureimg">
									<div class="tg-bookimg">
									<a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values["MaSach"] ?>"><div class="tg-frontcover"><img src="<?php echo $level . img_path . 'books/' . $values["HinhAnh"] ?>" alt="image description"></div></a>
										<div class="tg-backcover"><img src="<?php echo $level . img_path . 'books/' . $values["HinhAnh"] ?>" alt="image description"></div>
									</div>
									<a class="tg-btnaddtowishlist" name = "yeuThich" href="javascript:void(0);">
										<i class="icon-heart"></i>
										<span>Yêu Thích</span>
									</a>
								</figure>
								<div class="tg-postbookcontent">
									<ul class="tg-bookscategories">
										<li><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values["MaTacGia"] ?>"><?php echo $values["TenTacGia"] ?></a></li>
									</ul>
									<div class="tg-themetagbox"><span class="tg-themetag">Khuyến Mãi</span></div>
									<div class="tg-booktitle">
										<h3><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values["MaSach"] ?>"><?php echo $values["TenSach"] ?></a></h3>
									</div>
									<span class="tg-bookwriter">Tác Giả: <a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values["MaTacGia"] ?>"><?php echo $values["TenTacGia"] ?></a></span>
									<span class="tg-stars"><span></span></span>
									<span class="tg-bookprice">
										<ins><?php echo number_format($values["GiaBan"]) . " VNĐ" ?></ins>
										<del><?php echo number_format($values["GiaMacDinh"]) . " VNĐ" ?></del>
									</span>
									<a class="tg-btn tg-btnstyletwo" href="<?php echo $level.pages_path_WEB.'post/addCart.php?id='.$values["MaSach"] ?>">
										<i class="fa fa-shopping-basket"></i>
										<em> (+) Giỏ Hàng</em>
									</a>
								</div>
							</div>
						</div>
					<?php
						
					} ?>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Best Selling End
			*************************************-->