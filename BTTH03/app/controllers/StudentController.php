<?php

require_once ('../app/services/StudentService.php');

class StudentController{
    private $studentController;
    public function __construct(){
        $this->studentController = new StudentService();
    }
    public function index(){
        $student = $this->studentController->getAllStudent();
        include_once '../app/views/student/StudentView.php';
    }
}
