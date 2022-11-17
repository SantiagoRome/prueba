<!DOCTYPE html>
<html>
<body>

<?php
include("./php/funciones.php");
$suma=0;
if(isset($_GET['operacion'])){
    if($_GET['operacion']=="formulario"){ 
        crearFormulario($_GET['cantidad']);
        
    }else if($_GET['operacion']=="sumar"){
        sumarNumeros($_GET['cantidad']);
    }
}else{
?>
    <form action="#"  method="get">
        <input type="number" name="cantidad" required/></br>
        <input type="submit" name='operacion' value='formulario'>
    </form>

<?php
}
?>

</body>
</html>