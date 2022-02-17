<?php 
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$count=0;	
		include_once $level.'Database/book.php';
		include_once $level.'Database/author.php';	
		$result = findBookByIDAuthor($id,$conn);
		$result1 = findAuthorByID($id,$conn)->fetch();

?>
<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Author Detail Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<form
							method="POST">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-authordetail">
								<figure class="tg-authorimg">
									<img src="<?php echo $level.img_path.'author/'.$result1["HinhAnh"]?>" alt="image description">
								</figure>
								<div class="tg-authorcontentdetail">
									<div class="tg-sectionhead">
										<h2><span><?php echo $result1["SoSachXuatBan"]?> Sách đã xuất bản</span><?php echo $result1["TenTacGia"]?></h2>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
											<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
									<div class="tg-description">
									<p><?php echo $result1["ThongTin"]?></p>
										 <p><?php echo $result1["TenTacGia"]?> là một cây bút chuyên viết truyện ngắn và dịch truyện nổi đình đám ở Hà Nội. Với phông văn hoá tiếng Trung dày dặn, sự am hiểu sâu sắc nền văn hóa Trung hoa và được tiếp cận với đất nước Trung quốc trong một thời gian dài nên những tác phẩm của Trang Hạ mấy năm gần đây thường tạo nên "kỉ lục" về hiện tượng xuất bản.</p>
										<p>Các tác phẩm của <?php echo $result1["TenTacGia"]?> đã từng được đăng tải trên rất nhiều trang báo lớn như: Văn Nghệ Quân đội, Văn Nghệ Trẻ, tạp chí Sông Thương, tạp chí Tác phẩm Mới (Hội nhà văn), báo Thanh Niên, báo Tuổi Trẻ Cuối Tuần, báo Người Lao Động, báo Lao Động, báo Phụ Nữ Thủ Đô, báo Nông thôn Ngày Nay, báo Giáo dục & Thời Đại, báo Tiền Phong, báo Hoa Học Trò, báo Áo Trắng, báo Sài Gòn Tiếp Thị Nguyệt San, báo Người Đẹp, tạp chí Đẹp, báo Sinh Viên, báo Thế giới Mới, báo Thế giới Phụ Nữ,...</p>
										<p>Các tác phẩm của <?php echo $result1["TenTacGia"]?> luôn đề cao giá trị nhân cách của người phụ nữa và đề cập đến những số phận phụ nữ bất hạnh nên luôn được độc giả hết sức đón nhận. Dẫu vậy, cô vẫn nhận được một vài ý kiến trái chiều cho rằng các tác phẩm của chị không mang tính chất nghệ thuật văn học mà chỉ là một thứ văn học rẻ tiền, mang tính giải trí</p> 
									</div>
									<div class="tg-booksfromauthor">
										<div class="tg-sectionhead">
											<h2>Sách của <?php echo $result1["TenTacGia"]?></h2>
										</div>
										<div class="row">
										<?php foreach($result as $values)    {   ?>
										<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
											<div class="tg-postbook">
												<figure class="tg-featureimg">
													<div class="tg-bookimg">
													<a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values["MaSach"] ?>"><div class="tg-frontcover"><img src="<?php echo $level . img_path . 'books/' . $values["HinhAnh"] ?>" alt="image description"></div></a>
														<div class="tg-backcover"><img src="<?php echo $level . img_path . 'books/' . $values["HinhAnh"] ?>" alt="image description"></div>
													</div>
													<a class="tg-btnaddtowishlist" href="javascript:void(0);">
														<i class="icon-heart"></i>
														<span>Thêm vào yêu thích</span>
													</a>
												</figure>
												<div class="tg-postbookcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);"><?php echo $values["TenTheLoai"] ?></a></li>
													</ul>
													<div class="tg-themetagbox"><span class="tg-themetag">Giảm</span></div>
													<div class="tg-booktitle">
														<h3><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values["MaSach"] ?>"><?php echo $values["TenSach"] ?></a></h3>
													</div>
													 <span class="tg-bookwriter">Tác gỉa: <a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values["MaTacGia"] ?>"><?php echo $values["TenTacGia"] ?></a></span> 
													<span class="tg-stars"><span></span></span>
													<span class="tg-bookprice">
														<ins><?php echo number_format($values["GiaBan"]) . " VNĐ"?></ins></br>
														<del><?php echo number_format($values["GiaMacDinh"]) . " VNĐ"?></del>
													</span>
													<a class="tg-btn tg-btnstyletwo" href="<?php echo $level.pages_path_WEB.'post/addCart.php?id='.$values["MaSach"] ?>">
														<i class="fa fa-shopping-basket"></i>
														<em>Thêm vào giỏ hàng</em>
													</a>
												</div>
											</div>
										</div>
									<?php
									} 
									?>
								</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<!--************************************
					Author Detail End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->