<?php
include("conexion.php");
$Clave=$_POST["txtClave"];
$Nombre=$_POST["txtNombre"];
$Materia=$_POST["txtMateria"];
$Calificacion=$_POST["txtCali"];
$sql="insert into recuperaciones values('$Clave','$Nombre','$Materia','$Calificacion')";
if(mysqli_query($conexion,$sql)){
   header("Location: plantilla1.html");
}else{
    echo "Error:".mysqli_error($conexion);
}
?>