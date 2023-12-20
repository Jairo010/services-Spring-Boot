<?php
    include_once "conexion.php";
    class Select1{
        static function getData($where){
            $con = Connection::getConnection();
            $sql = "SELECT numCuenta,tipo,cantidad FROM trasacciones WHERE numCuenta=$where;";
            $resultado = $con->prepare($sql);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($data);
        }
    }
?>