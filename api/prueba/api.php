<?php
include_once "cursosSelect.php";

$op = $_SERVER['REQUEST_METHOD'];
switch ($op) {
    case 'GET':
        $curso = $_GET['curso'];
        $paralelo = $_GET['paralelo'];
        Select1::getData($curso,$paralelo);
        break;
    
    default:
        echo "Servicio no disponible";
        break;
}
?>