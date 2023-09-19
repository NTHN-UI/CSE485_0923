<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="main">
        <div class="container-fluid">
            <div class="row">
        
                <?php include './layout/sidebar.php' ?>
                    <div class="col-md-9">
                        <div class="nav_right">
                            <?php include './layout/header.php' ?>
                            <div class="main_content">
                                <div class="content_filter">
                                    <div class="filter_third">
                                        <span style="color:red" class="h5">Filter</span>
                                        <i style="color:red" class="h3 fa-solid fa-circle-chevron-up"></i>
                                    </div>
                                    <div class="filter_second">
                                        <input type="text" placeholder="Email">
                                        <input type="text" placeholder="Mobile">
                                        <select style="color:#bbbbbb" name="" id="">
                                            <option value="">Select Group</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                        </select>
                                        <button class="search_filter">
                                            <a class="text-decoration-none" href="#">
                                                <i class="fa-solid fa-search"></i>
                                                <span class="h6 text-white">Filter</span>
                                            </a>
                                        </button>
                                        <button class="clear">
                                            <a class="h5 text-decoration-none">Clear</a>
                                        </button>
                                    </div>
                                </div>
                                <div class="content_users">
                                    <div class="content_user-third">
                                        <span style="color:red" class="h5">Users</span>
                                        <div class="add_users">
                                            <button class="delete"><a class="text-decoration-none" href="#">Delete</a></button>
                                            <a href="" class="add_r text-decoration-none">
                                                <button class="add">ADD USER</button>
                                                <button class="h4">+</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content_user-second">
                                        <?php
                                            require_once './connection.php';
                                             $sql = 'select * from users';
                                            $users = mysqli_query($strConnection,$sql);
                                            $user = mysqli_fetch_all($users);
                                        ?>
                                        <table>
                                            <thead>
                                            <tr>
                                                <th><input type="checkbox"></th>
                                                <th>Full name</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Groups</th>
                                                <th>Mobile</th>
                                                <th>Date Of Birth</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                           <tbody>
                                           <?php
                                           foreach($users as $user){
                                            $user['gender'] == 1 ? $gender = 'Male' : $gender = 'Female';
                                            $user['sta'] == 1 ? $status = '<i style="color:#56c760" class="fa-solid fa-circle "></i>' : $status = '<i class="fa-solid fa-circle"></i>';
                                            ?>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td><a class="text-decoration-none text-dark" href=""><img class="image" src="<?= $user['image']?>" alt=""><?= $user['fullname']?></a></td>
                                                <td><strong><?= $user['email']?></strong></td>
                                                <td><?= $gender ?></td>
                                                <td class="groups"><span><?= $user['job'] ?></span></td>
                                                <td><?= $user['mobile'] ?></td>
                                                <td><?= $user['dateofbirth'] ?></td>
                                                <td><?= $status ?></td>
                                                <td>
                                                    <a href=""><i style="background:#50ba99;font-size:12px" class="fa-solid fa-shield-halved text-white p-1 rounded-2"></i></a>
                                                    <a href="user_edit.php?id=<?= $user['id'] ?>"><i style="background:#ff6a59;font-size:12px" class="fa fa-pencil text-white p-1 rounded-2"></i></a>
                                                    <a href="">
                                                        <i style="background:#ff6a59;font-size:12px" class="fa fa-trash text-white p-1 rounded-2">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
        
                                            <?php } ?>
                                           </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include './layout/info.php'
                    ?>
            </div>
        </div>
    </div>


</body>

</html>