<?php 
  session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/bill.php";
    $id = $_GET["id"];
    $status = $_GET["status"];
    $result = updateStatusBill($status,$id,$conn);
    $url = $level.pages_path_AD."template/billpendingapproval.php";
    if($status == 1){
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Duyệt đơn thành công</strong>
        </div>';
    }else {
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Hủy đơn thành công</strong>
        </div>';
    }
    header("location:".$url);
?>