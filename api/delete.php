<?php
    include_once 'conexion.php';
    class crudD{
        static function deleteStudents($id){
            $con = new Conexion();
            $connect = $con -> connect();


            $sqlDelete = "DELETE FROM estudiante WHERE cedula='$id';";

            $resultado = $connect->prepare($sqlDelete);
            $resultado->execute();
            echo json_encode($resultado);  
            $connect->commit();

        }
    }
?>