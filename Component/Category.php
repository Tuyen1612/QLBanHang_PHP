<?php 
	
		include_once $level.'Database/category.php';
		$result = findAllCategoryByQuantity(10,$conn);
		
?>
<div class="tg-widget tg-catagories">
										<div class="tg-widgettitle">
											<h3>Thể Loại</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
<!-------------------------FOREACH CAC THE LOAI------------------------------->
												<?php foreach($result as $values)    {   ?>
													<li><a href="javascript:void(0);"><span><?php echo $values["TenTheLoai"] ?></span><em><?php echo $values["SoSach"] ?></em></a></li>
												<?php
												}    ?>
												<li><a href="javascript:void(0);"><span>Xem tất cả</span></a></li>
											</ul>
										</div>
									</div>