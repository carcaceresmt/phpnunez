<?php
    include '../modelo/productodao.php';
    $dao=new ProductoDao();
    $productos=$dao->listarProductos();
    include '../view/mostrarview.php';
