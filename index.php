<?php
// Cargamos el controlador principal
require_once 'app/controllers/MainController.php';

// Ruta base del proyecto (IMPORTANTE modificar si cambias carpeta)
define('BASE_URL', '/futbolconnect-landing/public/');

$controller = new MainController();
$controller->index();
?> 