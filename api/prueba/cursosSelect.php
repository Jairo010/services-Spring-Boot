<?php
include_once "conexion.php";
class Select1{
    static function getData($curso,$paralelo){
        $con = Connection::getConnection();
        if ($curso != null && $paralelo != null) {
            $sql = "SELECT e.*, c.curso_per, c.paralelo_per from estudiantes e, aulas c
            where e.cedula=c.cedula_est and c.curso_per='$curso' and c.paralelo_per='$paralelo';";
        } else {
            echo "error";
        }
        $resultado = $con->prepare($sql);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }
}
?>
