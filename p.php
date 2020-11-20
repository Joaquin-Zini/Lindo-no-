<!DOCTYPE html>
<html>
<head>
	<title>Categoría</title>
</head>

<body>

	<?php

#Trabajo Práctico 4 Joaquín Zini

    $host = "localhost";

$user = "root";

$conexion = mysqli_connect($host, $user, "", "escuela");

if(!$conexion){

    echo "Hubo un error al concectarse con la base de datos</br>";

}


#Competidor
	$nombre= $_GET['nombre'];
	$apellido= $_GET['apellido'];
    $DNI= $_GET['DNI'];
#Mostramos el competidor
	echo "<br", "<p>Competidor: ".$nombre." ".$apellido."<br>";
#Género
    $genero = $_GET['genero']; 
#Edad
	$fechaNC = $_GET['fechaNAC'];
	$fechaCompe = $_GET['fechaComp'];

	$fecha_Nacimiento = new DateTime($fechaNC);
	$fechaCompetencia = new DateTime($fechaCompe);

	#Calculamos la diferencia para saber los años
    $Edad = date_diff($fecha_Nacimiento, $fechaCompetencia);

    $fecha_Nacimiento = $fecha_Nacimiento->format('Y/m/d');
    $fechaCompetencia = $fechaCompetencia->format('Y/m/d');

    #Mostramos solo los años 
    $Edad=  $Edad->format('%Y');
    echo "Edad =",$Edad,"</br>";

    #Categorías

     if( $Edad < "15" && $genero=="Masculino")
     {
        echo  "Categoria: M1: Masculino menor de 15";
     }
    if($Edad > "15" && $Edad < "18" && ($genero == "Masculino"))
    {
       echo "Categoria: M2: Masculino entre 15 y 17";
    }

    if($Edad >= "18" && $genero == "Masculino")
    {
         echo "Categoria: M3: Masculino mayor de 18";
    }


    if($Edad < "15" && $genero == "Femenino")
    {
        echo  "Categoria: F1: Femenino menor de 15";
    }
    if($Edad > "15" && $Edad < "18" && ($genero == "Femenino"))
    {
        echo "Categoria: F2: Femenino entre 15 y 17";
    }

    if($Edad >= "18" && $genero == "Femenino")
    {
         echo "Categoria: F3: Femenino mayor de 18";
    }
        
    
    if($conexion)
    {
    echo "</br>Se ha conectado al servidor";
    }
    else
    {
    echo "</br>No se pudo conectar";
    }
	

    $alta="insert into competidores (Codigo, Nombre, Apellido, DNI, genero, Fecha_Nac, Fecha_Comp, Edad, Tiempo) 
    values(
    'default',
     '$nombre',
      '$apellido', 
      '$DNI', 
      '$genero',
       '$fecha_Nacimiento', 
       '$fechaCompetencia',  
       '$Edad', 
       '00:00:00');";
     $resultado=mysqli_query($conexion ,$alta) or die ("</br>Surgió un problema: ".mysqli_error($conexion));

     echo "Datos enviados y aceptados";?><html> <button><a href = "consultass.php">Ver anotados</a></button>
    
    ?>
</body>
</html>