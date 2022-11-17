<?php
function crearFormulario($cantidad){
    echo "<form action='#'  method='get'>";
    for($i=0;$i<$cantidad;$i++){
        echo "<input type='number' name='numero",$i,"'></br>";
    }
    echo "<input type='hidden' name='cantidad' value='",$cantidad,"'>";
    echo "<input type='submit' name='operacion' value='sumar'>";
    echo "</form>";
}
function sumarNumeros($cantidad){
    $suma=0;
    for($i=0;$i<$cantidad;$i++){
        $suma+=$_GET['numero'.$i];
    }
    echo $suma;
}
?>