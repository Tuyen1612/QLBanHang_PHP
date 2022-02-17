<?php 
  session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/bill_detail.php"; 
    include_once $level."Database/bill.php"; 
    $id = $_GET["idBill"];

    $_SESSION["detailBill"] = findDetailBillByIDBill($id,$conn)->fetchAll();

    $url = $level.pages_path_WEB."order-information.php";
    
    header("location:".$url);
?>