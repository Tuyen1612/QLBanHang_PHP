
<div class="content">
    <div class="row">
        <div class="col-lg-12 col-md-10 ml-auto mr-auto">
            <div class="row">
                <div class="col-md-3">
                    <a class="btn btn-primary btn-block"
                        href="<?php echo $level.pages_path_AD."template/billpendingapproval.php"?>">Chờ Duyệt -
                        <?php echo $countBillPendingApproval["soLuong"]; ?> </a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary btn-block"
                        href="<?php echo $level.pages_path_AD."template/billapprovaled.php"?>">Đã Duyệt</a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary btn-block"
                        href="<?php echo $level.pages_path_AD."template/billsold.php"?>">Đã Bán</a>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary btn-block"
                        href="<?php echo $level.pages_path_AD."template/billcanceled.php"?>">Đã Hủy</a>
                </div>
            </div>
        </div>
    </div>