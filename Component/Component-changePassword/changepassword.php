<?php   $status=isset($_GET['status'])?$_GET['status']:'';
        $message=isset($_SESSION["message"])?$_SESSION["message"]:'';
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
            <h4 class="card-title">Đổi Mật Khẩu </h4>
            <p class="card-category">Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</p>
        </div>
        <div class="card-body">
            <form action="post/changePass.php" method="POST">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mật Khẩu Cũ</label>
                                        <input type="password" name="oldPass" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mật Khẩu Mới</label>
                                        <input type="password" name="newPass" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nhập Lại Mật Khẩu Mới</label>
                                        <input type="password" name="rePass" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="update" class="btn btn-primary pull-right">Cập Nhật</button>
                            <div class="clearfix"></div>
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