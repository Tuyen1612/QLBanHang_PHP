
<?php 
		include_once $level.'Database/author.php';
		
		$result2 = findAuthorBestSell(5,$conn);
?>
									<div class="tg-widget tg-widgetblogers">
										<div class="tg-widgettitle">
											<h3>Những Tác Giả Hàng Đầu</h3>
										</div>
										<div class="tg-widgetcontent">
											<ul>
<!-------------------------FOREACH CAC TAC GIA HANG DAU------------------------------->
												<?php foreach($result2 as $values2)  {  ?>
													<li>
														<div class="tg-author">
															<figure><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values2["MaTacGia"] ?>"><img src="<?php echo $level . img_path . 'author/' . $values2["HinhAnh"] ?>" alt="image description"></a></figure>
															<div class="tg-authorcontent">
																<h2><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values2["MaTacGia"] ?>"><?php echo $values2["TenTacGia"] ?></a></h2>
																<span><?php echo $values2["SoSachXuatBan"] ?> sách xuất bản</span>
															</div>
														</div>
													</li>
												<?php
												}  ?>

											</ul>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					News Grid End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
