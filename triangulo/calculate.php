<?php
// $altura = $_POST['altura'];
// $base = $_POST['base'];
// $area = null;
// $area = ($altura * $base) / 2;
// echo "El valor del área: ".$area;



if(isset($_POST['b']) && isset($_POST['c'])){

    $b = $_POST['b'];
    $c = $_POST['c'];
    $a = null;
    $area = sqrt(  pow($b,2)  +  pow($c,2) );
    echo "El valor de la hipotenusa es: " . $area;
}

?>