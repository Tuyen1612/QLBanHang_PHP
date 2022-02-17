<?php 
		$lstTestimonials = array(
			array(
				"hinhAnh" =>"imag-02.jpg",
				"quanTriVien" =>"Đây là nhà xuất bản sách nổi tiếng cho thiếu nhi thuộc trực thuộc Trung ương Đoàn TNCS Hồ Chí Minh. Các nhà văn trẻ có thể gửi tác phẩm của mình cho nhà xuất bản Kim Đồng.
				 Nhà xuất bản Kim Đồng chuyên in ấn, xuất bản sách dành cho thiếu nhi và các bậc phụ huynh trong cả nước. Ngoài ra nhà xuất bản còn có nhiều sách để quảng bá và giới thiệu văn hóa Việt Nam ra thế giới.",
				"nameTesti" =>"Nhà xuất bản Kim Đồng",
				"nguoiQL" =>"Người quản lý @ NXBKD"
			),
			array(
				"hinhAnh" =>"imag-02.jpg",
				"quanTriVien" =>"Nhà xuất bản trẻ xuất bản sách và văn hóa phẩm các loại, phục vụ chủ yếu là các đối tượng trẻ như thanh niên, thiếu nhi, tổ chức Đoàn các cấp của thành phố, phục vụ bạn đọc trong và ngoài nước.
				 Nhà xuất bản có nhận xuất bản nhiều thể loại sách như: tài liệu chính trị, kiến thức phổ thông, văn hóa – xã hội, nghệ thuật, văn học, từ điển,...",
				"nameTesti" =>"Nhà xuất bản Trẻ",
				"nguoiQL" =>"Người quản lý @ NXBT"
			),
			array(
				"hinhAnh" =>"imag-02.jpg",
				"quanTriVien" =>"Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh được thành lập từ năm 1977. Đúng như tên gọi của nhà xuất bản là cơ quan hội tụ về tư tưởng, văn hóa, chính trị của Đảng bộ và nhân dân thành phố.
				 Nhà xuất bản Tổng hợp thành phố Hồ chí Minh xuất bản hàng ngàn tựa sách gồm nhiều thể loại .",
				"nameTesti" =>"Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh",
				"nguoiQL" =>"Người quản lý @ NXBTHHCM"
			)
		)

	?>

<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo $level.img_path.'parallax/bgparallax-05.jpg'?>">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
								<div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
								<?php foreach($lstTestimonials as $testimonials) {?>
									<div class="item tg-testimonial">
										<figure><img src="<?php echo $level.img_path.'author/'.$testimonials["hinhAnh"]?>" alt="image description"></figure>
										<blockquote><q><?php echo $testimonials["quanTriVien"]?></q></blockquote>
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