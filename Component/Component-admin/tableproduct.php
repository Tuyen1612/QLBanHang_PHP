     <?php
        include_once $level."Database/book.php";
        include_once $level."Database/category.php";
        include_once $level."Database/author.php";
        include_once $level."Database/random.php";
        include_once $level."Database/detailBook.php";
        include_once $level."Database/publish.php";

        if(isset($_GET["has"]))
            $books= $_SESSION["items"];
        else 
            $books = findAllBook($conn);
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
                    if(empty($books)){
                        ?>
							<div class="search"><img src="<?php echo $level . img_path . 'search.png'?>" alt="Không tìm thấy kết quả" style="float:left;width:100px;height:100px;"></div>
						<?php
                        echo "Không tìm thấy sản phẩm";
                    }else{
                ?>
                 <div class="col-md-12">
                     <div class="card">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title ">Danh sách Book</h4>
                             <p class="card-category">Danh sách các sản phẩm bán</p>

                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-hover">
                                     <thead class=" text-primary">
                                         <th>ID Sách</th>
                                         <th>Hình Ảnh</th>
                                         <th>Tên Sản Phẩm</th>
                                         <th>Thể Loại</th>
                                         <th>Tác Giả</th>
                                         <th>Giá Bán</th>
                                         <th>Giá Mặc Định </th>
                                         <th>Lượt Mua </th>
                                         <th>Số Lượng</th>
                                         <th>Trạng Thái</th>
                                     </thead>
                                     <tbody>
                                     <?php foreach($books as $book) {?>
                                         <tr>
                                             <td class="text-primary"><?php echo $book["MaSach"] ?></td>
                                             <td><img width="120" height="120"
                                                     src="<?php echo $level . img_path . 'books/' . $book["HinhAnh"] ?>"
                                                     alt="image description"><?php echo $book["HinhAnh"]?></td>
                                             <td><b><?php echo $book["TenSach"] ?></b></td>
                                             <td><?php echo $book["TenTheLoai"] ?></td>
                                             <td><?php echo $book["TenTacGia"] ?></td>
                                             <td><?php echo $book["GiaBan"] ?></td>
                                             <td><?php echo $book["GiaMacDinh"] ?></td>
                                             <td><?php echo $book["LuotMua"] ?></td>
                                             <td><?php echo $book["SoLuong"] ?></td>
                                             <td><?php 
                                                $status;
                                                if($book["TrangThai"]==1){
                                                    echo "Hoạt Động";
                                                    $status=0;
                                                }else {echo "Ngưng Bán";
                                                    $status=1;
                                                }
                                            ?>
                                             </td>
                                             <td><a href="<?php echo  $level.pages_path_AD."template/product.php?id=".$book["MaSach"] ?>"
                                                     class="settings" title="Settings" data-toggle="tooltip"><i
                                                         class="material-icons">border_color</i></a>
                                                 <a href="<?php echo  $level.pages_path_AD."post/deleteBook.php?id=".$book["MaSach"]."&status=".$status?>"
                                                     class="delete" title="Delete" data-toggle="tooltip"><i
                                                         class="material-icons">&#xE5C9;</i></a>
                                             </td>
                                         <tr>
                                             <?php }
                                             ?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <button class="btn btn-primary btn-block " onclick="showFormAddProduct()">Thêm Sản
                                 Phẩm</button>
                         </div>
                     </div>
                 </div>
                 <?php  }   ?>
                 <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO THÊM SẢN PHẨM -->
                 <?php 
                    if(isset($_GET["hasIMG"])){
                        $url =  $level.pages_path_AD."post/addBook.php?check=1";
                        $display = "block";
                    }else{
                        $display = "none";
                        $url =  $level.pages_path_AD."post/addBook.php?check=0";
                    }
                ?>
                 <form action="<?php echo $url?>" enctype="multipart/form-data" method="POST" class="content"
                     id="formAddProduct" style="display: <?php echo $display; ?>;">
                     <div class="container-fluid">
                         <div class="row">

                             <div class="col-md-12">
                                 <div class="card card-profile">
                                     <div class="card-avatar">
                                         <?php if(!isset($_GET["img"]))
                                                $url = $level.img_path."default.jpg";
                                                else $url = $level.img_path."books/".$_GET["img"];
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
                                         <h4 class="card-title">Thêm Sản Phẩm</h4>
                                     </div>
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Tên Sách</label>
                                                     <input type="text" name="tenSach" class="form-control">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Loại Sách</label>
                                                     <select class="browser-default custom-select" name="loaiSach">
                                                         <option selected="">(None)</option>
                                                         <?php 
                                                            //LẤY DANH SÁCH LOẠI BOOK
                                                            $listCategory = findAllCategory($conn);
                                                            while($category = $listCategory->fetch()) { ?>
                                                         <option value="<?php echo $category["MaTheLoai"]?>">
                                                             <?php echo $category["TenTheLoai"]?></option>
                                                         <?php }?>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Tác Giả</label>
                                                     <select class="browser-default custom-select" name="tacGia">
                                                         <option selected="">(None)</option>
                                                         <?php 
                                                             //LẤY DANH SÁCH TÁC GIẢ
                                                             $listAuthor = findAllAuthorByStatus(1,$conn);
                                                             while($author = $listAuthor->fetch()) { ?>
                                                         <option value="<?php echo $author["MaTacGia"]?>">
                                                             <?php echo $author["TenTacGia"]?></option>
                                                         <?php }?>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Giá Mặc Định</label>
                                                     <input type="text" name="giaMacDinh" class="form-control">
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Giá Bán</label>
                                                     <input type="text" name="giaBan" class="form-control">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Số Lượng</label>
                                                     <input id="number" name="soLuong" type="number" value="1">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Dạng Sách</label>
                                                     <input type="text" name="dangSach" class="form-control">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Số Trang</label>
                                                     <input id="number" name="soTrang" type="number" value="1">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Kích Thước</label>
                                                     <input type="text" name="kichThuoc" class="form-control">
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="clearfix"></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="card">
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Ngày Xuất Bản</label>
                                                     <input type="date" value="<?php echo date('Y-m-d'); ?>"
                                                         name="ngayXB" class="form-control">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Nhà Xuất Bản</label>
                                                     <select class="browser-default custom-select" name="nhaXB">
                                                         <option selected="">(None)</option>
                                                         <?php 
                                                             //LẤY DANH SÁCH NHÀ XUẤT BẢN
                                                             $listPublish = findAllPublish($conn);
                                                             while($publish = $listPublish->fetch()) { ?>
                                                         <option value="<?php echo $publish["MaNXB"]?>">
                                                             <?php echo $publish["TenNXB"]?></option>
                                                         <?php }?>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Ngôn Ngữ</label>
                                                     <select class="browser-default custom-select" name="ngonNgu">
                                                         <option selected="">(None)</option>
                                                         <option value="Tiếng Việt">Tiếng Việt</option>
                                                         <option value="Tiếng Anh">Tiếng Anh</option>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="clearfix"></div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label>Mô tả</label>
                                                     <div class="form-group">
                                                         <label class="bmd-label-floating"></label>
                                                         <textarea class="form-control" name="moTa" rows="5"></textarea>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-4">
                                 <button type="submit" name="addProduct" class="btn btn-primary btn-block">Thêm</button>
                             </div>
                             <div class="col-md-4">
                                 <a href="#" onclick="hiddenFormAddProduct()" class="btn btn-primary btn-block">Hủy</a>
                             </div>
                         </div>
                     </div>

                 </form>
                 <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO THÊM SẢN PHẨM -->


                 <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO CẬP NHẬT SẢN PHẨM -->
                 <?php  
                    //KIỂM TRA XEM CÓ CLICK VÀO SÁCH CẦN CẬP NHẬT, NẾU CÓ THÌ $_GET["maSach] # null, ngước lại = null 
                    if(isset($_GET["id"])){
                        $display = "block";
                        $book = findBookByID($_GET["id"],$conn) ->fetch();
                        $url = $level.pages_path_AD."post/updateBook.php?id=". $book["MaSach"];
                    }else
                        $display = "none";
                ?>
                 <form action="<?php echo $url?>" enctype="multipart/form-data" method="POST" class="content"
                  id='formUpdateProduct' style='display: <?php echo $display ?>;'>
                     <div class="container-fluid">
                         <div class="row">

                             <div class="col-md-12">
                                 <div class="card card-profile">
                                     <div class="card-avatar">
                                     <?php if(!isset($_GET["img"])){
                                                $urlIMG = $level.img_path."books/".$book["HinhAnh"];
                                                $_SESSION["img"] = $book["HinhAnh"];
                                            }else $urlIMG = $level.img_path."books/".$_GET["img"];
                                         ?>
                                         <img class="img" name="img" src="<?php echo $urlIMG?>" />
                                     </div>
                                     <div class="card-body">
                                         <input type="file" name="hinhAnh" />
                                         </br>
                                         <button href="javascript:;" name="uploadIMG"
                                             class="btn btn-primary btn-round">Cập Nhật Ảnh</button>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-12">
                                 <div class="card">
                                     <div class="card-header card-header-primary">
                                         <h4 class="card-title">Cập Nhật Sách</h4>
                                     </div>
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Mã Sách</label>
                                                     <input type="text" value="<?php echo $book["MaSach"] ?>"
                                                         class="form-control" disabled>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Tên Sách</label>
                                                     <input type="text" name="tenSach"
                                                         value="<?php echo $book["TenSach"] ?>" class=" form-control">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Loại Sách</label>
                                                     <select class="browser-default custom-select" name="loaiSach">
                                                         <option selected="" value="<?php echo $book["MaTheLoai"];?>">
                                                             <?php echo $book["TenTheLoai"] ?></option>
                                                         <?php 
                                                            //LẤY DANH SÁCH LOẠI BOOK                                                           
                                                            $listCategory = findAllCategory($conn);
                                                            while($category = $listCategory->fetch()) { ?>
                                                         <option value="<?php echo $category["MaTheLoai"];?>">
                                                             <?php echo $category["TenTheLoai"]?></option>
                                                         <?php }?>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Tác Giả</label>
                                                     <select class="browser-default custom-select" name="tacGia">
                                                         <option selected="" value="<?php echo $book["MaTacGia"]; ?>">
                                                             <?php echo $book["TenTacGia"] ?></option>
                                                         <?php 
                                                             //LẤY DANH SÁCH TÁC GIẢ
                                                             $listAuthor = findAllAuthorByStatus(1,$conn);
                                                             while($author = $listAuthor->fetch()) { ?>
                                                         <option value="<?php echo $author["MaTacGia"];?>">
                                                             <?php echo $author["TenTacGia"];?></option>
                                                         <?php }?>
                                                     </select>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Giá Mặc Đính</label>
                                                     <input type="text" name="giaMacDinh"
                                                         value="<?php echo $book["GiaMacDinh"] ?>" class="form-control">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label class="bmd-label-floating">Giá Bán</label>
                                                     <input type="text" name="giaBan"
                                                         value="<?php echo $book["GiaBan"] ?>" class="form-control">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="clearfix"></div>
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <button type="submit" name="updateBook"
                                                     class="btn btn-primary btn-block">Cập Nhật</button>
                                             </div>
                                             <div class="col-md-6">
                                                 <a href="<?php echo $level.pages_path_AD."template/product.php"; ?>"
                                                     class="btn btn-primary btn-block">Hủy</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </form>
                 <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO CẬP NHẬT SẢN PHẨM -->
                 <div class="col-md-12">
                     <div class="card card-plain">
                         <div class="card-header card-header-primary">
                             <h4 class="card-title mt-0"> Danh Sách Thể Loại</h4>
                             <p class="card-category"> Danh sách các thể loại sách bán</p>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-hover">
                                     <thead class="">
                                         <th>ID Loại</th>
                                         <th>Tên Tên Loại</th>
                                         <th>Số Sách</th>
                                         <th>Trạng Thái</th>
                                     </thead>
                                     <?php
                                     //LẤY DANH SÁCH LOẠI BOOK
                                        $listCategory = findAllCategory($conn);
                                      while($category = $listCategory->fetch()) { ?>
                                     <tr>
                                         <td class="text-primary"><?php echo $category["MaTheLoai"] ?></td>
                                         <td><?php echo $category["TenTheLoai"] ?></td>
                                         <td><?php echo $category["SoSach"] ?></td>
                                         <td><?php 
                                                if($category["TrangThai"]==1){
                                                  echo "Hoạt Động";
                                                  $status=0;
                                                }
                                                else{ echo "Ngưng Hoạt Động";
                                                    $status=1;
                                                }
                                            ?>
                                         </td>
                                         <td><a href="<?php echo $level.pages_path_AD."template/product?idCate=".$category["MaTheLoai"]; ?>"
                                                 onclick="showFormUpdateType()" class="settings" title="Settings"
                                                 data-toggle="tooltip"><i class="material-icons">border_color</i></a>
                                                 
                                             <a href="<?php echo $level.pages_path_AD."post/deleteCategory?idCate=".$category["MaTheLoai"]."&status=".$status ?>"
                                              class="delete" title="Delete" data-toggle="tooltip"><i
                                                     class="material-icons">&#xE5C9;</i></a>
                                         </td>
                                     </tr>
                                     <?php }?>
                                     <tbody>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                         <div class="col-md-3">
                             <button class="btn btn-primary btn-block" onclick="showFormAddType()">Thêm Loại</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO THÊM LOẠI SẢN PHẨM -->

     <div class="col-md-8" id="formAddType" style="display: none;">
         <div class="card">
             <div class="card-header card-header-primary">
                 <h4 class="card-title">Thêm Thể Loại</h4>
             </div>
             <div class="card-body">
                 <form action="<?php echo $level.pages_path_AD."post/addCategory.php" ?>" method="POST">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label class="bmd-label-floating">Tên Thể Loại</label>
                                 <input type="text" name="tenLoai" class="form-control">
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <button type="submit" name="addCategory" class="btn btn-primary btn-block">Thêm</button>
                         </div>
                         <div class="col-md-6">
                             <a href="#" onclick="hiddenFormAddType()" class="btn btn-primary btn-block">Hủy</a>
                         </div>
                     </div>
                     <div class="clearfix"></div>
                 </form>

             </div>
         </div>
     </div>
     <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO THÊM LOẠI SẢN PHẨM -->


     <!-- FORM ẨN, SẼ HIỆN THỊ KHI CLICK VÀO CẬP NHẬT LOẠI SẢN PHẨM -->
     <?php
     if(isset($_GET["idCate"])){
        $display = "block";
        $category = findCategoryByID($_GET["idCate"],$conn) ->fetch();
        $url = $level.pages_path_AD."post/updateCategory.php?id=".$_GET["idCate"];
    }else {
        $display = "none";
        $url = "";   
    }
    ?>
     <form class="col-md-8" method="POST" action="<?php echo $url ?>" id="formUpdateType"
         style="display: <?php echo $display ?>;">
         <div class="card">
             <div class="card-header card-header-primary">
                 <h4 class="card-title">Cập Nhật Thể Loại</h4>
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="form-group">
                             <label class="bmd-label-floating">Mã Thể Loại</label>
                             <input type="text" value="<?php echo $category["MaTheLoai"]; ?>" name="maLoai"
                                 class="form-control" disabled>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="form-group">
                             <label class="bmd-label-floating">Tên Thể Loại</label>
                             <input type="text" value="<?php echo $category["TenTheLoai"]; ?>" name="tenLoai"
                                 class="form-control">
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-6">
                         <button type="submit" name="updateCategory" class="btn btn-primary btn-block">Cập Nhật</button>
                     </div>
                     <div class="col-md-6">
                         <a href="#" onclick="hiddenFormUpdateType()" class="btn btn-primary btn-block">Hủy</a>
                     </div>
                 </div>
                 <div class="clearfix"></div>
             </div>
         </div>
     </form>
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

function showFormAddType() {
    document.getElementById('formAddType').style.display = 'block';
    hiddenFormUpdateType();
}

function hiddenFormAddType() {
    document.getElementById('formAddType').style.display = 'none';
}

function showFormUpdateType() {
    document.getElementById('formUpdateType').style.display = 'block';
    hiddenFormAddType()
}

function hiddenFormUpdateType() {
    document.getElementById('formUpdateType').style.display = 'none';
}

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 2000);
     </script>