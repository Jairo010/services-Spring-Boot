<?php
include_once "select.php";
include_once "insert.php";
include_once "update.php";
include_once "delete.php";
$case = $_SERVER["REQUEST_METHOD"];
switch($case){

    case "GET":
    Select::getStudents();
    break;

    case "POST":
        Insert::insertStudents();
    break;

    case "PUT":
        Update::updateStudents();
    break;

    case "DELETE":
        $id=$_GET['cedula'];
        Delete::deleteStudents($id);
    break;

    default:
        echo "No existe ese servicio";
    break;   

}
?>