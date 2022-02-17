<?php
    include_once $level."Database/reader.php";

   $status=isset($_GET['status'])?$_GET['status']:'';
        $message=isset($_SESSION["message"])?$_SESSION["message"]:'';
        $save=findReaderByID($_SESSION["account"]['maDG'],$conn);
?>
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="<?php echo $level.img_path.'readers/'.$save[0]['HinhAnh'] ?>"
                            class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?php echo $save[0]["TenDocGia"] ?>
                        </div>
                        <a href="<?php echo $level.pages_path_WEB."profile.php"?>" class="profile-usertitle-job">
                            <i class="material-icons">mode_edit</i>
                            Sửa hồ sơ
                        </a>
                    </div>

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="<?php echo $level.pages_path_WEB."profile.php"?>">
                                    <i class="material-icons">person</i>
                                    Thông Tin Của Tôi </a>
                            </li>
                            <li>
                                <a href="<?php echo $level.pages_path_WEB."billorder.php"?>">
                                    <i class="material-icons">content_paste</i>
                                    Đơn Mua </a>
                            </li>
                            <li>
                                <a href="<?php echo $level.pages_path_WEB."changepassword.php"?>">
                                    <i class="material-icons">password</i>
                                    Đổi Mật Khẩu </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>