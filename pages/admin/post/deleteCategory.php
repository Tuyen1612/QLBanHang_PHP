<?php 
  session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/category.php"; 
    $id = $_GET["idCate"];
    $status = $_GET["status"];
    $result = deleteCategory($status,$id,$conn);
    $url = $level.pages_path_AD."template/product.php";
    if($status==0)
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Xóa thể loại thành công</strong>
        </div>';
     else  $_SESSION["message"] = '<div class="alert alert-success" role="alert">
     <strong>Mở sách thành công</strong>
     </div>';
    header("location:".$url);
?>