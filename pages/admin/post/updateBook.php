<?php 
    session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/book.php";
    include_once $level."Database/uploadImage.php";

    //UPLOAD HÌNH ẢNH
    if(isset($_POST["uploadIMG"])){
        //NƠI LƯU ẢNH
        $folder = $level.img_path."books/";

        $hinhAnh = $_FILES["hinhAnh"];

        $mess = uploadIMG($folder,$hinhAnh);

        //KIỂM TRA NẾU MESS == NULL LÀ LƯU THÀNH CÔNG
        if($mess != null){
            $url = $level.pages_path_AD."template/product.php";
            $_SESSION["message"] = $mess;
        }else{
            $url = $level.pages_path_AD."template/product.php?id=".$_GET["id"]."&img=".$_SESSION["img"];
        }

        unset($_FILES["hinhAnh"]);
        header("location:".$url);
    }

     //XỬ LÝ CẬP NHẬT SẢN PHẨM
     if(isset($_POST["updateBook"])){

        $id = $_GET["id"];
        $tenSach = $_POST["tenSach"];
        $maLoai = $_POST["loaiSach"];
        $maTacGia = $_POST["tacGia"];
        $giaMacDinh = $_POST["giaMacDinh"];
        $giaBan = $_POST["giaBan"];
        $hinhAnh = $_SESSION["img"];
        updateBook($maLoai,$tenSach,$maTacGia,$hinhAnh,$giaBan,$giaMacDinh,$id,$conn);  
        unset($_SESSION["maSach"]);
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Cập nhật Sản Phẩm thành công</strong>
        </div>';
    unset($_SESSION["img"]);
    $url =  $level.pages_path_AD."template/product.php";
    header("location:".$url);
    }

?>