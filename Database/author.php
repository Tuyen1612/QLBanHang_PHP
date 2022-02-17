<?php 
    include_once "connection.php";
    // danh sách tác giả
    function findAllAuthor($conn){
        $listAuthor= "SELECT MaTacGia,TenTacGia,HinhAnh,day(NgaySinh),month(NgaySinh),year(NgaySinh),NgaySinh,SoSachXuatBan,TrangThai,ThongTin
                        FROM tacgia";
        $result = $conn->query($listAuthor);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

        // danh sách tác giả
        function findAllAuthorByStatus($status,$conn){
            $listAuthor= "SELECT MaTacGia,TenTacGia,HinhAnh,day(NgaySinh),month(NgaySinh),year(NgaySinh),SoSachXuatBan,TrangThai,ThongTin
                            FROM tacgia
                            WHERE TrangThai = $status";
            $result = $conn->query($listAuthor);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }

    //Tìm tác giả theo id
    function findAuthorByID($id,$conn){
        $author="SELECT TenTacGia,MaTacGia,HinhAnh,day(NgaySinh),month(NgaySinh),year(NgaySinh),NgaySinh,SoSachXuatBan,TrangThai,ThongTin
                    FROM tacgia
                    WHERE MaTacGia='$id'";
        $result = $conn->query($author);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

       //Tìm tác giả theo id và status
       function findAuthorByIDAndStatus($id,$status,$conn){
        $author="SELECT TenTacGia,HinhAnh,day(NgaySinh),month(NgaySinh),year(NgaySinh),SoSachXuatBan,TrangThai,ThongTin
                    FROM tacgia
                    WHERE MaTacGia='$id' and TrangThai = $status";
        $result = $conn->query($author);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

    //Tìm tác giả theo id và status
    function findAuthorByKeywordInColumn($column,$conn){
        $author="SELECT MaTacGia,TenTacGia,HinhAnh,day(NgaySinh),month(NgaySinh),year(NgaySinh),NgaySinh,SoSachXuatBan,TrangThai,ThongTin
                    FROM tacgia
                    WHERE $column";
        $result = $conn->query($author);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

    //Tìm tác giả có sách bán chạy nhất
    function findAuthorBestSell($quatity,$conn)
    {
        $AuthorBestSell="SELECT tacgia.MaTacGia, sach.MaSach, SUM(chitiethoadon.SoLuong),tacgia.HinhAnh,TenTacGia,TenSach,SoSachXuatBan
         from tacgia, sach,chitiethoadon 
        WHERE tacgia.MaTacGia = sach.MaTacGia and sach.MaSach = chitiethoadon.MaSach GROUP by tacgia.MaTacGia,sach.MaSach 
        ORDER by sum(chitiethoadon.SoLuong) DESC LIMIT $quatity";
        $result = $conn->query($AuthorBestSell);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }

    //Thêm tác giả
    function addAuthor($maTG,$hinhAnh,$tenTG,$ngaySinh,$soSachXB,$thongTin,$conn){
        $addAuthor="INSERT into tacgia(MaTacGia,HinhAnh,TenTacGia,NgaySinh,SoSachXuatBan,ThongTin)
        VALUES('$maTG','$hinhAnh','$tenTG','$ngaySinh',$soSachXB,'$thongTin')";
        return $conn->query($addAuthor);
    }

    //Cập nhật thông tin tác giả
    function updateAuthor($tenTG,$ngaySinh,$thongTin,$id,$conn){
        $updateAuthor="UPDATE tacgia
        set TenTacGia='$tenTG',NgaySinh='$ngaySinh',ThongTin='$thongTin'
        WHERE MaTacGia='$id'";
        return $conn->query($updateAuthor);
    }

    //XÓA TÁC GIẢ
    function deleteAuthor($trangThai,$id,$conn){
        $deleteAuthor="UPDATE tacgia
        set TrangThai = $trangThai
        WHERE MaTacGia='$id'";
        return $conn->query($deleteAuthor);
    }
?>