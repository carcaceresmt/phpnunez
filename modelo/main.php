<?php
    include 'productodao.php';
    $dao=new ProductoDao();
    $productos=$dao->guardarProducto('1001','Mandarina',300,1000);
    