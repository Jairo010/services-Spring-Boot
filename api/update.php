<?php
    include_once 'conexion.php';
    class crudU{
        static function updateStudents($id,$name,$lastName,$address,$phone){
            //$json_data = file_get_contents('php://input');
            //stristr(file_get_contents('php://input'),$data);
            // Decodificar los datos JSON en un array asociativo
            //$data = json_decode($json_data, true);
            //parse_str(file_get_contents("php://input"), $data);

            $con = new Conexion();
            $conn = $con->connect();

            //$id = $_GET['cedula'];
            //$name = $_POST['nombre'];
            //$lastName = $_POST['apellido'];
            //$address = $_POST['direccion'];
            //$phone = $_POST['telefono'];

            //$id = $data['cedula'];
            //$name = $data['nombre'];
            //$lastName = $data['apellido'];
            //$address = $data['direccion'];
            //$phone = $data['telefono'];

            $sqlUpdate = "UPDATE estudiante SET nombre='$name',apellido='$lastName', direccion='$address', telefono='$phone' WHERE cedula='$id';";
            $resultado = $conn->prepare($sqlUpdate);
            $resultado->execute();
            echo json_encode($resultado);
            $conn->commit();
            $conn = null;
        }
    }
?>


