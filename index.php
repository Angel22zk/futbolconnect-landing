<?php
// Cargamos el controlador principal
require_once 'app/controllers/MainController.php';

$controller = new MainController();
$controller->index();
?> 