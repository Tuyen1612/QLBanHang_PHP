
<?php
include_once "connection.php";
// danh sách bình luận
function findAllComment($conn){
	$Comment="SELECT MaBinhLuan,MaBaiViet,binhluan.MaDocGia,NoiDung,binhluan.TrangThai,HinhAnh,TenDocGia
	FROM binhluan,docgia
	Where binhluan.MaDocGia=docgia.MaDocGia";
	$result = $conn->query($Comment);
	$result->setFetchMode(PDO::FETCH_ASSOC);
	return $result;
}

                        
?>