     <?php
        include_once $level."Database/author.php";
        include_once $level."Database/random.php";

        //KIỂM TRA CÓ DỮ LIỆU HAS NGHĨA LÀ ĐANG TÌM KIẾM
        if(isset($_GET["has"]))
            $authors = $_SESSION["items"];
        else //KHÔNG CÓ NGHĨA LÀ NHẤN VÀO XEM DANH SÁCH
            $authors = findAllAuthor($conn);
        
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
                    //KIỂM TRA AUTHOR CÓ RỖNG, ở đây có thể check theo has hoặc check ở list, mà nhìn biểu thị has false là k có thì check theo has nha
                    if(empty($authors)){
                        ?>
							<div class="search"><img src="<?php echo $level . img_path . 'search.png'?>" alt="Không tìm thấy kết quả" style="float:left;width:100px;height:100px;"></div>
						<?php
                        echo "Không tìm thấy tác giả";
                    }else{
                ?>
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title ">Danh sách Tác Giả</h4>
                             <p class="card-category">Danh sách các tác giả</p>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-hover">
                                     <thead class=" text-primary">
                                         <th>ID Tác Giả</th>
                                         <th>Hình Ảnh</th>
                                         <th>Tên Tác Giả</th>
                                         <th>Ngày Sinh</th>
                                         <th>Số Sách Xuất Bản</th>
                                         <th>Thông tin</th>
                                         <th>Trạng Thái</th>
                                     </thead>
                                     <tbody>
                                         <?php foreach($authors as $author) {?>
                                         <tr>
                                             <td class="text-primary"><?php echo $author["MaTacGia"] ?></td>
                                             <td><img style="border-radius: 50%" width="90" height="90"
                                                     src="<?php echo $level . img_path . 'author/' . $author["HinhAnh"] ?>"
                                                     alt="image description"></td>
                                             <td><?php echo $author["TenTacGia"] ?></td>
                                             <td><?php echo $author["NgaySinh"] ?></td>
                                             <td><?php echo $author["SoSachXuatBan"] ?></td>
                                             <td><?php echo $author["ThongTin"] ?></td>
                                             <td><?php
                                                $status;
                                                if($author["TrangThai"]==1){
                                                    echo "Hoạt Động";
                                                    $status=0;
                                                }else {echo "Ngưng Hoạt Động";
                                                    $status=1;
                                                }
                                            ?></td>
                                             <td><a href="<?php echo  $level.pages_path_AD."template/author.php?id=".$author["MaTacGia"] ?>"
                                                     class="settings" title="Settings" data-toggle="tooltip"><i
                                                         class="material-icons">border_color</i></a>
                                                 <a href="<?php echo  $level.pages_path_AD."post/deleteAuthor.php?id=".$author["MaTacGia"]."&status=".$status?>"
                                                     class="delete" title="Delete" data-toggle="tooltip"><i
                                                         class="material-icons">&#xE5C9;</i></a>
                                             </td>
                                         <tr>
                                             <?php }?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <button class="btn btn-primary btn-block " onclick="showFormAddProduct()">Thêm Tác
                                 Giả</button>
                         </div>
                     </div>
                 </div>
                 <?php }?>
                 
                 <?php if(isset($_GET["hasIMG"])){
                            $display = "block";
                             $url =  $level.pages_path_AD."post/addAuthor.php?check=1";
                        }
                        else{ 
                            $url = $level.pages_path_AD."post/addAuthor.php?check=0";
                            $display = "none";    
                        }
                  ?>
                 <div class="col-md-12">
                     <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO THÊM TÁC GIẢ -->
                     <form action="<?php echo $url ?>" enctype="multipart/form-data" method="POST" class="content"
                         id="formAddProduct" style="display: <?php echo $display ?>;">
                         <div class="container-fluid">
                             <div class="row">

                                 <div class="col-md-12">
                                     <div class="card card-profile">
                                         <div class="card-avatar">
                                             <?php if(!isset($_GET["img"]))
                                                $url = $level.img_path."default.jpg";
                                                else $url = $level.img_path."author/".$_GET["img"];
                                            ?>
                                             <img class="img" name="img" src="<?php echo $url?>" />
                                         </div>
                                         <div class="card-body">
                                             <input type="file" name="hinhAnh" />
                                             </br>
                                             <button href="javascript:;" name="uploadIMG"
                                                 class="btn btn-primary btn-round">Đăng Ảnh</button>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="card">
                                         <div class="card-header card-header-primary">
                                             <h4 class="card-title">Thêm Tác Giả</h4>
                                         </div>
                                         <div class="card-body">
                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                         <label class="bmd-label-floating">Tên Tác Giả</label>
                                                         <input type="text" name="tenTG" class="form-control">
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <label class="bmd-label-floating">Ngày Sinh</label>
                                                     <input type="date" value="<?php echo date('Y-m-d'); ?>"
                                                         name="ngaySinh" class="form-control">
                                                 </div>
                                             </div>

                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                         <label class="bmd-label-floating">Số Sách Xuất Bản</label>
                                                         <input id="number" name="soSXB" type="number" value="1">
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                         <label>Thông Tin</label>
                                                         <div class="form-group">
                                                             <label class="bmd-label-floating"></label>
                                                             <textarea class="form-control" name="thongTin"
                                                                 rows="5"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="clearfix"></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-3">
                                     <button type="submit" name="addAuthor"
                                         class="btn btn-primary btn-block">Thêm</button>
                                 </div>
                                 <div class="col-md-3">
                                     <a href="<?php echo $level.pages_path_AD."template/author.php" ?>"
                                         class="btn btn-primary btn-block">Hủy</a>
                                 </div>
                             </div>
                         </div>
                     </form>
                     <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO THÊM SẢN PHẨM -->
                 </div>

                 <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO CẬP NHẬT LOẠI SẢN PHẨM -->
                 <?php
                    if(isset($_GET["id"])){
                        $display = "block";
                        $author = findAuthorByID($_GET["id"],$conn) ->fetch();
                        $url = $level.pages_path_AD."post/updateAuthor.php?id=".$_GET["id"];
                    }else {
                        $display = "none";
                        $url = "";   
                    }
                ?>
                 <form class="col-md-8" method="POST" action="<?php echo $url ?>" id="formUpdateType"
                     style="display: <?php echo $display ?>;">
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title">Cập Nhật Tác Giả</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">Mã Tác Giả</label>
                                         <input type="text" value="<?php echo $author["MaTacGia"]; ?>"
                                             class="form-control" disabled>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label class="bmd-label-floating">Tên Tác Giả</label>
                                         <input type="text" value="<?php echo $author["TenTacGia"]; ?>" name="tenTG"
                                             class="form-control">
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <label class="bmd-label-floating">Ngày Sinh</label>
                                     <input type="date" value="<?php echo $author["NgaySinh"]; ?>" name="ngaySinh"
                                         class="form-control">
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label>Thông Tin</label>
                                         <div class="form-group">
                                             <label class="bmd-label-floating"></label>
                                             <textarea class="form-control" name="thongTin" rows="5"><?php echo $author["ThongTin"]; ?> </textarea>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <button type="submit" name="updateAuthor" class="btn btn-primary btn-block">Cập
                                         Nhật</button>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="#" onclick="hiddenFormUpdateType()"
                                         class="btn btn-primary btn-block">Hủy</a>
                                 </div>
                             </div>
                             <div class="clearfix"></div>
                         </div>
                     </div>
                 </form>
                 <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO CẬP NHẬT LOẠI SẢN PHẨM -->
             </div>
         </div>

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