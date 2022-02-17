<?php
		$count=0;
		include_once $level.'Database/author.php';	
		$result =  findAllAuthorByStatus(1,$conn);
?>
			<!--************************************
					Latest News Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Hình Ảnh &amp; Thông Tin Các Tác Giả Mới </span>Tác Giả Nổi Bật</h2>
								<a class="tg-btn"href="<?php echo $level.pages_path_WEB.'authors.php' ?>">Xem Tất Cả</a>
							</div>
						</div>
						<div id="tg-postslider" class="tg-postslider tg-blogpost owl-carousel">
						<?php while ($row = $result->fetch()) { ?>
					<article class="item tg-post">
						<figure><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$row["MaTacGia"] ?>"><img src="<?php echo $level . img_path . 'author/' . $row["HinhAnh"] ?>" alt="image description"></a></figure>
						<div class="tg-postcontent">
							<!-- <ul class="tg-bookscategories">
								<li><a href="javascript:void(0);"></a></li>
							</ul> -->
							<div class="tg-themetagbox"><span class="tg-themetag">Nổi bật</span></div>
							 <div class="tg-posttitle">
								<h3><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$row["MaTacGia"] ?>"><?php echo $row["TenTacGia"] ?></a></h3>
							</div> 
							<span class="tg-bookwriter">Ngày sinh: <a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$row["MaTacGia"] ?>"><?php echo $row["day(NgaySinh)"] ?>/<?php echo $row["month(NgaySinh)"] ?>/<?php echo $row["year(NgaySinh)"] ?></a></span>
							<ul class="tg-postmetadata">

								<li><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$row["MaTacGia"] ?>"><i class="fa fa-eye"></i><i><?php echo substr($row["ThongTin"], 0, 150); ?>...</i></a></li>
							</ul>
						</div>
					</article>
				<?php
					$count++;
					if ($count >= 10)
						break;
				} ?>

						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Latest News End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->