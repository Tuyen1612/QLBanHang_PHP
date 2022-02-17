<?php
    include_once $level."Database/bill.php";
  $date = date('Y-m-d');
  $lstBill = findAllBillByDateAndStatus($date,-1,$conn);
  $countBillPendingApproval = countBillPendingApproval($conn) -> fetch();
  include_once "header-bill.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Danh Sách Hóa Đơn Đã Hủy</h4>
                    <p class="card-category"> Thông tin các hóa đơn hủy trong ngày</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>ID Độc Giả</th>
                                <th>Ngày Lập HĐ</th>
                                <th>Tổng Số Lượng</th>
                                <th>Tổng Tiền</th>
                                <th>Tình Trạng</th>
                            </thead>
                            <tbody>
                                <?php while($bill = $lstBill->fetch()) {?>
                                <tr>
                                    <td class="text-primary"><?php echo $bill["MaHoaDon"] ?></td>
                                    <td><?php echo $bill["MaDocGia"] ?></td>
                                    <td><?php echo $bill["NgayLapHD"] ?></td>
                                    <td><?php echo $bill["TongSoLuong"] ?></td>
                                    <td><?php echo number_format( $bill["TongTien"]) . " VNĐ" ?></td>
                                    <td><?php echo "Đã Hủy" ?></td>
                                <tr>
                                    <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>