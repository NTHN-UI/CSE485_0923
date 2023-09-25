<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
<body>
    <?php 
    
    ?>
    <div class="main">
        <div class="container">
            <div class="row">
                <?php include'./layout/header.php' ?>
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="login-main w-25 py-3" style="background-color: #747474;">
                        <div class="login d-flex px-2">
                            <h6 class="text-white fw-normal ">Sign In</h6>    
                        </div>
                        <div class="form px-3 pt-3 pb-3 border-top border-bottom border-light">
                            <form class="d-flex flex-column gap-3">
                                <div class="form-group d-flex align-items-center bg-white rounded">
                                    <i class="fa-solid fa-user px-2 py-1"></i>
                                    <input style="border: none" type="text" class="form_input" id="" placeholder="username">
                                </div>
                                <div class="form-group d-flex align-items-center bg-white rounded">
                                    <i class="fa-solid fa-key px-2 py-1"></i>
                                    <input style="border: none" type="password" class="form_input" id="" placeholder="password">
                                </div>
                                <div class="form-check d-flex align-items-center gap-2">
                                    <input type="checkbox" class="form-check-input" id="Check">
                                    <label for="Check" class="text-white">Remember me</label>
                                </div>
                                <a href="./index.php" class="btn btn-warning text-black align-self-end px-3 py-1">Login</a>
                
                                </form>
                    </div>
                    <div class="content d-flex flex-column align-items-center ">
                        <span>Don't have an account <a class="text-decoration-none " style="color:yellow;" href="">Sign Up</a></span>
                        <a class="text-decoration-none"  style="color:yellow;"  href="">Forgot your pw?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>