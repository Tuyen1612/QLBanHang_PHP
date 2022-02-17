		<?php 
			$id = isset($_GET['id']) ? $_GET['id'] : '';
			$count=0;
			
			include_once $level.'Database/book.php';
			$result1 = findBookByStatus(1,$conn);
		?>
		<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
	<!--************************************
					News Grid Start
			*************************************-->
	<div class="tg-sectionspace tg-haslayout">
		<div class="container">
			<div class="row">
				<div id="tg-twocolumns" class="tg-twocolumns">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
						<div id="tg-content" class="tg-content">
							<div class="tg-newsgrid">
								<div class="tg-sectionhead">
									<h2><span>Tin mới nhất &amp; Bài viết</span>Tin tức nổi bật</h2>
								</div>
								<div class="row">
<!-------------------------FOREACH TIN MOI NHAT, BAI VIET MOI NHAT------------------------------->
									<?php foreach($result1 as $values1)    {   ?>
										<div class="col-xs-6 col-sm-12 col-md-6 col-lg-4">
											<article class="tg-post">
												<figure><a href="productdetail.php?id=<?php echo $values1["MaSach"]?>"><img src="<?php echo $level . img_path . 'books/' . $values1["HinhAnh"] ?>" alt="image description"></a></figure>
												<div class="tg-postcontent">
													<ul class="tg-bookscategories">
														<li><a href="javascript:void(0);"><?php echo $values1["TenTheLoai"] ?></a></li>

													</ul>
													<div class="tg-themetagbox"><span class="tg-themetag">đặc sắc</span></div>
													<div class="tg-posttitle">
														<h3><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values1["MaSach"] ?>"><?php echo $values1["TenSach"] ?></a></h3>
													</div>
													<span class="tg-bookwriter">Tác giả: <a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values1["MaTacGia"] ?>"><?php echo $values1["TenTacGia"] ?></a></span>
													
												</div>
											</article>
										</div>
									<?php
										$count++;
										if ($count >= 15)
											break;
									}$count=0; ?>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
						<aside id="tg-sidebar" class="tg-sidebar">
							<div class="tg-widget tg-widgetsearch">
								<form class="tg-formtheme tg-formsearch">
									<div class="form-group">
										<button type="submit"><i class="icon-magnifier"></i></button>
										<input type="search" name="search" class="form-group" placeholder="Search Here">
									</div>
								</form>
							</div>
							
							