<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<?php require_once './connection.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from users where id = '$id'";
    $users = mysqli_query($strConnection, $sql);
    $user = mysqli_fetch_array($users);
  }

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
                                                <img class="avarta" src="<?= $user['image'] ?>"  alt="">
                                                <div class="form_check">
                                                    <?php
                                                        if ($user['sta']) {
                                                            echo '<input type="checkbox" checked name="" id="">';
                                                        } else {
                                                            echo '<input type="checkbox" name="" id="">';
                                                        }
                                                    ?>
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
                                                    <input class="form_input" type="text" name="" id="" placeholder="User Name" value="<?= $user['fullname'] ?>">
                                                </div>
                                                <div class="form_group">
                                                    <label for="" class="form_label">Email <span class="mandatory">*</span></label>
                                                    <input class = "form_input" type="text" name="" id="" placeholder="Email" value="<?= $user['email']?>">
                                                </div>
                                                <div class="form_group">
                                                    <label for="" class="form_label">Phone Number <span class="mandatory">*</span></label>
                                                    <input class = "form_input" type="text" name="phoneNumber" id="" placeholder="PhoneNumber" value="<?= $user['mobile']?>">
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
                                                <?php
                                                $user['job'] == 'Manager' ? $job = 'role2' : $job = 'role3';
                                                if ($user['job']  == 'Manager') {
                                                    echo '<option value="role1">Select the Role</option>';
                                                    echo '<option selected value="role2">Manager</option>';
                                                    echo '<option value="role3">Customer</option>';
                                                } else if ($user['job'] == 'Customer') {
                                                    echo '<option value="role1">Select the Role</option>';
                                                    echo '<option value="role2">Manager</option>';
                                                    echo '<option selected value="role3">Customer</option>';
                                                }
                                                ?>
                                                </select>
                                            </div>
                                         </div>
                                        <div class="form__group">
                                            <div class="gender">
                                                <label for="gender" class="form_label">Gender<span class="mandatory">*</span></label>
                                                <select class="form_input">
                                                <?php
                                                    if ($user['gender']) {
                                                        echo '<option value="gender1">Choose gender</option>';
                                                        echo '<option selected value="gender2">Male</option>';
                                                        echo '<option value="gender3">Female</option>';
                                                    } else {
                                                        echo '<option value="gender1">Choose gender</option>';
                                                        echo '<option value="gender2">Male</option>';
                                                        echo '<option selected value="gender3">Female</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form__group">
                                            <div class="date">
                                                <label for="" class="form_label">Date of Birth<span class="mandatory">*</span></label>
                                                <input class="form_input" type="date" name="" id=""value="<?= $user['dateofbirth'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="center_second">
                                        <div class="form__group">
                                            <label for="" class="form_label">Facebook URL</label>
                                            <input class="form__input" type="text" name="" id="">
                                        </div>
                                        <div class="form__group">
                                            <label for="" class="form_label">Twitter URL</label>
                                            <input class="form__input" type="text" name="" id="">
                                        </div>
                                        <div class="form__group">
                                            <label for="" class="form_label">Linkedin URL</label>
                                            <input class="form__input" type="text" name="" id="">
                                        </div>
                                
                                    </div>
                                    <div class="form__group">
                                        <div class="about">
                                            <label class="form_label" for="about">About</label>
                                            <textarea class="form__input" name="about" id="" cols="120" rows="4" placeholder="Write About YourSelf..."></textarea>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="form_btn">
                                    <button class="btn btn--save">Save</button>
                                    <button class="btn btn--cancel">Cancel</button>
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