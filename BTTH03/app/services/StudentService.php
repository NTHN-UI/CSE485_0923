<?php
    require_once ('../app/models/Student.php');
    require_once ('../app/libs/dbConnection.php');
    
    class StudentService{
        public function getAllStudent(){
            try{
                $DBConnection = new dbConnection(dbHOST,dbUSER,dbPASS,dbNAME);
                $conn = $DBConnection->getConnection();
                $sql = "SELECT*FROM SinhVien ";
                $stmt = $conn->query($sql);
                $studentArray = [];
                while ($row = $stmt->fetch()){
                    $student = new Student($row['id'],$row['tenSinhVien'],$row['email'],$row['ngaySinh'],$row['idLop']);
                    array_push($studentArray, $student);
                    
                }return $studentArray;
                
            }catch (PDOException $e){
                echo "Error: " .$e->getMessage();
                return [];
            }
            
        }
    }