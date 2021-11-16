<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
        <div class="container mt-5">
                <h2 class="text-center">Lista de Productos</h2>
                <button class="btn btn-success">Agregar Producto</button>
                <table class="table table-striped mt-3 text-center table-bordered">

                        <thead class="thead-dark">
                                <th>Num</th>
                                <th>codigo</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Inventario</th>
                                <th>Acción</th>
                        </thead>
                        <tbody>
                                <?php
                                        $cont=1;
                                        foreach($productos as $producto)
                                        {
                                             
                                                echo "<tr>".
                                                        "<td>".$cont."</td>".
                                                        "<td>".$producto["codprod"]."</td>".
                                                        "<td>".$producto["nomprod"]."</td>".
                                                        "<td>".$producto["precio"]."</td>".
                                                        "<td>".$producto["inventario"]."</td>".
                                                        "<td >".
                                                                "<button class='btn btn-warning mr-1'>Actualizar</button>".
                                                                "<button class='btn btn-danger'>Eliminar</button>".
                                                        "</td>".
                                                      "</tr>";
                                                $cont++;
                                        }        

                                ?>
                        </tbody>


               </table>
        </div>

    
</body>
</html>

