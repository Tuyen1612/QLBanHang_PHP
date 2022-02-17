<?php 
		$lstTestimonials = array(
			array(
				"hinhAnh" =>"imag-02.jpg",
				"blockquote" =>"Sách hay, cũng như bạn tốt, ít và được chọn lựa; chọn lựa càng nhiều, thưởng thức càng nhiều.",
				"nameTesti" =>"Anh Vũ",
				"nguoiQL" =>"Giám đốc  @ CIFP"
			),
			array(
				"hinhAnh" =>"imag-02.jpg",
				"blockquote" =>"Chúng ta hãy dịu dàng và tử tế nâng niu những phương tiện của tri thức. Chúng ta hãy dám đọc, nghĩ, nói và viết.",
				"nameTesti" =>"Bích Tuyền",
				"nguoiQL" =>"Giám đốc  @ CIFP"
			),
			array(
				"hinhAnh" =>"imag-02.jpg",
				"blockquote" =>"Chính từ sách mà những người khôn ngoan tìm được sự an ủi khỏi những rắc rối của cuộc đời.",
				"nameTesti" =>"Tấn Tài",
				"nguoiQL" =>"Giám đốc  @ CIFP"
			)
		)

	?>
<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
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