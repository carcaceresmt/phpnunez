<?php

include 'conexion.php';

class ProductoDao extends Conexion{

    /**metodo listar productos */
    public function listarProductos(){

        $conexion=Conexion::conectar();
        $sql="select * from producto order by nomprod asc";
        $stmt=$conexion->prepare($sql);
        $stmt->execute();
        $productos=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;
        return $productos;
    }

    /**metodos para guardar producto */

    public function guardarProducto($codprod,$nomprod,$precio,$inventario){

        $mensaje="";

        try{

            $conexion=Conexion::conectar();
            $sql="insert into producto values(:codprod,:nomprod,:precio,:inventario)";
            $stmt=$conexion->prepare($sql);
            $stmt->bindParam(":codprod",$codprod);
            $stmt->bindParam(":nomprod",$nomprod);
            $stmt->bindParam(":precio",$precio);
            $stmt->bindParam(":inventario",$inventario);
            $stmt->execute();
            $fila=$stmt->rowCount();
            $mensaje="Guardo ".$fila." Producto con Exito!!";
            
        }
        catch(PDOException $e){
            if($e->errorInfo[1]==1062){
                $mensaje="Producto Ingresado ya Existe!!";
            }
            else{
                $mensaje="Problemas al Insertar Consulte con el Administrador";
            }
          
        }
        
        return $mensaje;
    }


}
