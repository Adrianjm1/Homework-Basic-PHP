<?php
include_once('../db/connection.php');

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Agregar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="addProduct.php" method="POST">

                                <input type="hidden" name="id" > <label for="name">Nombre</label>
                                <input type="text" id="name" class="form-control mb-3" name="name" placeholder="nombre" >"> <label for="price"> Precio</label>
                                <input type="text" id="price" class="form-control mb-3" name="price" placeholder="precio" >"> <label for="quantity"> Cantidad</label>
                                <input type="text" id="quantity" class="form-control mb-3" name="quantity" placeholder="cantidad" >"> 
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Agregar">
                    </form>
                    
                </div>
    </body>
</html>