<?php 
	include_once $level.'Database/book.php';	
	
	$result = findAllBook($conn);
?>

<!--************************************
					Picked By Author Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Một số cuốn sách hay</span>Do các tác giả bình chọn</h2>
								<a class="tg-btn" href="javascript:void(0);">Xem tất cả</a>
							</div>
						</div>
						<div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
						<?php foreach($result as $values)       {    ?>
							<div class="item">
								<div class="tg-postbook">
									<figure class="tg-featureimg">
										<div class="tg-bookimg">
											<div class="tg-frontcover"><img src="<?php echo $level.img_path.'books/'.$values["HinhAnh"]?>" alt="image description"></div>
										</div>
										<div class="tg-hovercontent">
											<div class="tg-description">
											<p><?php echo substr($values["MoTa"], 0, 119)?>...<a href="productetail.php?id=<?php echo $values["MaSach"]?>">Xem thêm</a></p>
											</div>
											<strong class="tg-bookpage"><?php echo $values["SoTrang"]?></strong>
											<strong class="tg-bookcategory"><?php echo $values["TenTheLoai"]?></strong>
											<strong class="tg-bookprice"><?php echo number_format($values["GiaBan"]) . " VNĐ"?></strong>
											<div class="tg-ratingbox"><span class="tg-stars"><span></span></span></div>
										</div>
									</figure>
									<div class="tg-postbookcontent">
										<div class="tg-booktitle">
											<h3><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values["MaSach"] ?>"><?php echo $values["TenSach"]?></a></h3>
										</div>
										<span class="tg-bookwriter">Tác giả: <a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values["MaTacGia"] ?>"><?php echo $values["TenTacGia"]?></a></span>
										<a class="tg-btn tg-btnstyletwo" href="<?php echo $level.pages_path_WEB.'post/addCart.php?id='.$values["MaSach"] ?>"></a>
											<i class="fa fa-shopping-basket"></i>
											<em>Thêm vào giỏ hàng</em>
										</a>
									</div>
								</div>
							</div>
							<?php
								
						 	}    ?>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Picked By Author End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->