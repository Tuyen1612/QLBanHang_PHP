<?php 
    session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/author.php";
    

    
     //XỬ LÝ CẬP NHẬT SẢN PHẨM
     if(isset($_POST["updateAuthor"])){

        $id = $_GET["id"];
        $tenTG = $_POST["tenTG"];
        $ngaySinh = $_POST["ngaySinh"];
        $thongTin = $_POST["thongTin"];
        updateAuthor($tenTG,$ngaySinh,$thongTin,$id,$conn); 
        unset($_SESSION["MaTacGia"]);
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Cập nhật Tác giả thành công</strong>
        </div>';
        
    unset($_SESSION["img"]);
    $url =  $level.pages_path_AD."template/author.php";
    header("location:".$url);
    }

?>