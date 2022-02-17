<?php 
    include_once "connection.php";
    // danh sách hóa đơn
    function findAllBill($conn){
        $billList= "SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
        FROM hoadon";
        $result = $conn->query($billList);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
    
    //Tìm hóa đơn theo id
    function findBillByID($idBill,$conn)
    {
        $findBillByID="SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
        FROM hoadon
        WHERE MaHoaDon='$idBill'";
        $result = $conn->query($findBillByID);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
        //Tìm hóa đơn theo id nguoi dat
        function findBillByIDUser($idUser,$conn)
        {
            $findBillByID="SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
            FROM hoadon
            WHERE MaDocGia='$idUser'";
            $result = $conn->query($findBillByID);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }

    //Tìm hóa đơn theo date
    function findAllBillByDate($date,$conn)
    {
        $findBillByDate="SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
        FROM hoadon
        WHERE NgayLapHD='$date' group by NgayLapHD";
        $result = $conn->query($findBillByDate);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
        //Tìm hóa đơn theo Thang va status
    function findAllBillByMonthAndStatus($month,$status,$conn)
    {
        $findBillByDate="SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
        FROM hoadon
        WHERE month(NgayLapHD)='$month' and TinhTrang = '$status'";
        $result = $conn->query($findBillByDate);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

        //Tìm hóa đơn theo date và status
        function findAllBillByDateAndStatus($date,$status,$conn)
        {
            $findBillByDate="SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
            FROM hoadon
            WHERE NgayLapHD='$date' and TinhTrang = '$status'";
            $result = $conn->query($findBillByDate);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }
                //Tìm hóa đơn theo week và status
        function findAllBillByWeekAndStatus($date,$status,$conn)
        {
            $findBillByDate="SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang FROM hoadon
                             WHERE week(NgayLapHD)=week('$date') and TinhTrang = '$status'";
            $result = $conn->query($findBillByDate);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }

    //Tìm hóa đơn theo trang thai và id reader
    function findBillByIdReaderAndStatus($maDG,$status,$conn)
    {
        $findBillByIdReaderAndStatus= "SELECT MaHoaDon,NgayLapHD,TongSoLuong,TongTien,TinhTrang
                    FROM hoadon
                    WHERE hoadon.MaDocGia = '$maDG' and hoadon.TinhTrang = $status";
        $result = $conn->query($findBillByIdReaderAndStatus);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

        //Tìm hóa đơn theo trang thai và id reader
    function findBillByStatus($status,$conn)
    {
        $findBillByStatus= "SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
                            FROM hoadon
                            WHERE hoadon.TinhTrang = $status";
        $result = $conn->query($findBillByStatus);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

    //ĐẾM SỐ BILL CHƯA DUYỆT THEO NGÀY
    function countBillPendingApprovalByDate($ngayLap,$conn){
        $count = "SELECT COUNT(MaHoaDon) as 'soLuong' FROM `hoadon` WHERE TinhTrang = 0 and NgayLapHD = '$ngayLap'";
        $result = $conn->query($count);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

        //ĐẾM SỐ BILL CHƯA DUYỆT THEO NGÀY
        function countBillPendingApproval($conn){
            $count = "SELECT COUNT(MaHoaDon) as 'soLuong' FROM `hoadon` WHERE TinhTrang = 0";
            $result = $conn->query($count);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }
               //ĐẾM SỐ BILL CHƯA DUYỆT va da duyet
        function countBillApproval($conn){
            $count = "SELECT COUNT(MaHoaDon) as 'soLuong' FROM `hoadon` WHERE  TinhTrang='1'";
            $result = $conn->query($count);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }
        //ĐẾM SỐ BILL  da duyet
        function countBill($conn){
            $count = "SELECT COUNT(MaHoaDon) as 'soLuong' FROM `hoadon` WHERE TinhTrang = '0' or TinhTrang='1'";
            $result = $conn->query($count);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }
                            
        //ĐẾM SỐ BILL CHƯA DUYỆT CỦA ĐỘC GIẢ
        function countBillPendingApprovalByIDReader($maDG,$conn){
            $count = "SELECT COUNT(MaHoaDon) as 'soLuong' FROM `hoadon`,docgia WHERE TinhTrang = 0 and hoadon.MaDocGia = docgia.MaDocGia and docgia.MaDocGia = '$maDG' ";
            $result = $conn->query($count);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }

    //Thêm hóa đơn
    function addBill($maHD,$maDG,$ngayLapHD,$soLuong,$tongTien,$conn){
        $addBill="INSERT into hoadon(MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien)
        VALUES('$maHD','$maDG','$ngayLapHD',$soLuong,$tongTien)";
         return $conn->query($addBill);    
    }
    
    //DUYỆT HÓA ĐƠN
    function updateStatusBill($status,$id,$conn){
        $updateBill="UPDATE hoadon
        set TinhTrang=$status
        WHERE MaHoaDon='$id'";
        return $conn->query($updateBill);    
    }
    //khách hàng tiềm năng
    function potentialCustomers($conn){
        $count = "SELECT Sum(TongTien) as 'tongTien',hoadon.MaDocGia as'MaDocGia',TenDocGia,DiaChi FROM hoadon,docgia WHERE TinhTrang = 1 and hoadon.MaDocGia = docgia.MaDocGia group by hoadon.MaDocGia";
        $result = $conn->query($count);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
        //Sản phẩm bán chạy
        function sellingProducts($conn){
            $count = "SELECT Sum(chitiethoadon.SoLuong) as'tong',sach.MaSach,TenSach,GiaBan,TenTheLoai,TenTacGia,sach.TrangThai FROM hoadon,sach,chitiethoadon,theloai,tacgia WHERE TinhTrang = 1 and hoadon.MaHoaDon = chitiethoadon.MaHoaDon and chitiethoadon.MaSach=sach.MaSach and sach.MaTheLoai=theloai.MaTheLoai and sach.MaTacGia=tacgia.MaTacGia group by sach.MaSach Order by tong desc ";
            $result = $conn->query($count);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }

        //TÌM HÓA ĐƠN THEO TỪ KHÓA
    function findBillByKeywordInColumn($column,$conn)
    {
        $findBillByKeyword="SELECT MaHoaDon,docgia.MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
        FROM hoadon, docgia
        WHERE hoadon.MaDocGia=docgia.MaDocGia and ( $column )";
        $result = $conn->query($findBillByKeyword);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
    // //HÓA ĐƠN 
    // function findBillByKeywordInColumnAndStatus($status,$column,$conn)
    // {
    //     $findBillByID="SELECT MaHoaDon,MaDocGia,NgayLapHD,TongSoLuong,TongTien,TinhTrang
    //     FROM hoadon, docgia
    //     WHERE hoadon.MaDocGia=docgia.MaDocGia and ( $column ) and hoadon.TinhTrang=$status";
    //     $result = $conn->query($findBillByID);
    //     $result->setFetchMode(PDO::FETCH_ASSOC);
    //     return $result;
    // }
?>