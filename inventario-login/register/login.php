<?php
include_once('../db/connection.php');
session_start();
$email = "";
$password ="";

if(isset($_POST['btnn'])){

    
    if(isset($_POST['email']) && isset($_POST['password'] )){


        $email = $_POST['email'];
        $password = md5($_POST['password']);

        if($email != '' && $password != ''){

            $QUERYLog = "Select * From user Where email='$email' And password='$password'";

            $rsQUERYLog = mysqli_query($connection, $QUERYLog) or die('Error: ' . mysqli_error($con));
            $fileQUERYLog = mysqli_fetch_array($rsQUERYLog);
            $NofileQUERYLog = mysqli_num_rows($rsQUERYLog);

    

            if($NofileQUERYLog > 0){
                $_SESSION['usuarioID'] = $fileQUERYLog['id'];
                $_SESSION['fullName'] = $fileQUERYLog['name'];
                header('Location: ../dashboard/dashboard.php');
                // echo '<script language="javascript">';
                // echo 'alert("Error, no se puedo registrar el usuario")';
                // echo' setTimeout(5000)';
                // echo '</script>';
                

            }
            if($NofileQUERYLog == 0){
                session_destroy();
                header('Location: ../index.php');
            }
        }
    }
}
mysqli_close($connection);

?>