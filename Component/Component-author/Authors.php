<?php 
	include_once $level.'Database/author.php';	
	$result =findAllAuthor($conn);	

?>

<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Authors Start
			*************************************-->
			<div class="tg-authorsgrid">
				<div class="container">
					<div class="row">
						<div class="tg-authors">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead">
									<h2><span>Đội ngũ hùng hậu đằng sau Library Book</span>Những tác giả nổi tiếng nhất</h2>
								</div>
							</div>
							<?php foreach($result as $values)    {    ?>
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
								<div class="tg-author">
									<figure><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values["MaTacGia"] ?>"><img src="<?php echo $level.img_path.'author/'.$values["HinhAnh"]?>" alt="image description"></a></figure>
									<div class="tg-authorcontent">
										<h2><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values["MaTacGia"] ?>"><?php echo $values["TenTacGia"]?></a></h2>
										<span><?php echo $values["SoSachXuatBan"]?></span>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Authors End
			*************************************-->