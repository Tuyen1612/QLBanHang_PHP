<?php
  session_start();
  $level="../../../";
  include_once $level."config.php";
  include_once $level."Database/author.php";
  include_once $level."Database/random.php";
  include_once $level."Database/uploadImage.php";

//UPLOAD HÌNH ẢNH
if(isset($_POST["uploadIMG"])){
    //NƠI LƯU ẢNH
    $folder = $level.img_path."author/";

    $mess = uploadIMG($folder);

    //KIỂM TRA NẾU MESS == NULL LÀ LƯU THÀNH CÔNG
    if($mess != null){
        $url = $level.pages_path_AD."template/author.php";
        $_SESSION["message"] = $mess;
    }else{
        $url = $level.pages_path_AD."template/author.php?hasIMG=true&img=".$_SESSION["img"];
    }
    
    header("location:".$url);
}

if(isset($_POST["addAuthor"])){
    if($_GET["check"]==0){
        $_SESSION["message"] = '<div class="alert alert-danger" role="alert">
        <strong>Thất bại, Vui lòng chọn hình ảnh</strong>
        </div>';
        $url = $level.pages_path_AD."template/product.php?hasIMG=true";
        header("location:".$url);
        exit();
    }

    $id = random("TG");
    $tenTG = $_POST["tenTG"];
    $ngaySinh = $_POST["ngaySinh"];
    $thongTin = $_POST["thongTin"];
    $soSXB = $_POST["soSXB"];
    $author = array("id"=>$id,
                    "hinhAnh"=>$_SESSION["img"],
                    "tenTG"=>$tenTG,
                    "ngaySinh"=>$ngaySinh,
                    "soSXB"=>$soSXB,
                    "thongTin"=>$thongTin);
    if($author["tenTG"]=="" || $author["ngaySinh"]=="" || $author["thongTin"]==""){
        $_SESSION["message"] = '<div class="alert alert-danger" role="alert">
        <strong>Thất bại, Vui lòng không để trống thông tin</strong>
        </div>';
    }else {
        addAuthor($author["id"],$author["hinhAnh"],$author["tenTG"],$author["ngaySinh"],$author["soSXB"],$author["thongTin"],$conn);
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Thêm thành công</strong>
        </div>';
    }
    unset($_SESSION["img"]);
        $url = $level.pages_path_AD."template/author.php";
        header("location:".$url);

}

?>