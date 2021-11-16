<?php

    class Conexion{

        public function conectar(){
            $bd="bdwebnunez";
            $host="mysql:host=localhost:3306;charset=utf8;dbname=".$bd;
            $usuario="adminweb";
            $password="123456";
            $link=new PDO($host,$usuario,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
            return $link;
        }
    }
    
   
?>