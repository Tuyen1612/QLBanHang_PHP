<?php
    session_start();
    $level = "../../../";
    
    include_once $level."config.php";


    if(isset($_SESSION["account"])){

        include_once $level."Database/book.php";

        $maSach= $_GET["id"];

        //KIỂM TRA NHẤN THÊM SẢN PHẨM Ở TRANG CHI TIẾT VỚI SỐ LƯỢNG TRUYỀN VÀO
        if(isset($_POST["addCart"])){
            $soLuong = $_POST["quantity"];  
        }
        //KHÔNG THÌ MẶC ĐỊNH, NHẤN THÊM GIỎ HÀNG SỐ LƯỢNG = 1
         else $soLuong = 1;

        //KIỂM TRA SÁCH TỒN TẠI TRONG SESSION (GIỎ HÀNG)
        if(isset($_SESSION["book"][$maSach])){
            //NẾU ĐÃ TỒN TẠI SẢN PHẨM TRONG GH THÌ TĂNG SỐ LƯỢNG LÊN 1
            $_SESSION["book"][$maSach]["soLuong"]+=$soLuong;
        }else{
            //NẾU CHƯA TỒN TÀI THÌ THÊM VÀO GIỎ HÀNG
            $book = findBookByID($maSach,$conn)->fetch();
            $_SESSION["book"][$maSach] = array(
                                    "maSach"=>$book["MaSach"],
                                    "tenSach"=>$book["TenSach"],
                                    "giaTien"=>$book["GiaBan"],
                                    "tenTheLoai"=>$book["TenTheLoai"],
                                    "tenTacGia" =>$book["TenTacGia"],
                                    "hinhAnh" => $book["HinhAnh"],
                                    "soLuong"=>$soLuong);
        }
        //LƯU TỔNG TIỀN VÀ TỔNG SỐ LƯỢNG TRONG GIỎ HÀNG
        $_SESSION["tongTien"] += $_SESSION["book"][$maSach]["giaTien"]*$soLuong;
        $_SESSION["tongSL"] += $soLuong;
            $url = $level.pages_path_WEB.'cart.php';
            header("location:".$url);

    }else {
        $url = $level.'index.php';
        $_SESSION["message"]  = '<div class="alert alert-danger" role="alert">
        <strong>Vui lòng đăng nhập</strong>
            </div>'; 

        header("location:".$url);
    }
?>