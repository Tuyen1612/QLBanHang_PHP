<?php
session_start();
$level = "../../../";
include_once $level."config.php";
include_once $level."Database/author.php";
include_once $level."Database/reader.php";
include_once $level."Database/book.php";
include_once $level."Database/bill.php";
include_once $level."Database/connection.php";
if(isset($_POST["search"])){

    $keyword = $_POST["keyword"];
    $obj = $_POST["category_id"];

    if( $obj == "docgia")
    {
        $column="docgia.MaDocGia like '%$keyword%' or docgia.TenDocGia like N'%$keyword%' or docgia.DiaChi like N'%$keyword%' or docgia.UserName like '%$keyword%'";

        $_SESSION["items"] = findReaderByKeywordInColumn($column,$conn)->fetchAll();

        if(empty($_SESSION))
            $url = $level.pages_path_AD."template/reader.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=false";
        else
            $url = $level.pages_path_AD."template/reader.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=true";
        
    }
    else if ( $obj == "sach")
    {

            $column="sach.MaSach like '%$keyword%' or sach.TenSach like N'%$keyword%' or tacgia.MaTacGia like '%$keyword%' or tacGia.TenTacGia like N'%$keyword%' or theloai.MaTheLoai like '%$keyword%' or theloai.TenTheLoai like N'%$keyword%'";

            $_SESSION["items"] = findBookByKeyWordInColumn($column,$conn)->fetchAll();

        if(empty($_SESSION))
            $url = $level.pages_path_AD."template/product.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=false";
        else
            $url = $level.pages_path_AD."template/product.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=true";
    }
    else if ( $obj== "tacgia")
    {
        $column = "tacgia.MaTacGia like '%$keyword%' or tacgia.TenTacGia like N'%$keyword%'";

        $_SESSION["items"] = findAuthorByKeywordInColumn($column,$conn)->fetchAll();

        //Kiểm tra SS CÓ RỖNG KHÔNG, RỖNG THÌ TRẢ VỀ FALSE KHÔNG TÌM THẤY
        if(empty($_SESSION))
            $url = $level.pages_path_AD."template/author.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=false";
        else
            $url = $level.pages_path_AD."template/author.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=true";
    }
    else if ( $obj == "hoadon")
    {
        $column="docgia.MaDocGia like '%$keyword%' or docgia.TenDocGia like N'%$keyword%' or hoadon.MaHoaDon like '%$keyword%'";

        $_SESSION["items"] = findBillByKeywordInColumn($column,$conn)->fetchAll();
        if(empty($_SESSION))
            $url = $level.pages_path_AD."template/billsold.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=false";
        else
            $url = $level.pages_path_AD."template/billsold.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=true";
    }

    header("location:".$url); 

}
?>