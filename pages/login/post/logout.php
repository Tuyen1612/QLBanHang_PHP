<?php 
    session_start();
    $level = "../../../";
    include_once $level."config.php";
    if($_SESSION["account"]["role"]=="ADMIN")
      $url = $level.pages_path_LG."login.php";
    else $url = $level."index.php";
    session_destroy();
    header("location:".$url);
    exit();
?>