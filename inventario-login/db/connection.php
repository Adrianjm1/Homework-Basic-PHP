<?php
// $mysqli = new mysqli("localhost", "root", "", "login-inventario");
// if ($mysqli->connect_errno) {
//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }

$connection = mysqli_connect("localhost", "id18465544_admin", "swu329@&w+Zfdn~*", "id18465544_tareaphp");
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>