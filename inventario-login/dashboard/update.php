
<?php 
include_once('../db/connection.php');


$id=$_GET['id'];

$sql="SELECT * FROM product WHERE id='$id'";
$query=mysqli_query($connection,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updatequery.php" method="POST">

                                <input type="hidden" name="id"  value="<?php echo $row['id']  ?>"> <label for="name">Nombre</label>
                                <input type="text" id="name" class="form-control mb-3" name="name" placeholder="nombre" value="<?php echo $row['name']  ?>"> <label for="price"> Precio</label>
                                <input type="text" id="price" class="form-control mb-3" name="price" placeholder="precio" value="<?php echo $row['price']  ?>"> <label for="quantity"> Cantidad</label>
                                <input type="text" id="quantity" class="form-control mb-3" name="quantity" placeholder="cantidad" value="<?php echo $row['quantity']  ?>"> 
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>