<?php
class MainController
{
    public function index()
    {
        // Renderiza la vista principal
        ob_start();
        require_once 'app/views/home.php';
        $content = ob_get_clean();

        // Carga el layout
        require_once 'app/views/layout.php';
    }
}
