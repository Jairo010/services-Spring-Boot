<?php
    include_once 'conexion.php';
    class crudS{
        static function insertStudents() {
            $id = $_POST['cedula'];
            $name = $_POST['nombre'];
            $lastName = $_POST['apellido'];
            $address = $_POST['direccion'];
            $phone = $_POST['telefono'];

            $con = new Conexion();
            $connect = $con -> connect();
            $sqlInsert = "INSERT INTO estudiante(cedula,nombre,apellido,direccion,telefono) VALUES('$id','$name','$lastName','$address','$phone');";
            $resultado = $connect->prepare($sqlInsert);
            $resultado->execute();
            $res = array(
                "cedula" =>$id,
                "nombre" => $name,
                "apellido" => $lastName,
                "direccion" => $address,
                "telefono" => $phone
            );
            echo json_encode($res);
            $connect->commit();
        }
    }

?>