<?php

include_once('../db/connection.php');


$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

$sql="UPDATE product SET  name='$name',quantity='$quantity',price='$price' WHERE id='$id'";
$query=mysqli_query($connection,$sql);

    if($query){
        Header("Location: dashboard.php");
    } else{
        Header("Location: update.php");
    }


    mysqli_close($con);
?>