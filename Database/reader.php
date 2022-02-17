<?php 
    include_once "connection.php";
    // danh sách đọc giả
    function findAllReader($conn){
        $readerList= "SELECT MaDocGia,TenDocGia,UserName,HinhAnh,NgaySinh,TienHienCo,DiaChi,TrangThai
        FROM docgia";
        $result = $conn->query($readerList);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }


    //Tìm đọc giả theo id
    function findReaderByID($idAuthor,$conn)
    {
        $findReaderByID="SELECT MaDocGia,TenDocGia,HinhAnh,NgaySinh,TienHienCo,DiaChi,TrangThai
        FROM docgia
        WHERE MaDocGia='$idAuthor'";
        $result = $conn->prepare($findReaderByID);
        $result->execute();
        $row=$result->fetchALL();
        return $row;
    }

    //Tìm đọc giả theo username và password
    function findReaderByUserNameAndPassword($username,$password,$conn)
    {
        $reader="SELECT MaDocGia,TenDocGia,HinhAnh,NgaySinh,TienHienCo,DiaChi,TrangThai,UserName,Password
        FROM docgia
        WHERE UserName='$username' and Password = '$password'";
        $result = $conn->query($reader);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

        //Tìm đọc giả theo username và password
        function findReaderByUserNameAndPasswordAndStatus($username,$password,$status,$conn)
        {
            $reader="SELECT MaDocGia,TenDocGia,HinhAnh,NgaySinh,TienHienCo,DiaChi,TrangThai,UserName,Password
            FROM docgia
            WHERE UserName='$username' and Password = '$password' and TrangThai = $status";
            $result = $conn->query($reader);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }
//TÌM ĐỌC GIẢ THEO TỪ  KHÓA
        function findReaderByKeywordInColumn($column,$conn)
        {
            $reader="SELECT MaDocGia,TenDocGia,HinhAnh,NgaySinh,DiaChi,TrangThai,UserName
                    FROM docgia
                    WHERE $column";
            $result = $conn->query($reader);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }
    //Tìm đọc giả theo trang thai
    function findReaderByStatus($stt,$conn)
    {
        $findReaderByStatus= "SELECT MaNXB,TenNXB
                    FROM nhaxuatban
                    WHERE TrangThai='$stt'";
        $result = $conn->query($findReaderByStatus);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

    //Thêm đọc giả
    function addReader($maDG,$hinhAnh,$tenDG,$ngaySinh,$diaChi,$UserName,$Pass,$conn){
    $addReader="INSERT into docgia(MaDocGia,HinhAnh,TenDocGia,NgaySinh,DiaChi,UserName,Password)
    VALUES('$maDG','$hinhAnh','$tenDG','$ngaySinh','$diaChi','$UserName','$Pass')";
    return $conn->query($addReader);
    }

    //Cập nhật thông tin đọc giả
    function updateReader($hinhAnh,$tenDG,$ngaySinh,$diaChi,$maDG,$conn){
    $updateReader="UPDATE docgia
    set HinhAnh='$hinhAnh',TenDocGia='$tenDG',NgaySinh='$ngaySinh',DiaChi='$diaChi'
    WHERE MaDocGia='$maDG'";
    return $conn->query($updateReader);
    }
//Đổi mk
    function changePass($newPass,$maDG,$conn){
    $changePass="UPDATE docgia set Password='$newPass' WHERE MaDocGia='$maDG'";
    
    return $conn->query($changePass);
    }
    //XÓA ĐỘC GIẢ
    function deleteReader($trangThai,$maDG,$conn){ 
        $deleteReader = "UPDATE docgia SET TrangThai = $trangThai where MaDocGia = '$maDG'";
        return $conn->query($deleteReader);
    }
?>
