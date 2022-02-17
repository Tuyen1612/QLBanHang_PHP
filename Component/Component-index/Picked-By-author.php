<?php 
				$count=0;	
				include_once $level.'Database/detailbook.php';	
				$result = findBookByStatus(1,$conn);
?>
	
	<!--************************************
					Picked By Author Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Những Cuốn Sách Hay</span>Do Tác Giả Chọn</h2>
								<a class="tg-btn" href="<?php echo $level.pages_path_WEB.'products.php'?>">Xem Tất Cả</a>
							</div>
						</div>
						<div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
						<?php while ($row = $result->fetch()) { ?>
					<div class="item">
						<div class="tg-postbook">
							<figure class="tg-featureimg">
								<div class="tg-bookimg">
									<div class="tg-frontcover"><img src="<?php echo $level . img_path . 'books/' . $row["HinhAnh"] ?>" alt="image description"></div>
								</div>
								<div class="tg-hovercontent">
									<div class="tg-description">
										<p><?php echo substr($row["MoTa"], 0, 107)  ?>...<a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$row["MaSach"] ?>">Xem thêm</a></p>
									</div>
									<strong class="tg-bookpage"><?php echo "Số Trang: " . $row["SoTrang"] ?></strong>
									<strong class="tg-bookcategory"><?php echo $row["TenTheLoai"] ?></strong>
									<strong class="tg-bookprice"><?php echo number_format($row["GiaBan"]) . " VNĐ" ?></strong>
									<div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
								</div>
							</figure>
							<div class="tg-postbookcontent">
								<div class="tg-booktitle">
									<h3><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$row["MaSach"] ?>"><?php echo $row["TenSach"] ?></a></h3>
								</div>
								<span class="tg-bookwriter">Tác Giả: <a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$row["MaTacGia"] ?>"><?php echo $row["TenTacGia"] ?></a></span>
								<a class="tg-btn tg-btnstyletwo" href="<?php echo $level.pages_path_WEB.'post/addCart.php?id='.$row["MaSach"] ?>">
									<i class="fa fa-shopping-basket"></i>
									<em>Thêm Giỏ Hàng</em>
								</a>
							</div>
						</div>
					</div>
				<?php
					$count++;
					if ($count >= 6)
						break;
				} ?>

						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Picked By Author End
			*************************************-->