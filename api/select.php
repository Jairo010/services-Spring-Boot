<?php
    include_once 'conexion.php';
    class crud{
        static function selectStudents($cedula){
            $con = new Conexion();
            $connect = $con -> connect();
            $select = "SELECT * FROM estudiante WHERE cedula='$cedula'";

            $resultado = $connect->query($select);
            $resultado->execute();

            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
           echo json_encode($data);

        }
    }
    
?>