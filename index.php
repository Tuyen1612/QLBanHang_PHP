<!doctype html>
<html class="no-js" lang="">
	<?php
		$level ="";
		session_start();
		if(isset($_SESSION["message"])){
			echo $_SESSION["message"];
			unset($_SESSION["message"]);
		}

		$admin = false;

		//Index
		$isIndex=true;
		
		$isBill = false;
		//Profile
		$isProfile = false;

		//Author
		$isAuthor=false;
		
		$isBill = false;
		//Author Detail
		$isAuthorDetail=false;

		//Product
		$isProduct=false;

		//Product Detail
		$isProductDetail=false;

		//Contact Us
		$isContactUs=false;
		$isDetailBill = false;
		//News Details
		$isNewsDetail=false;

		//News Gird
		$isNewsGrid=false;

		//News List
		$isNewsList=false;

		//Error
		$isError=false;

		//About Us
		$isAboutUs=false;

		//Cart
		$isCart = false;

		//Change password
		$isChangePassword=false;

		include_once $level.'layout.php';
	?>
</html>
