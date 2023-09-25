<?php
require '../layout/connect.php';
if (isset($_GET['ma_tloai']))
  $ma_tloai = $_GET['ma_tloai'];

$sql = "delete from theloai where ma_tloai = '$ma_tloai'";
mysqli_query($strConnection, $sql);

mysqli_close($strConnection);

header('location:category.php');