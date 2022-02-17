<?php 
    include_once "connection.php";
    // danh sách thể loại
    function  findAllCategory($conn){
    $listCategory= "SELECT MaTheLoai,TenTheLoai,SoSach,TrangThai
                FROM theloai";
         $result = $conn->query($listCategory);
         $result->setFetchMode(PDO::FETCH_ASSOC);
         return $result;
    }
    function  findAllCategoryByQuantity($quantity,$conn){
        $listCategory= "SELECT MaTheLoai,TenTheLoai,SoSach,TrangThai
                    FROM theloai LIMIT $quantity";
             $result = $conn->query($listCategory);
             $result->setFetchMode(PDO::FETCH_ASSOC);
             return $result;
        }
    //Tìm thể loại theo id
    function findCategoryByID($id,$conn){
    $category="SELECT MaTheLoai,TenTheLoai,SoSach,TrangThai
                    FROM theloai
                    WHERE MaTheLoai='$id'";
          $result = $conn->query($category);
          $result->setFetchMode(PDO::FETCH_ASSOC);
          return $result;
    }

    //Thêm thể loại
    function addCategory($maTL,$tenTL,$conn){
        $addAuthor="INSERT into theloai(MaTheLoai,TenTheLoai)
        VALUES('$maTL','$tenTL')";
        return $conn->query($addAuthor);
    }

    //Cập nhật thông tin thể loại
    function updateCategory($tenTL,$id,$conn){
        $updateCategory="UPDATE theloai
        SET TenTheLoai='$tenTL'
        WHERE MaTheLoai='$id'";
        return $conn->query($updateCategory);
    }

    //Cập nhật số lượng sách của loại
    function updateAmountBook($id,$conn){
        $updateAmount="UPDATE theloai
        SET SoSach = SoSach + 1 
        WHERE MaTheLoai='$id'";
        return $conn->query($updateAmount);
    }
    //XÓA LOẠI 
    function deleteCategory($trangThai,$id,$conn){
        $deleteCategory="UPDATE theloai
         SET TrangThai = $trangThai
        WHERE MaTheLoai='$id'";
        return $conn->query($deleteCategory);
    }
?>