<html class="no-js" lang="">
	<?php
		session_start();

		$level ="../../";
		
		if(!isset($_SESSION["account"])){
			$url = $level.'index.php';
			$_SESSION["message"]  = '<div class="alert alert-danger" role="alert">
			<strong>Vui lòng đăng nhập</strong>
				</div>'; 
			header("location:".$url);
			exit();
		}
		if(isset($_SESSION["message"])){
			echo $_SESSION["message"];
			unset($_SESSION["message"]);
		}

		$admin = false;
		//Error
		$isError=false;
		//Profile
		$isProfile = false;
		//Product Detail
		$isProductDetail=false;
		//Bill Order
		$isBill = false;

		//Change Pasword
		$isChangePassword = false;
		//News List
		$isNewsList=false;

		//News Details
		$isNewsDetail=false;

		//Contact Us
		$isContactUs=false;

		//Author Detail
		$isAuthorDetail=false;

		//Index
		$isIndex=false;

		//Author
		$isAuthor=false;

		//Product
		$isProduct=false;

		//News Gird
		$isNewsGrid=false;

		//About Us
		$isAboutUs=false;
		
        //Cart
        $isCart = true;
		
		include_once $level.'layout.php';
	?>
</html>
