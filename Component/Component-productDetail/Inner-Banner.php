<?php 
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		include_once $level. 'Database/connection.php';
		include_once $level.'Database/detailBook.php';
		
		$result = findDetailBookByID($id,$conn);
?>	
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo $level.img_path.'parallax/bgparallax-07.jpg'?>">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1>Tất Cả Sản Phẩm</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">Trang Chủ</a></li>
								<li><a href="javascript:void(0);">Các Sản Phẩm</a></li>
								<?php foreach($result as $values)    {     ?>
								<li class="tg-active"><?php echo $values["TenSach"]  ?></li>
								<?php    }    ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->