<?php
  session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/author.php"; 
    $id = $_GET["id"];
    $status = $_GET["status"];
    deleteAuthor($status,$id,$conn);
    if($status==0)
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Xóa tác giả thành công</strong>
        </div>';
    else  $_SESSION["message"] = '<div class="alert alert-success" role="alert">
    <strong>Mở khóa tác giả thành công</strong>
    </div>';
    var_dump($_SESSION["message"]);
    $url = $level.pages_path_AD."template/author.php";
    header("location:".$url);
?>