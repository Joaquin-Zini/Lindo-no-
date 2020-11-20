<?php
$host = "localhost";
$user = "root";

$conexion = mysqli_connect($host, $user, "", 'escuela');

if(!$conexion){

    echo "Ripeadardo bro";

}
$codigoA = $_GET['code'];
$tiempo = $_GET['tiempo'];

$sql = "Update Competidores SET Tiempo = '$tiempo' where Codigo = '$codigoA'";
$resultado=mysqli_query($conexion ,$sql) or die ("</br>Problemas al insertar: ".mysqli_error($conexion));

if($resultado){
    echo "Cambiaste el tiempo. Gracias";
}
?>
<html> <button><a href = "consultass.php">Ver anotados</a></button> </html>