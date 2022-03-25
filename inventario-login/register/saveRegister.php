<?php
include_once('../db/connection.php');

$email = "";
$password = "";
$name = "";

if (isset($_POST['btn'])) {
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])) {



        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $name = $_POST['name'];

        if ($email != '' && $password != '' && $name != '') {

            $query = "INSERT INTO user (name, email, password) 
                      VALUES('$name', '$email', '$password')";

            $rsQuery = mysqli_query($connection, $query);

            if ($rsQuery) {
                echo "Records added successfully.";

                header('Location: ../index.php');
            } else {
                echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
            }
        } else {
            echo '<script language="javascript">';
            echo 'alert("Error, no se puedo registrar el usuario")';
            echo' setTimeout(5000)';
            echo '</script>';
           
            header('Location: ./register.php');
        }
    }
}

$_POST['email'] = "";
$_POST['password'] = "";
$_POST['name'] = "";

mysqli_close($con);
?>
