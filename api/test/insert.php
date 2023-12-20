<?php
    include_once "conexion.php";
    class Insert{
        static function insertStudents(){
            $conn = Connection::getConnection();

            $id = $_POST['cedula'];
            $name = $_POST['nombre'];
            $lastName = $_POST['apellido'];
            $address = $_POST['direccion'];
            $phone = $_POST['telefono'];
            
            $sql = "INSERT INTO estudiante(cedula,nombre,apellido,direccion,telefono) VALUES('$id','$name','$lastName','$address','$phone');";
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

