<?php
if(isset($_GET['id'])) {
    $uid = $_GET['id'];
    $sql = "select * from users where id = $uid ";
    echo $uid;


}

try{
    //buoc 1 mơ ket noi
    $conn = new PDO (dsn:"mysql:host=localhost;dbname=mysql",username:"root",password:"1234");
    // buoc 2 truy van
    $n = ($page -1) *10;

    $stmt =$conn->prepare($sql);
    $stmt -> execute();

    //
    $users = $stmt -> fetchAll();



}catch(PDOException $e){
    echo "error:" . $e->getMessage();
}



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
 ?>
