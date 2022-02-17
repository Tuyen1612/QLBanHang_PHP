<?php 
    include_once "connection.php";
    // danh sách chi tiết hóa đơn
    function findAllDetailBill($conn){
        $billdetailList= "SELECT MaHoaDon,MaSach,DonGia,SoLuong,ThanhTien
        FROM chitiethoadon";
        $result = $conn->query($billdetailList);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
    //Tìm chi tiết hóa đơn theo id
    function findDetailBillByIDBill($idBill,$conn)
    {
        $detailBills="SELECT MaHoaDon,MaSach,DonGia,SoLuong,ThanhTien
        FROM chitiethoadon
        WHERE MaHoaDon='$idBill'";
        $result = $conn->query($detailBills);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

    //Thêm hóa chi tiết đơn
    function addDetailBill($maHD,$maSach,$DonGia,$soLuong,$thanhTien,$conn){
        $addBilldetail="INSERT into chitiethoadon(MaHoaDon,MaSach,DonGia,SoLuong,ThanhTien)
        VALUES('$maHD','$maSach',$DonGia,$soLuong,$thanhTien) ";
        return $conn->query($addBilldetail);
    }
    // //Cập nhật thông tin chi tiết hóa đơn
    // $updateBilldetail="UPDATE chitiethoadon
    // set MaSach=$maSach,DonGia=$donGia,SoLuong=$SL,ThanhTien=$thanhTien
    // WHERE MaHoaDon=$idBill";

?>