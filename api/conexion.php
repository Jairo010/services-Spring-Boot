<?php
    class Conexion {
        public function connect(){
            define("servername" , "localhost");
            define("username" , "root");
            define("password" , "");
            define("dbName" , "quintosoa");
            $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND>'SET NAMES utf8');
            try { 
                $conn = new PDO("mysql:host=".servername.";dbname=".dbName, username, password,$opc);

            } 
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage(); 
            }
            return $conn;
        }
    }
?>
