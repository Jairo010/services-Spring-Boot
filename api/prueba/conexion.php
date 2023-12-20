<?php
    class Connection{
        static function getConnection(){
            define("host","localhost");
            define("dbname","cursosparalelos");
            define("user","root");
            define("pass","");
            try {
                $con = new PDO("mysql:host=".host.";dbname=".dbname,user,pass);
                return $con;
            } catch (PDOException $e) {
                echo "Error de conexion".$e->getMessage();
            }
        }
    }
?>