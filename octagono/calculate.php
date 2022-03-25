<?php
// $altura = $_POST['altura'];
// $base = $_POST['base'];
// $area = null;
// $area = ($altura * $base) / 2;
// echo "El valor del área: ".$area;



if(isset($_POST['L']) && isset($_POST['ap'])){

    $L = $_POST['L'];
    $ap = $_POST['ap'];
    $a = null;
    $perimetro = 8 * $L;
    $area =  ($perimetro  * $ap )/2;
    echo "El valor del area del octagono es: " . $area . "cm cuadrados";
}

?>