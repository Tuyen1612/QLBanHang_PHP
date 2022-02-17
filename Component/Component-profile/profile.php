<?php
    include_once $level."Database/reader.php";

   $status=isset($_GET['status'])?$_GET['status']:'';
        $message=isset($_SESSION["message"])?$_SESSION["message"]:'';
        $save=findReaderByID($_SESSION["account"]['maDG'],$conn);
?>
<div class="col-md-9">
    <div class="profile-content">
        <div class="card-header card-header-primary">
        <?php   if($status==0)
                    {   ?>
                    
                  <?php  echo $message     ?>   
                       <?php 
                    }
                    ?>
            <h4 class="card-title">Hồ Sơ Của Tôi</h4>
            <p class="card-category">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
        </div>
        <div class="card-body">
            <form action="post/updateProfile.php" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID User</label>
                                        <input type="text" value="<?php echo $_SESSION["account"]["maDG"] ?>"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Username</label>
                                        <input type="text" value="<?php echo $_SESSION["account"]['username'] ?>"
                                            class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Ngày Sinh</label>
                                        <input type="date" value="<?php echo $save[0]["NgaySinh"] ?>"
                                            name="ngaySinh" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Họ Tên</label>
                                        <input type="text" name="fullName"
                                            value="<?php echo $save[0]["TenDocGia"]?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Địa Chỉ</label>
                                        <input type="text" name="diaChi"
                                            value="<?php echo $save[0]["DiaChi"] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="update" class="btn btn-primary pull-right">Cập Nhật</button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <div class="card-avatar">
                                    <img class="img" name="img" src="<?php echo $level.img_path.'readers/'.$_SESSION["account"]['hinhAnh'] ?>" />
                                </div>
                                <div class="profile-usertitle">
                                    <input type="file" name="hinhAnh" />
                                    </br>
                                    <button href="javascript:;" name="uploadIMG" class="btn btn-primary btn-round">Upload Ảnh</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</main>