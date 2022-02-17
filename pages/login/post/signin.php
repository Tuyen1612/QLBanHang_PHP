<?php 
session_start();

$level = "../../../";
include_once $level."config.php";

if (isset($_POST['logIn'])) { //Kiểm tra đã nhấn nút đăng nhập hay chưa

    include_once $level."Database/manage.php";
    include_once $level."Database/reader.php";

    $urn = $_POST["user"];

    $pass = $_POST["pass"];

    $manage = findManageByUserNameAndPassword($urn,$pass,$conn)->fetch();
    $reader = findReaderByUserNameAndPassword($urn,$pass,$conn)->fetch();

    if ($urn == "" || $pass == "") {
        $_SESSION["message"] = '<div class="alert alert-danger" role="alert">
        <strong>Thất bại, Vui lòng không để trống thông tin</strong>
        </div>';
    }
    else if($urn == $manage['username'] && $pass == $manage['password']){

        $_SESSION["account"] = array(
                    "username"=>$manage['username'],
                    "email"=>$manage['email'],
                    "firstName"=>$manage['firstName'],
                    "lastName"=>$manage['lastName'],
                    "id"=>$manage['id'],
                    "role"=>$manage['role']);
            $url = $level.pages_path_AD."home.php";
        header("location:".$url);
        exit();

    }else if($urn == $reader["UserName"] && $pass == $reader["Password"]){
        if($reader["TrangThai"]!=1)
        {
            $_SESSION["message"] = '<div class="alert alert-danger" role="alert">
            <strong>Tài Khoản Của Bạn Đã Bị Khóa! Lew Lew</strong>
            </div>';
        }else{
        $_SESSION["account"] = array(
            "username"=>$reader['UserName'],
            "password"=>$reader['Password'],
            "maDG"=>$reader['MaDocGia'],
            "tenDG"=>$reader['TenDocGia'],
            "ngaySinh"=>$reader['NgaySinh'],
            "tienHC"=>$reader['TienHienCo'],
            "trangThai"=>$reader['TrangThai'],
            "hinhAnh" => $reader["HinhAnh"],
            "diaChi"=>$reader['DiaChi'],
            "role"=>"");

            $url = $level."index.php";
            header("location:".$url);
            exit();
        }

    }else $_SESSION["message"] =  '<div class="alert alert-danger" role="alert">
    <strong>Sai Tài Khoản Hoặc Mật Khẩu Rồi Bạn Eiiii</strong>
    </div>';
    $url = $level.pages_path_LG."login.php";
    header("location:".$url);
} 
?>