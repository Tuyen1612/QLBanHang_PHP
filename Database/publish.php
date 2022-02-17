<?php 
    include_once "connection.php";
    // danh sách nhà xuất bản
    function findAllPublish($conn){
    $publishList= "SELECT MaNXB,TenNXB
                    FROM nhaxuatban";
                    $result = $conn->query($publishList);
                    $result->setFetchMode(PDO::FETCH_ASSOC);
                    return $result;
    }
    //Tìm nhà xuất bản theo id
    function findPublishByID($id,$conn){
    $findPublishByID="SELECT MaNXB,TenNXB
                    FROM nhaxuatban
                        WHERE MaHoaDon='$id'";
    $result = $conn->query($findPublishByID);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    return $result;
}

    //Thêm nhà xuất bản'
    function addPublish($maNXB,$tenNXB,$conn){
    $addPublish=    "INSERT into nhaxuatban(MaNXB,TenNXB)
                    VALUES('$maNXB','$tenNXB')";
    return $conn->query($addPublish);    
}
    //Cập nhật thông tin nhà xuất bản
    function updatePublish($tenNXB,$id,$conn){
    $updatePublish="UPDATE nhaxuatban
                    set TenNXB=$tenNXB
                    WHERE MaHoaDon='$id'";
    return $conn->query($updatePublish)    ;
}
?>