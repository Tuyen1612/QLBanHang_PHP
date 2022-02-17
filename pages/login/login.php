<?php
			session_start();

            $level = "../../";
            include_once $level."config.php";
            if(isset($_SESSION["account"])){
                if($_SESSION["account"]["role"]=="ADMIN"){
                    $url =  $level.pages_path_AD."home.php";
                    header("location:".$url);
                    exit();
                }else {
                    $url =  $level."index.php";
                    header("location:".$url);
                    exit();
                }
            }

            if(isset($_SESSION["message"])){
                echo $_SESSION["message"];
                unset($_SESSION["message"]);
            }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/login/css/style_login.css" rel="stylesheet" type="text/css" media="all" />
    <title>Demo</title>
</head>

<body>
    <h2>Thông Tin Đăng Nhập</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="<?php echo $level.pages_path_LG."post/signup.php"; ?>" method = "POST">
                <h1>Tạo Tài Khoản</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a> <a href="#" class="social"><i
                            class="fab fa-google-plus-g"></i></a> <a href="#" class="social"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Hoặc sử dụng email để đăng ký</span>
                <input type="text" name ="hoTen" placeholder="Họ Tên" />
                <input type="text" name = "username" placeholder="Username" />
                <input type="password" name = "password" placeholder="Mật Khẩu" />
                <input type="date" name = "ngaySinh" value="<?php echo date('Y-m-d'); ?>">
                <input type="text" name = "diaChi" placeholder="Địa chỉ" />
                <input class="login" type="submit" name="signUp" value="Đăng Ký" />
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="<?php echo $level.pages_path_LG."post/signin.php"; ?>" method="POST">
                <h1>Đăng Nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a> <a href="#" class="social"><i
                            class="fab fa-google-plus-g"></i></a> <a href="#" class="social"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Hoặc sử dụng tài khoản</span>
                <input type="text" placeholder="Email" name="user" />
                <input type="password" placeholder="Mật khẩu" name="pass" />
                <a href="#">Quên Mật Khẩu?</a>
                <input class="login" type="submit" name="logIn" value="Đăng Nhập" />
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">

                <div class="overlay-panel overlay-left">
                    <h1>Xin Chào Đã Trở Lại</h1>
                    <p>Để có thể kết nối với chúng tôi hãy đăng nhặp thông tin của bạn</p>
                    <button class="ghost" id="signIn">Đăng Ký</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Xin Chào !</h1>
                    <p>Hãy đăng ký để kết nối với chúng tôi</p>
                    <button class="ghost" id="signUp">Đăng Ký</button>
                </div>

            </div>
        </div>
    </div>

    <!-- <footer>
		<p>
			Created with <i class="fa fa-heart"></i> by <a target="_blank"
				href="https://florin-pop.com">Florin Pop</a> - Read how I created
			this and how you can join the challenge <a target="_blank"
				href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
		</p>
	</footer> -->

    <script src="../../assets/login/js/js.js" type="text/javascript"></script>
</body>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 2000);
</script>
</html>