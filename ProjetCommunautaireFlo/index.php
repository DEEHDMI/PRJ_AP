<?php

//             si et instruction            ? = else if et instruction   : = a égale ou valeur par default
$controller = isset($_GET['controller'])    ? $_GET['controller']   : 'index';
$method     = isset($_GET['method'])        ? $_GET['method']       : 'index';


require_once "models/Database.php";
require_once "models/Student.php";
require_once "models/Personnel.php";

require_once "views/layouts/header.php";

require_once "controllers/indexController.php";
require_once "controllers/studentController.php";
require_once "controllers/personnelController.php";

/*
$Controller = new indexController();
$Controller->index();
*/

$controller = $controller."Controller";
call_user_func([new $controller(), $method]);

?>