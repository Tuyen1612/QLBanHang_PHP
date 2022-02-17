
<div class="content">
        <?php   

                            //KIỂM TRA NHẤN NÚT CẬP NHẬT THÔNG TIN
                            if(isset($_POST["update"])){
                                
                                include_once $level."Database/manage.php";

                                $email = $_POST["email"];
                                $firstName = $_POST["firstName"];
                                $lastName = $_POST["lastName"];
                                $pass = $_POST["pass"];
                                $id = $_SESSION["account"]["id"];
                                $urn =$_SESSION["account"]["username"];
                                if($email == '' || $firstName == '' || $lastName == '' || $pass == ''){
                                    echo '<div class="alert alert-danger" role="alert">
                                    <strong>Cập nhật thất bại</strong>
                                    </div>';
                                }
                                else{
                                    update( $email,$firstName,$lastName,$pass,$id,$conn);
                                    $_SESSION["account"]["email"] = $email;
                                    $_SESSION["account"]["firstName"] = $firstName;
                                    $_SESSION["account"]["lastName"] =  $lastName;
                                    $_SESSION["account"]["pass"] = $pass;
                                    echo '<div class="alert alert-success" role="alert">
                                            <strong>Cập nhật thành công</strong>
                                            </div>';
                                    }
                                }
                            ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Cập nhật thông tin cá nhân</h4>
                        <p class="card-category">Hoàn thành thông tin cá nhân của bạn</p>

                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID User</label>
                                        <input type="text" value="<?php echo $_SESSION["account"]["id"] ?>" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Username</label>
                                        <input type="text" value="<?php echo $_SESSION["account"]['username'] ?>" class="form-control"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" name="email" value="<?php echo $_SESSION["account"]['email'] ?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Họ</label>
                                        <input type="text" name="firstName" value="<?php echo $_SESSION["account"]['firstName'] ?>"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tên</label>
                                        <input type="text" name="lastName" value="<?php echo $_SESSION["account"]['lastName'] ?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Mật Khẩu</label>
                                        <input type="password" name="pass" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="update" class="btn btn-primary pull-right">Cập Nhật</button>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 2000);
</script>