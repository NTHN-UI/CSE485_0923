<?php
if(isset($_GET['id'])) {
    $uid = $_GET['id'];
    $sql = "select * from users where id = $uid ";
    echo $uid;


}
 ?>
