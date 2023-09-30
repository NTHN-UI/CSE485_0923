<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php 
require 'layout/connect.php';
$sql = 'select * from baiviet';
$sings = mysqli_query($strConnection, $sql);
?>
<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <?php include './layout/header.php'?>
                <div class="col-md-12">
                    <div class="slider">
                        <img src="./img/latin.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="top">
                        <span>Top bài hát yêu thích</span>
                    </div>
                </div>
                <?php foreach ($sings as $sing){?>
                    <div class="col-md-3">
                        <div class="sing">
                            <a href="detail.php?id=<?= $sing['ma_bviet'] ?>">
                                <img src="<?=$sing['hinhanh']?>" alt="">
                            </a>
                            <span><?=$sing['ten_bhat']?></span>
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </div>
    </div>
    
    
</body>
</html>