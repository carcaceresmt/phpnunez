<?php
require '../modelo/productodao.php';
/**
 * autor Carlos Caceres Ochoa
 */
/**controlador guardar producto */


/**llamado al modelo de producto */
$dao=new ProductoDao();

if(isset($_POST['codprod'])){
    $codprod=$_POST['codprod'];
    $nomprod=$_POST['nomprod'];
    $precio=$_POST['precio'];
    $inventario=$_POST['inventario'];
    $mensaje=$dao->guardarProducto($codprod,$nomprod,$precio,$inventario);
        
}


/**vista guardar producto */


include '../view/guardarview.php';