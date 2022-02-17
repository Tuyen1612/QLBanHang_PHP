<?php
    session_start();
    $level = "../../../";

    include_once $level."config.php";
    include_once $level."Database/category.php";

    if(isset($_POST["updateCategory"])){
        $id = $_GET["id"];
        var_dump($id);
        $tenLoai = $_POST["tenLoai"];
        var_dump($tenLoai);
        updateCategory($tenLoai,$id,$conn);
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
        <strong>Cập Nhật Loại thành công</strong>
        </div>';
    }
    $url = $level.pages_path_AD."template/product.php";
                header("location:".$url);
?>