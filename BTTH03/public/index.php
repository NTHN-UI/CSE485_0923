<?php
    
    $route = isset($_GET['route']) ? $_GET['route'] : 'student';
    define('APP_ROOT', dirname(__FILE__, 2));
    if ($route == 'student') {
    require_once (APP_ROOT . '/app/controllers/StudentController.php');
        $StudentController = new studentController();
        $StudentController->index();
    } else {
        echo '404 - Not Found';
    }