<?php
require '../layout/connect.php';
if (isset($_POST['ma_tloai']))
  $ma_tloai = $_POST['ma_tloai'];
if (isset($_POST['ten_tloai']))
  $ten_tloai = $_POST['ten_tloai'];

$sql = "update theloai set ten_tloai = '$ten_tloai' where ma_tloai = '$ma_tloai';";
mysqli_query($strConnection, $sql);

mysqli_close($strConnection);

header('location: category.php');