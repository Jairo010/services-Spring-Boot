<?php
    include_once "conexion.php";
    class Select{
        static function getStudents(){
            $conn = Connection::getConnection();
            $sql = "SELECT * FROM estudiante";
            $resultado = $conn->prepare($sql);
            $resultado->execute();
            $res = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($res);
        }
        
    }
?>