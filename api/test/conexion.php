<?php
    class Connection{
        
        static function getConnection(){
            define("host","localhost");   
            define("dbName","quintosoa");
            define("user","root");
            define("pass","");

            try{
                $conn = new PDO("mysql:host=".host.";dbname=".dbName,user,pass);
            }catch(PDOException $e){
                echo "Error de conexion" . $e->getMessage();
    
            }
            return $conn;
        }

    }
?>