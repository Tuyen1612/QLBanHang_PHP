<?php
	$lstAuthor = array(
		array(
			"hinhAnh" =>"img-01.jpg",
			"content" =>"Vũ",
			"content_sub" =>"Giám đốc bán lẻ trực tuyến"
		),
		array(
			"hinhAnh" =>"img-02.jpg",
			"content" =>"Tuyền",
			"content_sub" =>"Giám đốc nhà sách"
		),
		array(
			"hinhAnh" =>"img-03.jpg",
			"content" =>"Tài",
			"content_sub" =>"Hoạt động kinh doanh"
		),
		array(
			"hinhAnh" =>"img-04.jpg",
			"content" =>"Anh Vũ",
			"content_sub" =>"Thư ký giám đốc"
		),
		array(
			"hinhAnh" =>"img-05.jpg",
			"content" =>"Bích Tuyền",
			"content_sub" =>"Hoạt động kinh doanh"
		)
		,array(
			"hinhAnh" =>"img-04.jpg",
			"content" =>"Tấn Tài",
			"content_sub" =>"Thư ký giám đốc"
		)
	)
?>

<!--************************************
					Authors Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Những người thành lập Thư viện Sách</span>Gặp gỡ các lãnh đạo của chúng tôi</h2>
							</div>
						</div>
						<div id="tg-teamsslider" class="tg-authors tg-authorsslider tg-teamsmember owl-carousel">
							<?php foreach($lstAuthor as $author) {?>
							<div class="item tg-author tg-member">
								<figure><a href="javascript:void(0);"><img src="<?php echo $level.img_path.'team/'.$author["hinhAnh"]?>" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);"><?php echo $author["content"]?></a></h2>
									<span><?php echo $author["content_sub"]?></span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Authors End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->