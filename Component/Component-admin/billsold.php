<?php
  include_once $level."Database/bill.php";
  $date = date('Y-m-d');
  if(isset($_GET["has"]))
    $bills= $_SESSION["items"];
else 
    $bills = findAllBillByDateAndStatus($date,1,$conn);
    $countBillPendingApproval = countBillPendingApproval($conn) -> fetch();
  include_once "header-bill.php";
  
?>
<div class="container-fluid">
    <div class="row">
    <?php 
                    if(empty($bills)){
                        ?>
							<div class="search"><img src="<?php echo $level . img_path . 'search.png'?>" alt="Không tìm thấy kết quả" style="float:left;width:100px;height:100px;"></div>
						<?php
                        echo "Không tìm thấy hóa đơn";
                    }else{
                ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Danh Sách Hóa Đơn Bán</h4>
                    <p class="card-category"> Thông tin các hóa đơn bán trong ngày</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>ID Độc Giả</th>
                                <th>Ngày Lập HĐ</th>
                                <th>Số Lượng</th>
                                <th>Tổng Tiền</th>
                                <th>Tình Trạng</th>
                            </thead>

                            <tbody>
                            <?php foreach($bills as $bill) {?>
                                <tr>
                                    <td class="text-primary"><?php echo $bill["MaHoaDon"] ?></td>
                                    <td><?php echo $bill["MaDocGia"] ?></td>
                                    <td><?php echo $bill["NgayLapHD"] ?></td>
                                    <td><?php echo $bill["TongSoLuong"] ?></td>
                                    <td><?php echo number_format($bill["TongTien"]) . " VNĐ" ?></td>
                                    <td><?php if($bill["TinhTrang"]==1)echo "Đã Bán";else if($bill["TinhTrang"]==-1) echo "Da huy";elseif($bill["TinhTrang"]==0) echo"dang duyet" ?></td>

                                <tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php   }   ?>
    </div>
</div>
</div>