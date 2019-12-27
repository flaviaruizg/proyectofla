<?php
//array
include('conexion.php');
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];



//funcion mail()
$dest="flaviaarg685@gmail.com";
$subject="Se han contactado desde el sitio";
$headers= "From: SMCINES";
$mensaje="mensaje:".$mensaje;
$envio=mail($dest,$subject,$mensaje);

//verificar el envio
if($envio){
echo "<h2>Gracias ".$nombre." por comunicarse</h2>";
}else{
    echo "error en el envio :(";
}

$sql="INSERT INTO datos VALUES (0,'$nombre','$email','$mensaje')";

mysqli_query($conexion,$sql);
mysqli_error($conexion);

mysqli_close($conexion);

header("location: index.php");




?>

    
          