<?php
$dsCollection = array(
	array(
		"duLieuClass"=>"tg-drama",
		"luotXem"=>"6,179,213",
		"tieuDe"=>"Kịch",
	),
	array(
		"duLieuClass"=>"tg-horror",
		"luotXem"=>"3,121,242",
		"tieuDe"=>"Kinh Dị",
	),
	array(
		"duLieuClass"=>"tg-romance",
		"luotXem"=>"2,101,012",
		"tieuDe"=>"Lãng Mạn",
	),
	array(
		"duLieuClass"=>"tg-fashion",
		"luotXem"=>"1,158,245",
		"tieuDe"=>"Thời Trang",
	)
)
?>

<!--************************************
					Collection Count Start
			*************************************-->
			<section class="tg-parallax tg-bgcollectioncount tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo $level.img_path.'parallax/bgparallax-04.jpg'?>">
				<div class="tg-sectionspace tg-collectioncount tg-haslayout">
					<div class="container">
						<div class="row">
							<div id="tg-collectioncounters" class="tg-collectioncounters">
							<!--For -->
							<?php foreach($dsCollection as $collection) {?>
								<div class="tg-collectioncounter <?php echo $collection["duLieuClass"]?>">
									<div class="tg-collectioncountericon">
										<i class="icon-bubble"></i>
									</div>
									<div class="tg-titlepluscounter">
										<h2><?php echo $collection["tieuDe"]?></h2>
										<h3 data-from="0" data-to="6179213" data-speed="8000" data-refresh-interval="50"><?php echo $collection["luotXem"]?></h3>
									</div>
								</div>
							<?php }?>	
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Collection Count End
			*************************************-->