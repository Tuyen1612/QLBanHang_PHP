<?php 
  session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/reader.php"; 
    $id = $_GET["id"];
    $status = $_GET["status"];
    deleteReader($status,$id,$conn);
    $url = $level.pages_path_AD."template/reader.php";
    if($status==0)
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Xóa độc giả thành công</strong>
        </div>';
    else  $_SESSION["message"] = '<div class="alert alert-success" role="alert">
    <strong>Mở khóa độc giả thành công</strong>
    </div>';
    header("location:".$url);
?>