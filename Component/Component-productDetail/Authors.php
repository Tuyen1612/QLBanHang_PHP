<?php 
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		
		include_once $level.'Database/author.php';
		
		$result3 = findAuthorBestSell($conn);
?>

<div class="tg-widget tg-widgetblogers">
    <div class="tg-widgettitle">
        <h3>Những Tác Giả Hàng Đầu</h3>
    </div>
    <div class="tg-widgetcontent">
        <ul>
            <?php foreach($result3 as $values3) { ?>
            <li>
                <div class="tg-author">
                    <figure><a
                            href="<?php echo $level.pages_path_WEB.'authordetail.php?id='.$values2["MaTacGia"] ?>"><img
                                src="<?php echo $level . img_path . 'author/' . $values3["HinhAnh"] ?>"
                                alt="image description"></a></figure>
                    <div class="tg-authorcontent">
                        <h2><a href="javascript:void(0);"><?php echo $values3["TenTacGia"] ?></a>
                        </h2>
                        <span><?php echo $values3["SoSachXuatBan"] ?></span>
                    </div>
                </div>
            </li>
            <?php
											
										}   ?>

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