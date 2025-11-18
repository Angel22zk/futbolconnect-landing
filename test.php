<?php
echo "Ruta absoluta: " . realpath("public/img/hero.png") . "<br>";

if (file_exists("public/img/hero.png")) {
    echo "El archivo SÍ existe.";
} else {
    echo "El archivo NO existe.";
}
?>
