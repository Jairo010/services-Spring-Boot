<?php
    include_once "conexion.php";
    class Update{
        static function updateStudents(){
            $conn = Connection::getConnection();
            $json_data = file_get_contents('php://input');

            $data = json_decode($json_data,true);

            $id = $data['cedula'];
            $name = $data['nombre'];
            $lastName = $data['apellido'];
            $address = $data['direccion'];
            $phone = $data['telefono'];
            
            $sql = "UPDATE estudiante SET nombre='$name',apellido='$lastName',direccion='$address',telefono='$phone' WHERE cedula='$id';";
            $resultado = $conn->prepare($sql);
            $resultado->execute();
            $res = array(
                "cedula"=>$id,
                "nombre"=>$name,
                "apellido"=>$lastName,
                "direccion"=>$address,
                "telefono"=>$phone
            );
            echo json_encode($res);
        }
        
    }
?>