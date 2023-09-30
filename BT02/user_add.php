<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<?php 
    require_once './connection.php'; 
    $sql = "select * from users where id = '$id'";
    $users = mysqli_query($strConnection, $sql);
 ?>
<body>

<div class="main">
        <div class="container-fluid">
            <div class="row">
                <?php include './layout/sidebar.php' ?>
                <div class="col-md-9">
                    <?php include './layout/header.php' ?>
                    <div class="main_content">
                        <div class="content_top">
                            <span class="new_user">New User Form</span>
                        </div>
                        <div class="content_body">
                            <form action="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="content_left">
                                                <img class="avarta" src="./images/manager.jpg"  alt="">
                                                <div class="form_check">
                                                    <input type="checkbox" name="status" id="status">
                                                    <span>is active</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="content_right">
                                                <div class="right">
                                                    <div class="form_group">
                                                        <label for="" class="form_label">First Name</label>
                                                        <input type="text" name="firstName" id="" class = "form_input" placeholder="First Name">
                                                    </div>
                                                    <div class="form_group">
                                                        <label for="" class="form_label">Last Name</label>
                                                        <input type="text" name="lastName" id="" class = "form_input" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <label for="" class="form_label">User Name<span class="mandatory">*</span></label>
                                                    <input class="form_input" type="text" name="" id="" placeholder="User Name">
                                                    <span class="form_message"></span>
                                                </div>
                                                <div class="form_group">
                                                    <label for="" class="form_label">Email <span class="mandatory">*</span></label>
                                                    <input class = "form_input" type="text" name="" id="" placeholder="Email">
                                                    <span class="form_message"></span>
                                                </div>
                                                <div class="form_group">
                                                    <label for="" class="form_label">Phone Number <span class="mandatory">*</span></label>
                                                    <input class = "form_input" type="text" name="phoneNumber" id="" placeholder="PhoneNumber">
                                                    <span class="form_message"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="content_center">
                                    <div class="center_one">
                                        <div class="form_group">
                                            <div class="role">
                                                <label for="" class="form_label">Role</label>
                                                <select class="form_input">
                                                    <option value="default">Select the Role</option>
                                                    <option value="role1">Manager</option>
                                                    <option value="role2">Customer</option>
                                                </select>
                                                <span class="form_message"></span>
                                            </div>
                                         </div>
                                        <div class="form__group">
                                            <div class="gender">
                                                <label for="gender" class="form_label">Gender<span class="mandatory">*</span></label>
                                                <select class="form_input">
                                                    <option value="default">Choose gender</option>
                                                    <option value="gender1">Male</option>
                                                    <option value="gender2">Female</option>
                                                    <option value="gender3">Others</option>
                                                </select>
                                                <span class="form_message"></span>
                                            </div>
                                        </div>
                                        <div class="form__group">
                                            <div class="date">
                                                <label for="" class="form_label">Date of Birth<span class="mandatory">*</span></label>
                                                <input class="form_input" type="date" name="" id="">
                                                <span class="form_message"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="center_second">
                                        <div class="form__group">
                                            <label for="" class="form_label">Facebook URL</label>
                                            <input class="form__input" type="text" name="" id="">
                                            <span class="form_message"></span>
                                        </div>
                                        <div class="form__group">
                                            <label for="" class="form_label">Twitter URL</label>
                                            <input class="form__input" type="text" name="" id="">
                                            <span class="form_message"></span>
                                        </div>
                                        <div class="form__group">
                                            <label for="" class="form_label">Linkedin URL</label>
                                            <input class="form__input" type="text" name="" id="">
                                            <span class="form_message"></span>
                                        </div>
                                
                                    </div>
                                    <div class="form__group">
                                        <div class="about">
                                            <label class="form_label" for="about">About</label>
                                            <textarea class="form__input" name="about" id="" cols="120" rows="4" placeholder="Write About YourSelf..."></textarea>
                                            <span class="form_message"></span>
                                        </div>
                                    </div> 
                                    <div class="center_third">
                                        <div class="form__group">
                                            <div class="pw">
                                                <label for="password" class="form_label">Password</label>
                                                <input class="form_input" type="text" name="password"    id="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form__group">
                                            <div class="cf_pw">
                                                <label for="confirmPassword" class="form_label">Confirm Password</label>
                                                <input class="form_input" type="text" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="form_btn">
                                    <button class="btn_save">Save</button>
                                    <button class="btn_cancel">Cancel</button>
                                </div>  
                            </div>
                        </form>
                    </div>        
                </div>
                <?php include './layout/info.php' ?>
            </div>
        </div>
    </div>
    
</body>
</html>