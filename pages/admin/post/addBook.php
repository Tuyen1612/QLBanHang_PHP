<?php
    session_start();
    $level="../../../";
    include_once $level."config.php";
    include_once $level."Database/book.php";
    include_once $level."Database/category.php";
    include_once $level."Database/random.php";
    include_once $level."Database/detailBook.php";
    include_once $level."Database/uploadImage.php";
//UPLOAD HÌNH ẢNH
if(isset($_POST["uploadIMG"])){
    //NƠI LƯU ẢNH
    $folder = $level.img_path."books/";
    
    $hinhAnh = $_FILES["hinhAnh"];
    
    $mess = uploadIMG($folder,$hinhAnh);

    //KIỂM TRA NẾU MESS == NULL LÀ LƯU THÀNH CÔNG
    if($mess != null){
        $url = $level.pages_path_AD."template/product.php";
        $_SESSION["message"] = $mess;
    }else{
        $url = $level.pages_path_AD."template/product.php?hasIMG=true&img=".$_SESSION["img"];
    }
    unset($_FILES["hinhAnh"]);
    header("location:".$url);
}

//XỬ LÝ NÚT THÊM SẢN PHẨM
if(isset($_POST["addProduct"]))
{
    if($_GET["check"]==0){
        $_SESSION["message"] = '<div class="alert alert-danger" role="alert">
        <strong>Thất bại, Vui lòng chọn hình ảnh</strong>
        </div>';
        $url = $level.pages_path_AD."template/product.php?hasIMG=true";
        header("location:".$url);
        exit();
    }
    $idDetailBook = random("CT");
    $idBook = random("S");
    $book = array("maSach" => $idBook,
                "tenSach"=>$_POST["tenSach"],
                "maLoai"=>$_POST["loaiSach"],
                "maTG"=>$_POST["tacGia"],
                "giaMacDinh"=>$_POST["giaMacDinh"],
                "giaBan"=>$_POST["giaBan"],
                "soLuong"=>$_POST["soLuong"],
                "hinhAnh"=>$_SESSION["img"]
            );


    $detailBook = array("maCT"=>$idDetailBook,
                        "dangSach"=>$_POST["dangSach"],
                        "soTrang"=>$_POST["soTrang"], 
                        "kichThuoc"=>$_POST["kichThuoc"],
                        "ngayXB"=>$_POST["ngayXB"],
                        "maNXB"=>$_POST["nhaXB"],
                        "ngonNgu"=>$_POST["ngonNgu"],
                        "moTa"=>$_POST["moTa"]
                    );


    if($book["tenSach"]=="" ||
       $book["maLoai"] == "(None)" ||
       $book["maTG"] =="(None)" || 
       $book["giaMacDinh"]=="" ||
       $book["giaBan"]=="" || 
       $detailBook["dangSach"]==""||
       $detailBook["kichThuoc"] =="" ||
       $detailBook["ngayXB"] =="" ||
       $detailBook["maNXB"] =="(None)"||
       $detailBook["ngonNgu"]=="(None)"||
       $detailBook["moTa"]==""){
        $_SESSION["message"] = '<div class="alert alert-danger" role="alert">
        <strong>Thất bại, Vui lòng không để trống thông tin</strong>
        </div>';
       }
       else{
        addDetailBook($detailBook["maCT"],$detailBook["dangSach"],$detailBook["soTrang"],
        $detailBook["kichThuoc"],$detailBook["ngayXB"],$detailBook["maNXB"],$detailBook["ngonNgu"],
        $detailBook["moTa"],$conn);

        addBook($book["maSach"],$book["maLoai"],$book["tenSach"],$book["hinhAnh"],
        $book["maTG"],$book["giaBan"],$book["giaMacDinh"],$book["soLuong"],$detailBook["maCT"],$conn);
        
        updateAmountBook($book["maLoai"],$conn);
        $_SESSION["message"] = '<div class="alert alert-success" role="alert">
                    <strong>Thêm thành công</strong>
                </div>';
        }
        unset($_SESSION["img"]);
        $url = $level.pages_path_AD."template/product.php";
        header("location:".$url);
}
?>