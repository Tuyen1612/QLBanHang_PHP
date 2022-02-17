<!-- include connection.php -->
<?php 
    include_once "connection.php";
    //LẤY TẤT CẢ CÁC CHI TIẾT SÁCH
    function findAllDetailBook($conn){
    $detailBook = "SELECT TenSach,sach.TrangThai,GiaBan,GiaMacDinh,chitietsach.MoTa,sach.LuotMua,TenTacGia,sach.HinhAnh AS `HinhAnhSach`,tacgia.HinhAnh AS `HinhAnhTacGia`,TenNXB,TenTheLoai,DangKichThuoc,ThongTin,
            MoTa,NgonNgu,SoTrang,day(NgayXuatBan) AS `ngayXB`,month(NgayXuatBan) AS `thangXB`,year(NgayXuatBan) AS `namXB`
    from sach,chitietsach,theloai,tacgia,nhaxuatban
    where sach.MaChiTiet=chitietsach.MaChiTiet and sach.MaTacGia=tacgia.MaTacGia
        and sach.MaTheLoai=theloai.MaTheLoai and chitietsach.MaNXB=nhaxuatban.MaNXB";
        $result = $conn->query($detailBook);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }


    //LẤY CHI TIẾT SÁCH THEO ID (CÓ BNHIU ID THÌ CÓ BẤY NHIÊU HÀM TÌM THEO ID ĐÓ)
    function findDetailBookByID($id,$conn){
        $findDetailBook="SELECT TenSach,sach.TrangThai,sach.GiaBan,sach.GiaMacDinh,TenTacGia,sach.HinhAnh AS `HinhAnhSach`,tacgia.HinhAnh AS `HinhAnhTacGia`,TenNXB,TenTheLoai,Dang,KichThuoc,ThongTin,tacgia.MaTacGia,
               MoTa,NgonNgu,SoTrang,day(NgayXuatBan) AS `ngayXB`,month(NgayXuatBan) AS `thangXB`,year(NgayXuatBan) AS `namXB`, MaSach,day(NgaySinh),month(NgaySinh),year(NgaySinh)
        from sach,chitietsach,theloai,tacgia,nhaxuatban
        where sach.MaChiTiet=chitietsach.MaChiTiet and sach.MaTacGia=tacgia.MaTacGia
            and sach.MaTheLoai=theloai.MaTheLoai and chitietsach.MaNXB=nhaxuatban.MaNXB and MaSach='$id'";
            $result = $conn->query($findDetailBook);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
    }
    //THÊM CHI TIẾT SÁCH
    function addDetailBook($maCT,$dang,$soTrang,$kichThuoc,$ngayXuatBan,$maNXB,$ngonNgu,$MoTa,$conn){
        $addDetailBook="INSERT INTO chitietsach(MaChiTiet,Dang, SoTrang, KichThuoc,NgayXuatBan, MaNXB, NgonNgu , MoTa)
            VALUES ('$maCT','$dang',$soTrang,'$kichThuoc','$ngayXuatBan','$maNXB','$ngonNgu','$MoTa')";
            return $conn->query($addDetailBook);
    }
    //CẬP NHẬT CHI TIẾT SÁCH
    // function update
    // $updateDetailBook="UPDATE chitietsach
    // SET Dang=$dang,SoTrang=$soTrang,KichThuoc=$kichThuoc,NgayXuatBan=$ngayXuatBan,MaNXB=$maNXB,NgonNgu=$ngonNgu,MaTieuChuan10=$MTC10,
    //     MaTieuChuan13=$MTC13,DangKhac=$dangKhac,MoTa=$moTa WHERE MaChiTiet=$idDetail";
?>