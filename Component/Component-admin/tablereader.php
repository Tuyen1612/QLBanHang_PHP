     <?php
        include_once $level."Database/reader.php";
        include_once $level."Database/random.php";

        if(isset($_GET["has"]))
            $readers= $_SESSION["items"];
        else 
            $readers = findAllReader($conn);
     ?>
     <div class="content">
         <?php
          if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
            }
       ?>

         <div class="container-fluid">
             <div class="row">
             <?php 
                    //KIỂM TRA READER CÓ RỖNG
                    if(empty($readers)){
                        ?>
							<div class="search"><img src="<?php echo $level . img_path . 'search.png'?>" alt="Không tìm thấy kết quả" style="float:left;width:100px;height:100px;"></div>
						<?php
                        echo "Không tìm thấy đọc giả";
                    }else{
                ?>
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title ">Danh sách Độc Giả</h4>
                             <p class="card-category">Danh sách các độc giả</p>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-hover">
                                     <thead class=" text-primary">
                                         <th>ID Độc Giả</th>
                                         <th>Hình Ảnh</th>
                                         <th>Tên Độc Giả</th>
                                         <th>Username</th>
                                         <th>Địa Chỉ</th>
                                         <th>Trạng Thái</th>
                                     </thead>
                                     <tbody>
                                     <?php foreach($readers as $reader) {?>
                                         <tr>
                                             <td class="text-primary"><?php echo $reader["MaDocGia"] ?></td>
                                             <td><img style = "border-radius: 50%" width="120" height="120" src="<?php echo $level . img_path . 'readers/' . $reader["HinhAnh"] ?>"
                                                     alt="image description"></td>
                                             
                                             <td><?php echo $reader["TenDocGia"] ?></td>
                                             <td><?php echo $reader["UserName"] ?></td>
                                             <td><?php echo $reader["DiaChi"] ?></td>
                                             <td><?php 
                                                $status;
                                                if($reader["TrangThai"]==1){
                                                    echo "Hoạt Động";
                                                    $status=0;
                                                }else {echo "Vô Hiệu Hóa";
                                                    $status=1;
                                                }
                                            ?>
                                             </td>
                                             <td>
                                                 <a href="<?php echo  $level.pages_path_AD."post/deleteReader.php?id=".$reader["MaDocGia"]."&status=".$status?>"
                                                     class="delete" title="Delete" data-toggle="tooltip"><i
                                                         class="material-icons">&#xE5C9;</i></a>
                                             </td>
                                         <tr>
                                             <?php }?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php }?>
             </div>
         </div>
         <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO CẬP NHẬT LOẠI SẢN PHẨM -->


         <script type="text/javascript">
         function showFormAddProduct() {
             document.getElementById('formAddProduct').style.display = 'block';
             hiddenFormUpdateProduct();
         }

         function hiddenFormAddProduct() {
             document.getElementById('formAddProduct').style.display = 'none';
         }

         function showFormUpdateProduct() {
             document.getElementById('formUpdateProduct').style.display = 'block';
             hiddenFormAddProduct();
         }

         window.setTimeout(function() {
             $(".alert").fadeTo(500, 0).slideUp(500, function() {
                 $(this).remove();
             });
         }, 2000);
         </script>