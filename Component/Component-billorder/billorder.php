<?php 
    $level="../../";
    include_once $level.'config.php';
    include_once $level.'Database/bill.php';
    $bills =findBillByIDUser($_SESSION["account"]["maDG"],$conn)-> fetchAll();
    $countBill = countBillPendingApprovalByIDReader($_SESSION["account"]["maDG"],$conn) -> fetch();	
?>
<div class="content">
    <div class="col-md-9">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-3">
                        <a class="tg-btn tg-active"
                            href="<?php echo $level.pages_path_WEB."billorder.php"?>">Tất Cả</a>
                    </div>
                    <div class="col-md-3">
                        <a class="tg-btn"
                            href="<?php echo $level.pages_path_WEB."billpending.php"?>">Chờ Duyệt:<?php echo $countBill["soLuong"]; ?> 
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a class="tg-btn"
                            href="<?php echo $level.pages_path_WEB."billdelivered.php"?>">Đã Giao</a>
                    </div>
                    <div class="col-md-3">
                        <a class="tg-btn"
                            href="<?php echo $level.pages_path_WEB."billcancel.php"?>">Đã Hủy</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <?php
                if(empty($bills)){
                    ?>
						<img src="<?php echo $level . img_path . 'search.png'?>" alt="Không tìm thấy kết quả" style="float:left;width:100px;height:100px;"></div>
					<?php
                    echo "Chưa có đơn hàng";
                    	
                }else{
            ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Danh Sách Hóa Đơn Đặt Hàng</h4>
                            <p class="card-category"> Thông tin các hóa đơn đã mua</p>
                        </div>
                        <div class="">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class=" text-primary">
                                        <td scope="col">Mã Hóa Đơn</td>
                                        <td scope="col">Số Lượng</td>
                                        <td scope="col">Trạng Thái </td>
                                        <td scope="col">Ngày Đặt</td>
                                        <td scope="col">Thành Tiền</td>
                                        <td scope="col"></td>
                                    </thead>

                                    <tbody>
                                        <?php  foreach($bills as $bill) {?>
                                        <tr>
                                            <td class="text-primary"><?php echo $bill["MaHoaDon"]?></td>
                                            <td><?php echo $bill["TongSoLuong"]?></td>
                                            <td><?php  if($bill["TinhTrang"]==-1)echo "Đang Lấy Hàng";else if($bill["TinhTrang"]==0) echo "Đang Giao Hàng"; else echo"Đã Giao Hàng"?>
                                            </td>
                                            <td><?php echo $bill["NgayLapHD"]?></td>
                                            <td><?php echo $bill["TongTien"]?></td>
                                            <td class="text-center"><a class="btn btn-info" title=""
                                                    data-toggle="tooltip" href="<?php echo $level.pages_path_WEB."order-information.php" ?>"
                                                    data-original-title="View"><i class="fa fa-eye"></i></a>
                                            </td>
                                        <tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
</main>