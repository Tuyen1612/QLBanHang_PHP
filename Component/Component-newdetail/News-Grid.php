<?php 
			$id = isset($_GET['id']) ? $_GET['id'] : '';
			$count=0;
			include_once $level.'Database/book.php';	
			include_once $level.'Database/author.php';
			include_once $level.'Database/category.php';
			include_once $level.'Database/comment.php';
			include_once $level.'Database/post.php';
			$result = findAllBook($conn);	
			$result1 =findAllCategory($conn);
			$result2 = findAllAuthor($conn);
			$result3 = findAllComment($conn);
			$result4 = findPostByID($id,$conn)->fetch();			
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
				<form
					method="POST">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<figure class="tg-newsdetailimg">
								<img src="<?php echo $level . img_path . 'blog/'.$result4["HinhBaiViet"] ?>" alt="image description" >
								<figcaption class="tg-author">
									<a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$result4["MaTacGia"] ?>"> <img src="<?php echo $level . img_path . 'author/'.$result4["HinhTacGia"] ?>" alt="image description">
									<div class="tg-authorinfo">
										<span class="tg-bookwriter"><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$result4["MaTacGia"] ?>"><?php echo $result4["TenTacGia"]?></a></span>
										<ul class="tg-postmetadata">
											<li><a href="javascript:void(0);"><i class="fa fa-comment-o"></i><i>21,415 Bình luận</i></a></li>
											<li><a href="javascript:void(0);"><i class="fa fa-eye"></i><i>24,565 Lượt xem</i></a></li>
										</ul>
									</div>
								</figcaption>
							</figure>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
							<div id="tg-content" class="tg-content">
								<div class="tg-newsdetail">
									<ul class="tg-bookscategories">
										<li><a href="javascript:void(0);"><?php echo $result4["TenTheLoai"]?></a></li>
									</ul>
									<div class="tg-themetagbox"><span class="tg-themetag">đặc sắc</span></div>
									<div class="tg-posttitle">
										<h3><a href="javascript:void(0);"><?php echo $result4["TenBaiViet"]?></a></h3>
									</div>
									<div class="tg-description">
										<p><?php echo $result4["NoiDung"]?></p>
										<blockquote>
											<q>“<?php echo substr($result4["NoiDung"], 0, 500); ?>”</q>
											<span class="tg-bookwriter">By: <a href="javascript:void(0);"><?php echo $result4["TenTacGia"]?></a></span>
										</blockquote>
										<p>Quanh bạn là những lời chê bai xuất phát từ định kiến, hãy vứt bỏ nó, làm ơn. Alex đã tự là một thông điệp đầy mạnh mẽ về điều này.</p>
										<p>Khi McCandless quyết tâm dấn bước vào Alaska, anh không đi tìm cái chết nhưng nếu phải chết anh cũng toại nguyện vì anh đã đạt được giấc mơ mà bấy lâu nay anh vẫn theo đuổi. Anh đã thể hiện điều đó trong tấm postcard gửi người bạn Wayne Westerberg của mình:</p>
									</div>
									<div class="tg-tagsshare">
										<div class="tg-tags">
											<span>Gắn thẻ:</span>
											<div class="tg-tagholder">
												<a class="tg-tag" href="javascript:void(0);">Cuộc sống</a>
												<a class="tg-tag" href="javascript:void(0);">Tự tin</a>
												<a class="tg-tag" href="javascript:void(0);">Tương lai</a>
												<a class="tg-tag" href="javascript:void(0);">Tri thức</a>
											</div>
										</div>
										<div class="tg-socialshare">
											<span>Chia Sẻ:</span>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
												<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-authorbox">
										<figure class="tg-authorimg">
											<img src="<?php echo $level . img_path . 'author/'.$result4["HinhTacGia"] ?>" alt="image description">
										</figure>
										<div class="tg-authorinfo">
											<div class="tg-authorhead">
												<div class="tg-leftarea">
													<div class="tg-authorname">
														<h2><?php echo $result4["TenTacGia"]?></h2>
														<span>Xuất bản từ: Ngày <?php echo $result4["day(NgayDang)"]?> tháng <?php echo $result4["month(NgayDang)"]?> năm <?php echo $result4["year(NgayDang)"]?></span>
													</div>
												</div>
												<div class="tg-rightarea">
													<ul class="tg-socialicons">
														<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
														<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
														<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
														<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
														<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="tg-description">
												<p>Các bạn nên tìm đọc thậm chí là xem phim để trải nghiệm sư mới mẻ hoang dại nơi vùng đất Alaska.</p>
											</div>
											<a class="tg-btn tg-active" href="javascript:void(0);">Xem Thêm</a>
										</div>
									</div>
									<div class="tg-nextprevpost">
										<div class="tg-prevpost">
											<a href="javascript:void(0);">
												<figure>
													<img src="<?php echo $level . img_path . 'img-04.jpg' ?>" alt="image description">
												</figure>
												<div class="tg-posttitle">
													<h3>Tiếng gọi nơi hoang dã</h3>
													<span>Bài trước</span>
												</div>
											</a>
										</div>
										<div class="tg-nextpost">
											<a href="javascript:void(0);">
												<figure>
													<img src="<?php echo $level . img_path . 'img-05.jpg' ?>" alt="image description">
												</figure>
												<div class="tg-posttitle">
													<h3>Không gia đình</h3>
													<span>Bài sau</span>
												</div>
											</a>
										</div>
									</div>
									<div class="tg-commentsarea">
										<div class="tg-sectionhead">
											<h2>03 Bình luận</h2>
										</div>
										<ul id="tg-comments" class="tg-comments">
											<li>
											<?php while ($row = $result3->fetch()) { ?>
													<div class="tg-authorbox">
														<figure class="tg-authorimg">
															<img src="<?php echo $level . img_path . 'author/' . $row["HinhAnh"] ?>" alt="image description">
														</figure>
														<div class="tg-authorinfo">
															<div class="tg-authorhead">
																<div class="tg-leftarea">
																	<div class="tg-authorname">
																		<h2><?php echo $row["TenDocGia"] ?></h2>
																		<span>Ngày <?php echo $result4["day(NgayDang)"]?> tháng <?php echo $result4["month(NgayDang)"]?> năm <?php echo $result4["year(NgayDang)"]?></span>
																	</div>
																</div>
																<div class="tg-rightarea">
																	<a class="tg-btnreply" href="javascript:void(0);">Trả lời<i class="fa fa-mail-reply"></i></a>
																</div>
															</div>
															<div class="tg-description">
																<p><?php echo $row["NoiDung"] ?></p>
															</div>
														</div>
														<div class="tg-bottomarrow"></div>
													</div>
													<?php
														$count++;
														if ($count >= 3)
															break;	
													}$count=0; ?>
											</li>


											<li class="tg-loadmore"><a class="tg-btn tg-active" href="javascript:void(0);">Xem tất cả bình luận</a></li>
										</ul>
									</div>
									<div class="tg-leaveyourcomment">
										<div class="tg-sectionhead">
											<h2>Để lại bình luận của bạn</h2>
										</div>
										<form class="tg-formtheme tg-formleavecomment">
											<fieldset>
												<div class="form-group">
													<input type="text" name="full name" class="form-control" placeholder="họ*">
												</div>
												<div class="form-group">
													<input type="text" name="last name" class="form-control" placeholder="Tên*">
												</div>
												<div class="form-group">
													<input type="email" name="email address" class="form-control" placeholder="Email*">
												</div>
												<div class="form-group">
													<input type="text" name="subject" class="form-control" placeholder="Chủ đề (tùy chọn)">
												</div>
												<div class="form-group">
													<textarea placeholder="Nội dung"></textarea>
												</div>
												<div class="form-group">
													<a class="tg-btn tg-active" href="javascript:void(0);">Gửi</a>
												</div>
											</fieldset>
										</form>
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
											<input type="search" name="search" class="form-group" placeholder="Tìm kiếm ">
										</div>
									</form>
								</div>
								<div class="tg-widget tg-catagories">
									<div class="tg-widgettitle">
										<h3>Thể loại</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<?php while ($row = $result1->fetch()) { ?>
												<li><a href="javascript:void(0);"><span><?php echo $row["TenTheLoai"] ?></span><em><?php echo $row["SoSach"] ?></em></a></li>
											<?php
												$count++;
												if ($count >= 10)
													break;	
											}$count=0; ?>
											<li><a href="javascript:void(0);"><span>Xem tất cả</span></a></li>
										</ul>
									</div>
								</div>
								<div class="tg-widget tg-widgettrending">
									<div class="tg-widgettitle">
										<h3>Bài Viết nổi bật</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<?php while ($row = $result->fetch()) { ?>
												<li>
													<article class="tg-post">
														<figure><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$row["MaSach"] ?>"><img src="<?php echo $level . img_path . 'products/' . $row["HinhAnh"] ?>" alt="image description"></a></figure>
														<div class="tg-postcontent">
															<div class="tg-posttitle">
																<h3><a href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$row["MaSach"] ?>"><?php echo $row["TenSach"] ?></a></h3>
															</div>
															<span class="tg-bookwriter">By: <a href="javascript:void(0);"><?php echo $row["TenTacGia"] ?></a></span>
														</div>
													</article>
												</li>
											<?php
												$count++;
												if ($count >= 4)
													break;													
											}$count=0; ?>

										</ul>
									</div>
								</div>
								<div class="tg-widget tg-widgetinstagram">
									<div class="tg-widgettitle">
										<h3>Instagram</h3>
									</div>
									<?php
									$lstInsta = array(

										array(
											"hinhAnh" => "img-01.jpg",
											"heart" => "50,134"
										),
										array(
											"hinhAnh" => "img-02.jpg",
											"heart" => "50,134"
										), array(
											"hinhAnh" => "img-03.jpg",
											"heart" => "50,134"
										), array(
											"hinhAnh" => "img-04.jpg",
											"heart" => "50,134"
										), array(
											"hinhAnh" => "img-05.jpg",
											"heart" => "50,134"
										), array(
											"hinhAnh" => "img-06.jpg",
											"heart" => "50,134"
										),
										array(
											"hinhAnh" => "img-07.jpg",
											"heart" => "50,134"
										),
										array(
											"hinhAnh" => "img-08.jpg",
											"heart" => "50,134"
										),
										array(
											"hinhAnh" => "img-09.jpg",
											"heart" => "50,134"
										)
									)
									?>
									<div class="tg-widgetcontent">
										<ul>
											<?php foreach ($lstInsta as $insta) { ?>
												<li>
													<figure>
														<img src="<?php echo $level . img_path . 'instagram/' . $insta["hinhAnh"] ?>" alt="image description">
														<figcaption><a href="javascript:void(0);"><i class="icon-heart"></i><em><?php echo $insta["heart"] ?></em></a></figcaption>
													</figure>
												</li>
											<?php } ?>

										</ul>
									</div>
								</div>
								<div class="tg-widget tg-widgetblogers">
									<div class="tg-widgettitle">
										<h3>Người viết sách hàng đầu</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<div class="tg-widgetcontent">
												<ul>
													<?php while ($row = $result2->fetch()) { ?>
														<li>
															<div class="tg-author">
																<figure><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$row["MaTacGia"] ?>"><img src="<?php echo $level . img_path . 'author/' . $row["HinhAnh"] ?>" alt="image description"></a></figure>
																<div class="tg-authorcontent">
																	<h2><a href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$row["MaTacGia"] ?>"><?php echo $row["TenTacGia"] ?></a></h2>
																	<span><?php echo $row["SoSachXuatBan"] ?></span>
																</div>
															</div>
														</li>
													<?php
														$count++;
														if ($count >= 4)
															break;	
													}$count=0; ?>

												</ul>
											</div>
									</div>
							</aside>
						</div>
					</div>
					</form>
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
