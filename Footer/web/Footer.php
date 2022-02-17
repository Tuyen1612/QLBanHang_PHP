<?php 
		include_once $level.'Database/author.php';
		
		$result = findAuthorBestSell(3,$conn);
?>			
<!--************************************
		Footer Start
*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footerarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-clientservices">
								<li class="tg-devlivery">
									<span class="tg-clientserviceicon"><i class="icon-rocket"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Chuyển phát nhanh</h3>
										<p>Vận chuyển Quốc tế</p>
									</div>
								</li>
								<li class="tg-discount">
									<span class="tg-clientserviceicon"><i class="icon-tag"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Giá công khai</h3>
										<p>Chào giá rõ ràng</p>
									</div>
								</li>
								<li class="tg-quality">
									<span class="tg-clientserviceicon"><i class="icon-leaf"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Đánh giá chất lượng</h3>
										<p>Chất lượng xuất bản</p>
									</div>
								</li>
								<li class="tg-support">
									<span class="tg-clientserviceicon"><i class="icon-heart"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Hỗ trợ 24/7</h3>
										<p>Phục vụ mọi lúc</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="tg-threecolumns">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol">
									<strong class="tg-logo"><a href="javascript:void(0);"><img src="<?php echo $level.img_path.'flogo.png'?>" alt="image description"></a></strong>
									<ul class="tg-contactinfo">
										<li>
											<i class="icon-apartment"></i>
											<address>Cao Đẳng Kỹ Thuật Cao Thắng, Tp. HCM</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>
												<em>0800 12345 - 678 - 89</em>
												<em>+4 1234 - 4567 - 67</em>
											</span>
										</li>
										<li>
											<i class="icon-clock"></i>
											<span>Phục vụ cả tuần từ 9 giờ sáng đến 5 giờ chiều</span>
										</li>
										<li>
											<i class="icon-envelope"></i>
											<span>
												<em><a href="mailto:support@domain.com">support@domain.com</a></em>
												<em><a href="mailto:info@domain.com">info@domain.com</a></em>
											</span>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgetnavigation">
									<div class="tg-widgettitle">
										<h3>Thông tin trợ giúp và vận chuyển</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li><a href="javascript:void(0);">Điều khoản sử dụng</a></li>
											<li><a href="javascript:void(0);">Điều khoản bán hàng</a></li>
											<li><a href="javascript:void(0);">Lợi nhuận</a></li>
											<li><a href="javascript:void(0);">Riêng tư</a></li>
											<li><a href="javascript:void(0);">Chính sách cookies</a></li>
											<li><a href="javascript:void(0);">Thông tin liên hệ</a></li>
											<li><a href="javascript:void(0);">Các chi nhánh</a></li>
											<li><a href="javascript:void(0);">Tầm nhìn &amp; Mục đích</a></li>
										</ul>
										<ul>
											<li><a href="javascript:void(0);">Câu chuyện của chúng tôi</a></li>
											<li><a href="javascript:void(0);">Đội ngũ của chúng tôi</a></li>
											<li><a href="javascript:void(0);">Thắc mắc và giải đáp</a></li>
											<li><a href="javascript:void(0);">Chứng thực</a></li>
											<li><a href="javascript:void(0);">Gia nhập vào đội ngũ</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgettopsellingauthors">
									<div class="tg-widgettitle">
										<h3>Các tác giả bán chạy nhất</h3>
									</div>
									<?php foreach($result as $values)   {    ?>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<figure><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values["MaTacGia"] ?>"><img src="<?php echo $level.img_path.'author/'.$values["HinhAnh"]?>" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values["MaTacGia"] ?>"><?php echo $values["TenTacGia"]?></a></h4>
													<p><?php echo $values["SoSachXuatBan"]?> sách đã xuất bản</p>
												</div>
											</li>
											
										</ul>
									</div>
									<?php    }    ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-newsletter">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h4>Đăng ký ngay!</h4>
							<h5>Việc đọc rất quan trọng. Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn.</h5>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<form class="tg-formtheme tg-formnewsletter">
								<fieldset>
									<input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ Email">
									<button type="button"><i class="icon-envelope"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i class="icon-chevron-up"></i></a>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-paymenttype"><img src="<?php echo $level.img_path.'paymenticon.png'?>" alt="image description"></span>
							<span class="tg-copyright">2021 Tất cả các quyền được bảo lưu bởi &copy; TT-BT-AV</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->