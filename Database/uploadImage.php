<?php

function uploadIMG($folder,$hinhAnh){
   //KIỂM TRA FILE ẢNH CÓ DỮ LIỆU
   if(!isset($hinhAnh))
         return  '<div class="alert alert-danger" role="alert">
         <strong>Dữ liệu không đúng cấu trúc</strong>
         </div>';
   //KIỂM TRA FILE CÓ BỊ LỖI == 0 - KHÔNG LỖI
   if ($hinhAnh['error'] != 0)

        return  '<div class="alert alert-danger" role="alert">
         <strong>Dữ liệu upload bị lỗi</strong>
         </div>';

   //ĐỊNH DẠNG FILE NHẬN
   $allowtypes    = array('jpg', 'png', 'jpeg');

   //TÊN IMANGE
   $fileName = $hinhAnh["name"];

   //HÀM GETIMAGESIZE DÙNG KIỂM TRA CÓ PHẢI FILE LÀ ẢNH
   $check = getimagesize($hinhAnh["tmp_name"]);

   if($check !== false)
   {   
       //Lấy phần mở rộng của file (jpg, png, ...)
       $imageFileType = pathinfo($fileName,PATHINFO_EXTENSION);

       //KIỂM TRA ĐUÔI FILE CÓ HỢP LỆ
       if (!in_array($imageFileType,$allowtypes ))
        return  '<div class="alert alert-danger" role="alert">
        <strong>Chỉ được upload các định dạng JPG, PNG, JPEG</strong>
        </div>';

   }
   else
        return  '<div class="alert alert-danger" role="alert">
        <strong>Không phải file ảnh.</strong>
        </div>';
    if (move_uploaded_file($hinhAnh["tmp_name"], $folder.$fileName)){
        $_SESSION["img"] = $fileName;
        return null;
    }
    else
    return  '<div class="alert alert-danger" role="alert">
    <strong>Không upload được file, có thể do kiểu file không đúng ...</strong>
    </div>';
}
?>