<?php
include_once('../db/connection.php');


$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];




$sql="INSERT INTO product (name, price, quantity) 
VALUES('$name', '$price', '$quantity')";


$query= mysqli_query($connection,$sql);

if($query){
    Header("Location: dashboard.php");
    
}else {
    Header("Location: insertProduct.php");
}
?>