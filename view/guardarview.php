<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="guardarcontroller.php" method="post">
     
           
        <div class="container mt-5">
            <h1 class="text-center">Guardar Producto</h1>
            <?php
                if(isset($mensaje)){
                   echo " <div class='alert alert-info alert-dismissible'>".
                        " <button type='button' class='close' data-dismiss='alert'>&times;</button>".
                    "<strong>Mensaje</strong>  ".$mensaje."</div>";
                    
                }   
            ?>                     
        
            <label>Codigo</label>
            <input type="text" name="codprod" class="form-control">
            <label>Producto</label>
            <input type="text" name="nomprod" class="form-control">
            <label>Precio</label>
            <input type="number" name="precio" class="form-control">
            <label>Inventario</label>
            <input type="number" name="inventario" class="form-control">  
            <button name="guardar" class="btn btn-primary mt-3">Guardar</button>   
        </div>
    </form>
    
</body>
</html>