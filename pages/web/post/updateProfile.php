<?php 

    session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/reader.php";
    include_once $level."Database/connection.php";
    include_once $level."Database/uploadImage.php";
    $status=0;
    $save=findReaderByID($_SESSION["account"]['maDG'],$conn);
    //UPLOAD HÌNH ẢNH
    if(isset($_POST["uploadIMG"])){
        //NƠI LƯU ẢNH
        $folder = $level.img_path."readers/";

        $hinhAnh = $_FILES["hinhAnh"];

        $mess = uploadIMG($folder,$hinhAnh);
        //KIỂM TRA NẾU MESS == NULL LÀ LƯU THÀNH CÔNG
        if($mess != null){
            $url = $level.pages_path_WEB."profile.php";
            $_SESSION["message"] = $mess;
        }else{
            $url = $level.pages_path_WEB."profile.php?id=".$_SESSION["account"]['maDG']."&img=".$_SESSION["account"]['hinhAnh'];
        }
        $_SESSION["account"]['hinhAnh']=$_POST['hinhAnh'];
        unset($_SESSION["message"]);
        header("location:".$url);
    
    
    }
    
     //XỬ LÝ CẬP NHẬT THÔNG TIN
     if(isset($_POST["update"])){

        $id = $_SESSION["account"]['maDG'];
        $userName=$_SESSION["account"]['username'];
        $ngaySinh = $_POST["ngaySinh"];
        $fullName = $_POST["fullName"];
        $diaChi = $_POST["diaChi"];
        $anh=$_SESSION["account"]['hinhAnh'];
        updateReader($anh,$fullName,$ngaySinh,$diaChi,$id,$conn);
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Cập nhật thông tin thành công</strong>
        </div>';
        
        unset($_SESSION["img"]);
        $url = $level.pages_path_WEB."profile.php?status=$status";
        header("location:".$url);
    }

?>