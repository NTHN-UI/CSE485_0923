<?php  
$strConnection = mysqli_connect('localhost','root','1234','mysql');
    if(!$strConnection){
        die("can not connect");

    }
    mysqli_set_charset($strConnection,'utf8');