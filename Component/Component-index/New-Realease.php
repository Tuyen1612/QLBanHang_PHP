
<?php 
		$count=0;
		include_once $level.'Database/book.php';	
		$result = findBookByStatus(1,$conn);
?>

<!--************************************
					New Release Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-newrelease">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="tg-sectionhead">
									<h2><span>Trải Nghiệm Những Điều Mới</span>Sách Mới Phát Hàng</h2>
								</div>
								<div class="tg-description">
									<p>Sách là kho tàng tri thức khổng lồ của nhân loại được lưu truyền qua hàng ngàn năm. Đọc sách là cách tốt nhất để ta tiếp thu văn hóa trên thế giới, làm giàu thêm vốn hiểu biết của mình. Ngoài việc đọc sách chuyên môn để củng cố kiến thức, chúng ta cũng nên đọc những quyển sách về các lĩnh vực khác trong cuộc sống để hiểu những gì đang diễn ra xung quanh mình, hoàn thiện bản thân, phát triển tâm hồn để hướng tới những giá trị tốt đẹp.</p>
								</div>
								<div class="tg-btns">
									<a class="tg-btn tg-active" href="<?php echo $level.pages_path_WEB.'products.php' ?>">Xem Tất Cả</a>
									<a class="tg-btn" href="javascript:void(0);">Đọc Thêm</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-newreleasebooks">
									<?php while ($row = $result->fetch()) { ?>
								<div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
									<div class="tg-postbook">
										<figure class="tg-featureimg">
											<div class="tg-bookimg">
											<a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$row["MaSach"] ?>"><div class="tg-frontcover"><img src="<?php echo $level . img_path . 'books/' . $row["HinhAnh"] ?>" alt="image description"></div></a>
												<div class="tg-backcover"><img src="<?php echo $level . img_path . 'books/' . $row["HinhAnh"] ?>" alt="image description"></div>
											</div>
											<a class="tg-btnaddtowishlist" href="javascript:void(0);">
												<i class="icon-heart"></i>
												<span>Yêu Thích</span>
											</a>
										</figure>
										<div class="tg-postbookcontent">
											<ul class="tg-bookscategories">
												<li><a href="javascript:void(0);"><?php echo $row["TenTheLoai"]?></a></li>
											</ul>
											<div class="tg-booktitle">
												<h3><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$row["MaSach"] ?>"><?php echo $row["TenSach"] ?></a></h3>
											</div>
											<span class="tg-bookwriter">Tác Giả: <a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$row["MaTacGia"] ?>"><?php echo $row["TenTacGia"] ?></a></span>
											<span class="tg-stars"><span></span></span>
										</div>
									</div>
								</div>
							<?php
								$count++;
								if ($count >= 3)
									break;
							} ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					New Release End
			*************************************-->