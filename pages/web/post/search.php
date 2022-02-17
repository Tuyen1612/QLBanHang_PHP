<?php
session_start();
$level = "../../../";
include_once $level."config.php";
include_once $level."Database/book.php";
include_once $level."Database/category.php";
include_once $level."Database/author.php";
if(isset($_POST["search"])){

    $keyword = $_POST["keyword"];

    if($_POST["category_id"] == "sach")
        $column = "sach.TenSach";
    else if ($_POST["category_id"] == "theLoai")
        $column = "theloai.TenTheLoai";
    else
        $column = "tacgia.TenTacGia";

    $_SESSION["items"] = findBookByKeyWordInColumn($keyword,$column,$conn)->fetchAll();

    if(isset($_SESSION["items"]))
        $url = $level.pages_path_WEB."products.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=true";
    else 
        $url = $level.pages_path_WEB."products.php?obj=".$_POST["category_id"]."&keyword=".$keyword."&has=false";

    header("location:".$url); 
}

?>