<?php 
	$lstSuccess = array(
		array(
			"hinhAnh" =>"img-01.jpg",
			"sectionHead" =>"<span>June 27, 2017</span>First Step Toward Success",
			"chuThich" =>"Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.",
		),
		array(
			"hinhAnh" =>"img-01.jpg",
			"sectionHead" =>"<span>June 27, 2017</span>First Step Toward Success",
			"chuThich" =>"Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.",
		),
		array(
			"hinhAnh" =>"img-01.jpg",
			"sectionHead" =>"<span>June 27, 2017</span>First Step Toward Success",
			"chuThich" =>"Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.",
		)
	)
?>
<!--************************************
					Success Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-successstory">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead">
									<h2><span>Khoảnh khắc tự hào của chúng tôi</span>Hành trình thành công</h2>
								</div>
								<div id="tg-successslider" class="tg-successslider tg-success owl-carousel">
								<?php foreach($lstSuccess as $success) {?>	
								<div class="item">
										<figure>
											<img src="<?php echo $level.img_path.'img-01.jpg'?>" alt="image description">
										</figure>
										<div class="tg-successcontent">
											<div class="tg-sectionhead">
												<h2><span>June 27, 2017</span>Bước đầu hướng tới thành công</h2>
											</div>
											<div class="tg-description">
												<p>Đường đến thành công được so sánh giống với hình ảnh của bậc thang. Cách duy nhất để chạm đến đỉnh là phải bước từng bước, từ bậc thấp nhất. Đó chính là lý do bạn nên làm những việc nhỏ ngày hôm nay bằng một thái độ nghiêm túc và tận lực. Thành công lớn luôn bắt đầu từ những việc nhỏ.</p>
											</div>
										</div>
									</div>
									<?php }?>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Success End
			*************************************-->