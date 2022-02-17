<?php 
    $level="../../";
    include_once $level.'config.php';
    include_once $level.'Database/bill.php';
    include_once $level.'Database/bill_detail.php';

?>
<div class="content">
    <div class="col-md-9">
        <div class="row">
            <div class="col-lg-12">
            <div class="row">
                   
                </div>
            </div>
        </div>
        <div class="container-fluid">
         
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Chi tiết hóa đơn</h4>
                            <p class="card-category"> Thông tin hóa đơn</p>
                        </div>
                        <div class="">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class=" text-primary">
                                        <td scope="col">Mã Hóa Đơn</td>
                                        <td scope="col">Mã Sách</td>
                                        <td scope="col">Đơn Gía </td>
                                        <td scope="col">Số Lượng</td>
                                        <td scope="col">Thành Tiền</td>
                                        <td scope="col"></td>
                                    </thead>

                                    <tbody>
                                    <?php foreach($_SESSION["detailBill"] as $detailBills) {?>

                                        <tr>
                                            <td class="text-primary"><?php echo $detailBills["MaHoaDon"]?></td>
                                            <td><?php echo $detailBills["MaSach"]?></td>
                                            <td><?php echo $detailBills["DonGia"]?></td>
                                            <td><?php echo $detailBills["SoLuong"]?></td>
                                            <td><?php echo $detailBills["ThanhTien"]?></td>
                                            
                                        <tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>
</main>