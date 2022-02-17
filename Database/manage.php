<?php
    include_once "connection.php";
    //LẤY TẤT CẢ MANAGE
    function findAllManage($conn){ 
        $listManager = "SELECT id, username ,email,firstName,lastName,password,role FROM manage";
        $result = $conn->query($listManager);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;    
    }
    //LẤY MANAGE THEO USERNAME PASSWORD
    function findManageByUserNameAndPassword($urn,$pass,$conn){
        $manager = "SELECT id, username ,email,firstName,lastName,password,role FROM manage WHERE username = '$urn' and password = '$pass'";
        $result = $conn->query($manager);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;   
    }
    //CẬP NHẬT THÔNG TIN
    function update($email,$firstName,$lastName,$pass,$id,$conn){
        $update = "update manage set email = '$email',firstName = '$firstName',lastName = '$lastName', password = '$pass' where id = '$id'";
        $result = $conn->query($update);
        return $result;
    }

?>