<?php
require_once 'controllers/HomeController.php';
require_once 'models/UserModel.php';

$controller = new HomeController();
$controller->index();
?>
