
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome-free-6.4.0-web/css/all.min.css">

</head>

<body>
<div class="container-fluid p-0">
    <div class="row">
        <div class="col-md-12 pb-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Student</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav me-auto mb-2">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            <a class="nav-link" href="#"> </a>
                            <a class="nav-link active" href="#"></a>
                            <a class="nav-link " href="#"></a>
                            <a class="nav-link " href="#"></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-around gap-sm-3">
                <div>
                    <h1 class="text-success text-uppercase my-2 mx-2">Danh sách sinh viên</h1>
                </div>
            </div>
            
            <div class="d-flex justify-content-end my-2">
                <div>
                    <a class="btn btn-success btn-primary mx-2 mt-2" href="">+ Thêm mới</a>
                </div>
            </div>
            
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tên sinh vien</th>
                    <th scope="col">email</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">idLop</th>
                    <th scope="col">Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    if (!empty($student)) {
                        foreach ($student as $students) {
                            ?>
                            <?php
                            echo "<tr>";
                            echo "<td>" . $students->getId() . "</td>";
                            echo "<td>" . $students->getTenSinhVien() . "</td>";
                            echo "<td>" . $students->getEmail() . "</td>";
                            echo "<td>" . $students->getNgaySinh() . "</td>";
                            echo "<td>" . $students->getIdLop() . "</td>";
                            
                            echo "<td>";
                            echo "<a class='m-2' href=''><i class='fa-solid fa-eye'></i></a>";
                            echo "<a class='m-2' href=''><i class='fa-solid fa-pen'></i></a>";
                            echo "<a class='m-2' href=''><i class='fa-solid fa-trash'></i></a>";
                            echo "</td>";
                            echo "</tr>";
                            ?>
                        <?php }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





</body>

</html>
