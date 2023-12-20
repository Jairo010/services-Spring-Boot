<?php
    include_once "select.php";
    include_once "save.php";
    include_once "delete.php";
    include_once "update.php";
    $opc=$_SERVER["REQUEST_METHOD"];
    switch($opc){
        case "GET":
            $cedula=$_GET['cedula'];
            crud::selectStudents($cedula);
            break;
        case "POST":
            crudS::insertStudents(); 
            break; 
        case "PUT":
            $id = $_GET['cedula'];
            $name = $_GET['nombre'];
            $lastName = $_GET['apellido'];
            $address = $_GET['direccion'];
            $phone = $_GET['telefono'];
            crudU::updateStudents($id,$name,$lastName,$address,$phone); 
            break; 
        case "DELETE": 
            $id = $_GET['cedula']; 
            crudD::deleteStudents($id);
            break;
        default:
            break;
    }
?>