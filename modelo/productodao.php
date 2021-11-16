<?php

include 'conexion.php';

class ProductoDao extends Conexion{

    
    public function listarProductos(){

        $conexion=Conexion::conectar();
        $sql="select * from producto order by nomprod asc";
        $stmt=$conexion->prepare($sql);
        $stmt->execute();
        $productos=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;
        return $productos;
    }

}
