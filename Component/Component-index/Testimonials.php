<?php 
		$lstTestimonials = array(
			array(
				"hinhAnh" =>"imag-02.jpg",
				"blockquote" =>"Đọc, đọc, đọc. Đọc tất cả mọi thứ – rác rưởi, kinh điển, tốt và xấu, và xem cách họ làm điều đó. Giống như một thợ mộc làm việc như một người học việc và học thạc sĩ. Đọc! Bạn sẽ tiếp thu nó. Nếu nó tốt, bạn sẽ tìm ra. Nếu không, hãy ném nó ra khỏi cửa sổ.",
				"nameTesti" =>"William Faulkner",
				"nguoiQL" =>"Tiểu thuyết gia lỗi lạc"
			),
			array(
				"hinhAnh" =>"imag-02.jpg",
				"blockquote" =>"Đọc, đọc, đọc. Đọc tất cả mọi thứ – rác rưởi, kinh điển, tốt và xấu, và xem cách họ làm điều đó. Giống như một thợ mộc làm việc như một người học việc và học thạc sĩ. Đọc! Bạn sẽ tiếp thu nó. Nếu nó tốt, bạn sẽ tìm ra. Nếu không, hãy ném nó ra khỏi cửa sổ.",
				"nameTesti" =>"William Faulkner",
				"nguoiQL" =>"Tiểu thuyết gia lỗi lạc"
			),
			array(
				"hinhAnh" =>"imag-02.jpg",
				"blockquote" =>"Đọc, đọc, đọc. Đọc tất cả mọi thứ – rác rưởi, kinh điển, tốt và xấu, và xem cách họ làm điều đó. Giống như một thợ mộc làm việc như một người học việc và học thạc sĩ. Đọc! Bạn sẽ tiếp thu nó. Nếu nó tốt, bạn sẽ tìm ra. Nếu không, hãy ném nó ra khỏi cửa sổ.",
				"nameTesti" =>"William Faulkner",
				"nguoiQL" =>"Tiểu thuyết gia lỗi lạc"
			)
		)

	?>

	
	<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo $level.img_path.'/parallax/bgparallax-05.jpg'?>">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
								<div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
									<?php foreach($lstTestimonials as $testimonials) {?>
									<div class="item tg-testimonial">
										<figure><img src="<?php echo $level.img_path.'author/'.$testimonials["hinhAnh"]?>" alt="image description"></figure>
										<blockquote><q><?php echo $testimonials["blockquote"]?></q></blockquote>
										<div class="tg-testimonialauthor">
											<h3><?php echo $testimonials["nameTesti"]?></h3>
											<span><?php echo $testimonials["nguoiQL"]?></span>
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
					Testimonials End
			*************************************-->