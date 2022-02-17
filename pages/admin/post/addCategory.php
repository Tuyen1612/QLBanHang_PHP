<?php
    session_start();
    $level= "../../../";
    include_once $level."config.php";
    include_once $level."Database/category.php";
    include_once $level."Database/random.php";

              //XỬ LÝ THÊM LOẠI SẢN PHẨM
              if(isset($_POST["addCategory"])){
                $maLoai = random("L");
                $tenLoai = $_POST["tenLoai"];
                        
                if($tenLoai==""){
                echo '<div class="alert alert-danger" role="alert">
                    <strong>Thất bại,Vui lòng không để trống thông tin</strong>
                        </div>';  
                    }else { 
                        addCategory($tenLoai,$maLoai,$conn);
                        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
                        <strong>Thêm Loại thành công</strong>
                        </div>';
                    }
                }
                $url = $level.pages_path_AD."template/product.php";
                header("location:".$url);
?>
