<?php 
  include_once $level.'Database/bill.php';
  $total=0;	
  $count=0;

  $result =findAllBillByDateAndStatus(date("Y/m/d"),1,$conn);
  $result1 =findAllBillByWeekAndStatus(date("Y/m/d"),1,$conn);
  $result2=findAllBillByMonthAndStatus(date('m'),1,$conn);
  $result3=countBill($conn);
  $result4=countBillApproval($conn);
  $result5=potentialCustomers($conn);
  $result6=sellingProducts($conn);
 
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Doanh Thu Trong Ngày</p>
                  <h3 class="card-title"><?php   while ($row = $result->fetch()) {$total+=(int)$row["TongTien"];};  echo number_format($total)." VNĐ" ;$total=0;?></h3>
                  <p class="card-category">Doanh Thu Trong Tuần</p>
                  <h3 class="card-title"><?php   while ($row = $result1->fetch()) {$total+=(int)$row["TongTien"];} echo number_format($total)." VNĐ";$total=0; ?></h3>
                  <p class="card-category">Doanh Thu Trong Tháng</p>
                  <h3 class="card-title"><?php   while ($row = $result2->fetch()) {$total+=(int)$row["TongTien"];};  echo number_format($total)." VNĐ" ;$total=0;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>Thông kê doanh thu
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Số Lượng Khách Hàng</p>
                  <h3 class="card-title"><?php while ($row = $result3->fetch()) {$count+=(int)$row["soLuong"];};echo $count;$count=0; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>24 giờ trước
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Doanh Thu Hằng Ngày</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> Tăng trong hôm nay</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Cập nhật 5 phút trước
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Hiệu suất bán</h4>
                  <p class="card-category"><?php while ($row = $result4->fetch()) {$count+=(int)$row["soLuong"];};echo "+".$count." Xuát Bán";$count=0; ?></p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Cập nhật 24 giờ trước
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Khách Hàng Tiềm Năng</h4>
                  <p class="card-category">Những khách hàng mua nhiều nhất</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Họ Tên</th>
                      <th>Tổng Tiển</th>
                      <th>Địa Chỉ</th>
                    </thead>
                    <tbody>
                    <?php  while ($row = $result5->fetch()) { ?>
                      <tr>
                        <td><?php echo $row["MaDocGia"]?></td>
                        <td><?php echo $row["TenDocGia"]?></td>
                        <td><?php echo number_format($row["tongTien"])." VNĐ"?></td>
                        <td><?php echo $row["DiaChi"]?></td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Sản Phẩm Bán Chạy</h4>
                  <p class="card-category">Danh sách các sản phẩm bán chạy trong tuần</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>ID</th>
												<th>Tên Sản Phẩm</th>
												<th>Giá</th>
												<th>Thể Loại</th>
                        <th>Tác Giả</th>
												<th>Trạng Thái</th>
                      </thead>
                      <tbody>
                      <?php  while ($row = $result6->fetch()) { ?>
                        <tr>
                          <td class="text-primary"><?php echo $row["MaSach"]?></td>
                          <td><?php echo $row["TenSach"]?></td>
                          <td><?php echo number_format( $row["GiaBan"])." VNĐ"?></td>
                          <td><?php echo $row["TenTheLoai"]?></td>
                          <td><?php echo $row["TenTacGia"]?></td>
                          <td><?php if($row["TrangThai"]==1)echo "Còn bán";else echo"Hết Hàng";?></td>
                          
                        <tr>
                      </tbody>
                      <?php }?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

 