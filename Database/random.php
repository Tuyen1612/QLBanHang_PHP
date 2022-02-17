<?php
 
    function random($firstString){
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    return $firstString.'-'.substr(str_shuffle($permitted_chars), 0,4 );
    }
?>