<?php

session_start();

$controller = isset($_GET['controller'])    ? $_GET['controller']   : 'index';
$method     = isset($_GET['method'])        ? $_GET['method']       : 'index';
var_dump( $controller);
var_dump( $method);

require_once "models/Database.php";
require_once "models/Student.php";

require_once "views/layouts/header.php";
require_once "controllers/studentController.php";
require_once "controllers/indexController.php";

$controller = $controller."Controller";
call_user_func([new $controller(), $method]);



?>