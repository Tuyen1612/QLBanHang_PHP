<!-- include connection.php -->
<?php 
    include_once "connection.php";
    //LẤY TẤT CẢ CÁC SÁCH
    function findAllBook($conn){
        $listBook = "SELECT MaSach,TenTheLoai,TenSach,chitietsach.SoTrang,TenTacGia,sach.HinhAnh,GiaBan,GiaMacDinh,LuotMua,SoLuong,sach.TrangThai,MoTa,tacgia.MaTacGia
        FROM sach, theloai, tacgia,chitietsach
        WHERE sach.MaTheLoai=theloai.MaTheLoai and sach.MaTacGia=tacgia.MaTacGia and sach.MaChiTiet=chitietsach.MaChiTiet";

            $result = $conn->query($listBook);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
    }
    
    function findBookByKeyWordInColumn($column,$conn)
    {
        $books = "SELECT MaSach,TenTheLoai,sach.MaTheLoai,TenSach,chitietsach.SoTrang,TenTacGia,sach.MaTacGia,sach.HinhAnh,GiaBan,GiaMacDinh,LuotMua,SoLuong,sach.TrangThai,MoTa
        FROM sach, theloai, tacgia,chitietsach
        WHERE sach.MaTheLoai=theloai.MaTheLoai and sach.MaTacGia=tacgia.MaTacGia and sach.MaChiTiet=chitietsach.MaChiTiet and ( $column )";
        $result = $conn->query($books);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

    //LẤY SÁCH THEO ID (CÓ BNHIU ID THÌ CÓ BẤY NHIÊU HÀM TÌM THEO ID ĐÓ)
    function findBookByID($id,$conn){
        $book = "SELECT MaSach,TenTheLoai,sach.MaTheLoai,TenSach,chitietsach.SoTrang,TenTacGia,sach.MaTacGia,sach.HinhAnh,GiaBan,GiaMacDinh,LuotMua,SoLuong,sach.TrangThai,MoTa
        FROM sach, theloai, tacgia,chitietsach
        WHERE sach.MaTheLoai=theloai.MaTheLoai and sach.MaTacGia=tacgia.MaTacGia and sach.MaChiTiet=chitietsach.MaChiTiet and MaSach='$id'";
        $result = $conn->query($book);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

    //LẤY SÁCH THEO TINH TRẠNG
    function findBookByStatus($stt,$conn)
    {
        $findBookByStatus="SELECT MaSach,TenTheLoai,TenSach,chitietsach.SoTrang,TenTacGia,sach.HinhAnh,GiaBan,GiaMacDinh,LuotMua,SoLuong,sach.TrangThai, chitietsach.MoTa,tacgia.MaTacGia
                    FROM sach, theloai, tacgia,chitietsach
                    WHERE sach.MaTheLoai=theloai.MaTheLoai and sach.MaTacGia=tacgia.MaTacGia and sach.MaChiTiet=chitietsach.MaChiTiet and sach.TrangThai=$stt";
         $result = $conn->query($findBookByStatus);
         $result->setFetchMode(PDO::FETCH_ASSOC);
         return $result;
    }

 //LẤY SÁCH THEO ID TAC GIA
 function findBookByIDAuthor($idAuthor,$conn)
 {
     $findBookByIDAuthor="SELECT MaSach,TenTheLoai,TenSach,chitietsach.SoTrang,TenTacGia,sach.HinhAnh,GiaBan,GiaMacDinh,LuotMua,SoLuong,sach.TrangThai, chitietsach.MoTa,sach.MaTacGia
                 FROM sach, theloai, tacgia,chitietsach
                 WHERE sach.MaTheLoai=theloai.MaTheLoai and sach.MaTacGia=tacgia.MaTacGia and sach.MaChiTiet=chitietsach.MaChiTiet and sach.MaTacGia='$idAuthor'";
      $result = $conn->query($findBookByIDAuthor);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      return $result;
 }

 //LIST SACH BAN CHẠY NHẤT
 function findBookHotSell($conn)
 {
     $findBookHotSell="SELECT sach.MaSach,TenSach,TenTacGia,sach.HinhAnh,GiaBan,GiaMacDinh,sach.TrangThai,sach.MaTacGia
     FROM sach, theloai, tacgia,chitiethoadon
     WHERE  sach.MaTacGia=tacgia.MaTacGia  and sach.MaSach=chitiethoadon.MaSach 
     GROUP BY sach.MaSach ORDER BY sum(chitiethoadon.SoLuong) DESC";
     $result = $conn->query($findBookHotSell);
     $result->setFetchMode(PDO::FETCH_ASSOC);
     return $result;
 }
    //THÊM SÁCH
    function addBook($maSach,$maTL,$tenSach,$hinhAnh,$maTG,$giaBan,$giaMacDinh,$soLuong,$maChiTiet,$conn){
    $addBook="INSERT INTO sach(MaSach,MaTheLoai,TenSach,HinhAnh,MaTacGia,GiaBan,GiaMacDinh,SoLuong,MaChiTiet)
            VALUES('$maSach','$maTL','$tenSach','$hinhAnh','$maTG',$giaBan,$giaMacDinh,$soLuong,'$maChiTiet')";
        return $conn->query($addBook);
    }     

    //CẬP NHẬT SÁCH
    function updateBook($maTL,$tenSach,$maTG,$hinhAnh,$giaBan,$giaMacDinh,$id,$conn){
    $updateBook="UPDATE sach
                SET MaTheLoai= '$maTL' ,TenSach= '$tenSach',HinhAnh = '$hinhAnh' ,MaTacGia='$maTG',GiaBan=$giaBan,GiaMacDinh=$giaMacDinh
                WHERE MaSach='$id'";
        return $conn->query($updateBook);
    }

     //XÓA SÁCH
     function deleteBook($trangThai,$id,$conn){
        $updateBook="UPDATE sach
                    SET trangthai = $trangThai
                    WHERE MaSach='$id'";
            return $conn->query($updateBook);
            }
?>