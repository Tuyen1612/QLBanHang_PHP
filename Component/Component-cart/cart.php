<?php 
$level = "../../";
?>
<div class="tg-sectionspace tg-haslayout">
    <div class="container-fluid">
        <div class="row">
            <form action="<?php echo $level.pages_path_WEB.'post/cartbill.php'?>" method="POST">
                <aside class="col-lg-9">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-borderless table-shopping-cart">
                                <?php

                            if(isset($_SESSION["book"])){
                            ?>
                                <thead class="text-muted">
                                    <tr class="small text-uppercase">
                                        <th scope="col">Sách</th>
                                        <th scope="col" width="120">Số Lượng</th>
                                        <th scope="col" width="120">Giá Tiền</th>
                                        <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    
                                    foreach($_SESSION["book"] as $book ) {  ?>
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img
                                                        src="<?php echo $level . img_path . 'books/' . $book["hinhAnh"] ?>"
                                                        class="img-sm"></div>
                                                <figcaption class="info">
                                                     <a
                                                        href="<?php echo $level.pages_path_WEB.'productdetail.php?id='.$book["maSach"] ?>"
                                                        class="title text-dark"
                                                        data-abc="true" ><?php echo $book["tenSach"]; ?></a>
                                                    <p class="text-muted small">
                                                        Thể Loại: <?php echo $book["tenTheLoai"]; ?>
                                                        <br>
                                                        Tác Giả: <?php echo $book["tenTacGia"]; ?>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td> <input min = "0" id="number" name="<?php echo $book["maSach"] ?>" type="number"
                                                value="<?php echo $book["soLuong"]; ?>">
                                        <td>
                                            <div class="price-wrap"> <var
                                                    class="price"><?php echo $book["giaTien"]*$book["soLuong"]; ?></var> </div>
                                        </td>
                                        <td class="text-right d-none d-md-block">
                                            <a href="<?php echo $level.pages_path_WEB.'post/removeCart.php?id='.$book["maSach"] ?>"
                                                class="btn btn-light" data-abc="true"> Xóa Sách</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }   
                                ?>   
                                </tbody>
                                <?php }else{
                                echo '<h1><small class="text-muted">Danh Sách Trống</small></h1>';
                                $_SESSION["tongTien"] = 0;
                                $_SESSION["tongSL"] = 0;
                                }?>
                            </table>
                        </div>
                    </div>
                </aside>
                <aside class="col-lg-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div class="form-group"> <label>Mã khuyến mãi</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control coupon" name=""
                                            placeholder="Mã Khuyến Mãi">
                                        <span class="input-group-append">
                                            <button class="btn btn-primary  btn-block">Xác Nhận</button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Tổng Tiền:</dt>
                                <dd class="text-right ml-3"><?php echo  $_SESSION["tongTien"] ?></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Số Lượng:</dt>
                                <dd class="text-right ml-3"><?php echo  $_SESSION["tongSL"]  ?></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Giảm Giá:</dt>
                                <dd class="text-right text-danger ml-3">0</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Thành Tiền:</dt>
                                <dd class="text-right text-dark b ml-3"><strong><?php echo  $_SESSION["tongTien"] ?></strong></dd>
                            </dl>
                            <hr>

                            <div class="form-group">
                                <button type="submit" name="thanhToan" class="btn btn-danger btn-block">Thanh
                                    Toán</button>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="capNhatGioHang" class="btn btn-danger btn-block">Cập Nhật Giỏ Hàng</button>
                            </div>

                            <div class="form-group">
                                <a href="<?php echo $level.pages_path_WEB.'products.php'?>"
                                    class="tg-btn tg-active btn-block">Mua
                                    Thêm</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </form>
        </div>
    </div>
</div>