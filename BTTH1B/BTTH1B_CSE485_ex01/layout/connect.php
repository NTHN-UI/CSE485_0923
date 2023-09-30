<?php  
$strConnection = mysqli_connect('localhost','root','1234','cse485_0923_th1b');
    if(!$strConnection){
        die("can not connect");

    }
    mysqli_set_charset($strConnection,'utf8');