<?php 
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$count=0;
		include_once $level.'Database/book.php';	
		
		$result1 = findBookHotSell($conn);
		
?>
<div class="tg-widget tg-widgettrending">
										<div class="tg-widgettitle">
											<h3>Sản Phẩm Thịnh Hành</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
<!-------------------------FOREACH CAC SAN PHAM THINH HANH------------------------------->
												<?php foreach($result1 as $values1)   {   ?>
													<li>
														<article class="tg-post">
															<figure><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values1["MaSach"]?>"><img src="<?php echo $level . img_path . 'books/' . $values1["HinhAnh"] ?>" alt="image description"></a></figure>
															<div class="tg-postcontent">
																<div class="tg-posttitle">
																	<h3><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$values1["MaSach"]?>"><?php echo $values1["TenSach"] ?></a></h3>
																</div>
																<span class="tg-bookwriter">By: <a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values1["MaTacGia"] ?>"><?php echo $values1["TenTacGia"] ?></a></span>
															</div>
														</article>
													</li>
												<?php
													$count++;
													if ($count >= 3)
														break;
												}$count=0; ?>
											</ul>
										</div>
									</div>