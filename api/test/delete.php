<?php
    include_once "conexion.php";
    class Delete{
        static function deleteStudents($id){
            $conn = Connection::getConnection();
            
            $sql = "DELETE FROM estudiante WHERE cedula='$id';";
            $resultado = $conn->prepare($sql);
            $resultado->execute();
            echo json_encode($resultado);
        }
        
    }
?>