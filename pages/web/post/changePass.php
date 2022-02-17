
<?php 

    session_start();
    $level = "../../../";
    include_once $level."config.php";
    include_once $level."Database/reader.php";
    include_once $level."Database/connection.php";
    $status=0;

    
     //XỬ LÝ CẬP NHẬT SẢN PHẨM
     if(isset($_POST["update"])){

        $id = $_SESSION["account"]['maDG'];
        $pass=$_SESSION["account"]['password'];
        $oldPass = $_POST["oldPass"];
        $newPass = $_POST["newPass"];
        $rePass = $_POST["rePass"];
        var_dump($_SESSION["account"]);
        if($oldPass == "" ||$newPass =="" || $rePass=="" )
        {
            
            $_SESSION["message"] = '<div class="alert alert-success" role="alert">
            <strong>Không được bỏ trống</strong>
            </div>';
        }
        else if($oldPass == $pass && $newPass==$rePass)
        {
           
            changePass($newPass,$id,$conn);
            $_SESSION["message"] = '<div class="alert alert-success" role="alert">
            <strong>Cập nhật mật khẩu thành công</strong>
            </div>';
        }
        else
        {
            if($oldPass != $pass)
            
                $_SESSION["message"] = '<div class="alert alert-success" role="alert">
                <strong>Mật khẩu không đúng</strong>
                </div>';
            else
                $_SESSION["message"] = '<div class="alert alert-success" role="alert">
                <strong>Mật khẩu không trùng khớp</strong>
                </div>';
        }        
        
    unset($_SESSION["img"]);
    $url = $level.pages_path_WEB."changepassword.php?status=$status";
    header("location:".$url);
    }

?>