<?php
session_start();
 $level = "../../../";

 include_once $level."config.php";
    $url = $level."index.php";
    //THANH TOÁN VÀ LƯU HÓA ĐƠN
    if(isset($_POST["thanhToan"])){
        include_once $level."Database/random.php";
        include_once $level."Database/bill.php";
        include_once $level."Database/bill_Detail.php";
        $maHD = random("HD");
        $maDG = $_SESSION["account"]["maDG"];
        $tongSL = $_SESSION["tongSL"];
        $tongTien = $_SESSION["tongTien"];
        $ngayLap  = date('Y-m-d');
        addBill($maHD,$maDG,$ngayLap,$tongSL,$tongTien,$conn);
        foreach($_SESSION["book"] as $book){
          $thanhTien  = $book["giaTien"]*$book["soLuong"];
          addDetailBill($maHD,$book["maSach"],$book["giaTien"],$book["soLuong"],$thanhTien,$conn);
        }
        
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Thanh toán thành công</strong>
        </div>';
        unset($_SESSION["book"]); 
        unset($_SESSION["tongSL"]);
        unset($_SESSION["tongTien"]);
        $url = $level.pages_path_WEB.'billpending.php';
      }
      //CẬP NHẬT GIỎ HÀNG
      if(isset($_POST["capNhatGioHang"])){
        $url = $level.pages_path_WEB.'cart.php';
        //KIỂM TRA DANH SÁCH TRỐNG VÀ NHẤN CẬP NHẬT THÌ TRỞ VỀ, SIZEOF ĐẾN SỐ LƯỢNG PHẦN TỬ == 1 LÀ PTU NULL
        if(sizeof($_POST)==1){
          header("location:".$url);
          exit();
        }
        //DUYỆT DANH SÁCH CÁC SẢN PHẨM KHI $_POST, VỊ TRÍ TRONG MẢNG LÀ ID SÁCH ĐÓ
        $_SESSION["tongTien"] = 0;
        $_SESSION["tongSL"] = 0;
        foreach($_POST as $maSach=>$soLuong){
          //SỐ LƯỢNG <= 0 THÌ XÓA SÁCH ĐÓ
            if($soLuong<=0){
                unset($_SESSION["book"][$maSach]);
                if(empty($_SESSION["book"]))
                    unset($_SESSION["book"]);
            }else {
              //CẬP NHẬT SỐ LƯỢNG TRONG SS THEO SỐ LƯỢNG CỦA NGƯỜI DÙNG NHẬP
                $_SESSION["book"][$maSach]["soLuong"] = $soLuong;
                 //LƯU TỔNG TIỀN VÀ TỔNG SỐ LƯỢNG TRONG GIỎ HÀNG
                $_SESSION["tongTien"] += $_SESSION["book"][$maSach]["giaTien"]*$soLuong;
                $_SESSION["tongSL"] += $soLuong;
            }
        }
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
                <strong>Cập nhật thành công</strong>
                </div>';
      }
  header("location:".$url); 
?>