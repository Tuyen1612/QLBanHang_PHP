<?php
session_start();
 $level = "../../../";
 include_once $level."config.php";
    $id = $_GET["id"];
    //NHẤN NÚT LÀM MỚI, XÓA TẤT CẢ GIỎ HÀNG
    if($id=="0"){
        unset($_SESSION["book"]);
    }
    //XÓA THEO SÁCH THEO ID
    else{
        //CẬP NHẬT LẠI TỔNG SL VÀ TỔNG TIỀN
        $_SESSION["tongSL"] -= $_SESSION["book"][$id]["soLuong"];
        $_SESSION["tongTien"] -= $_SESSION["book"][$id]["giaTien"]*$_SESSION["book"][$id]["soLuong"];
        unset($_SESSION["book"][$id]);
    }
    //NẾU GIỎ HÀNG TRỐNG THÌ XÓA TẤT CẢ SESSION 
    if( empty($_SESSION["book"]))
        unset($_SESSION["book"]);
    $url = $level.pages_path_WEB.'cart.php';
    header("location:".$url);  
?>