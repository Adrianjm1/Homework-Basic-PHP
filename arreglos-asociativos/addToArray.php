<?php

$worker = array();
$worker2 = array();
$worker3 = array();



$claves = array('nombre', 'apellido', 'cedula', 'sueldo', 'departamento', 'lugar');


foreach ($claves as $key => $valor) {
    $worker[$valor] = $_POST[$valor . "1"];
    $worker2[$valor] = $_POST[$valor . "2"];
    $worker3[$valor] = $_POST[$valor . "3"];
}


echo '<div  class="d-flex mx-auto"  style="justify-content: space-between; width:60%; " > ';


echo '<div > ';

echo '    <div class="col-md-4 col-sm-4 col-xs-12">';
echo '    <div class="row plan-box plan-danger text-center" style="width:280%;">';
echo '    <div class="col-md-12 section1">';
echo '        <h6>Empleado 1</h6>';
echo '    </div>';
echo '    <div class="col-md-12 section3">';


foreach ($worker as $clave => $valor) {

    echo  '<p>'. $clave . " es " . $valor . '</p>' ;
    echo "<br>";

}

echo '  </div>';

echo '  </div>';
echo '  </div>';




echo '</div>';

echo '<div> ';



echo '    <div class="col-md-4 col-sm-4 col-xs-12">';
echo '    <div class="row plan-box plan-warning text-center " style="width:280%;">';
echo '    <div class="col-md-12 section1">';
echo '        <h6>Empleado 2</h6>';
echo '    </div>';
echo '    <div class="col-md-12 section3">';


foreach ($worker2 as $clave => $valor) {

    // if ($clave == 'nombre') {
    //     echo "Datos del empleado 2";
    //     echo "<br>";
    // }



    echo  '<p>'. $clave . " es " . $valor . '</p>' ;
    echo "<br>";
}

echo '  </div>';

echo '  </div>';
echo '  </div>';


echo '</div>';

echo '<div> ';







echo '</div>';
echo '<div> ';
echo '    <div class="col-md-4 col-sm-4 col-xs-12">';
echo '    <div class="row plan-box plan-success text-center" style="width:280%;">';
echo '    <div class="col-md-12 section1">';
echo '        <h6>Empleado 3</h6>';
echo '    </div>';
echo '    <div class="col-md-12 section3">';


foreach ($worker3 as $clave => $valor) {


    echo  '<p>'. $clave . " es " . $valor . '</p>' ;
    echo "<br>";
}

echo '  </div>';

echo '  </div>';
echo '  </div>';


echo '</div>';

echo '<div> ';


echo $_POST['departamento1'];
