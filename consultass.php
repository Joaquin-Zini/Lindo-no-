<!DOCTYPE html>
<html>
    <head>

        <title>Milla de la tecnica </title>
        <meta charset="UTF-8">
    </head>
    
    <body>     
    <table border="1">
<?php

$host = "localhost";
$user = "root";

$conexion = mysqli_connect($host, $user, "", 'escuela');

if(!$conexion)
{

    echo "Error";

}


$sql= "select * from competidores order by Categoria;";

$consulta= mysqli_query($conexion, $sql);

while ($registro= mysqli_fetch_array ($consulta,MYSQLI_NUM))

{
echo"<tr><td>";
echo "</br>".$registro[0]."";
echo " ".$registro[1]. " ";
echo " ".$registro[2]. " ";
echo " ".$registro[3]. " ";
echo " ".$registro[4]. " ";
echo " ".$registro[5]. " ";
echo " ".$registro[6]. " ";
echo " ".$registro[7]. " ";
echo " ".$registro[8]. " ";
echo " ".$registro[9]. " ";
echo"</td></tr>";
}


?>
</table>
</br>
<button><a href="cambiartiempo.html">Cambiar tiempo</a></button>