<?php 
    session_start();
    $level = "../../../";

    include_once $level."config.php";
    include_once $level."Database/reader.php";
    include_once $level."Database/random.php";

    //KIỂM TRA NHẤN NUT ĐĂNG KÝ
    if(isset($_POST["signUp"])){
        $id = random("DG");
        $hoTen = $_POST["hoTen"];
        $username = $_POST["username"];
        $pass = $_POST["password"];
        $ngaySinh = $_POST["ngaySinh"];
        $diaChi = $_POST["diaChi"];

        if(empty($hoTen) || empty($username) || empty($pass) || empty($ngaySinh) || empty($diaChi)){
            $_SESSION["message"] = '<div class="alert alert-danger" role="alert">
            <strong>Thất bại, Vui lòng không để trống thông tin</strong>
            </div>';
        }else{
            addReader($id,"avt_default.jpg",$hoTen,$ngaySinh,$diaChi,$username,$pass,$conn);
            $_SESSION["message"] = '<div class="alert alert-success" role="alert">
            <strong>Đăng Ký Thành Công</strong>
            </div>'; 
        }
    }
    $url = $level.pages_path_LG."login.php";
    header("location:".$url);

?>