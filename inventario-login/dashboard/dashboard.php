<?php
include_once('../db/connection.php');

session_start();

$fullname =  $_SESSION['fullName'];

if (isset($_SESSION['usuarioID'])) {
    $ID = $_SESSION['usuarioID'];
    $QUERY = "Select * from user Where id='$ID'";
    $rsQUERY = mysqli_query($connection, $QUERY) or die('Error: ' . mysqli_error($con));
    $countQUERY = mysqli_num_rows($rsQUERY);



    $query2 = "SELECT * FROM product";
    $resultQuery =  mysqli_query($connection, $query2) or die('Error: ' . mysqli_error($con));
    $arrayQuery = mysqli_fetch_array($resultQuery);

    if ($countQUERY <= 0) {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <li style="color:azure" >Bienvenido <?php echo $fullname ?>  </li>
      <li class="nav-item mr-sm-2 active" style="text-align: right;">
        <a class="nav-link" href="../register/logout.php">Logout </a>
      </li>
</nav>
    <table class="table mx-auto mt-5" style="width: 80%;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($resultQuery as $value) {


             

            ?>
                <tr>

                    <td> <?php echo $value['id']; ?> </td>
                    <td> <?php echo $value['name']; ?> </td>
                    <td> <?php echo $value['price']; ?> </td>
                    <td> <?php echo $value['quantity']; ?> </td>
                    <th><a href="update.php?id=<?php echo $value['id'] ?>       " class="btn btn-info">  Editar  </a></th>
                    <th><a href="deleteProduct.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">Eliminar</a></th>                         
 
                </tr>

            <?php


            }

            ?>

        </tbody>
    </table>

    <div class="mx-5 mb-3">
        <button class="btn-primary"  style="margin-left: 500px;" onclick="location.href='insertProduct.php'"  href="insertProduct.php" name="button"><a>Agregar producto </a> 

        </button>
    </div>
</body>

</html>