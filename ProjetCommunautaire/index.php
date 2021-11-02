<?php

require_once "models/Database.php";
require_once "models/Student.php";
require_once "views/layouts/header.php";
require_once "controllers/indexController.php";

$Controller = new indexController();
$Controller->index();

?>