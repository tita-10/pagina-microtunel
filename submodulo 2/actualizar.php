<?php
include("conexion.php");
$Clave=$_POST["txtClave"];
$Nombre=$_POST["txtNombre"];
$Materia=$_POST["txtMateria"];
$Calificacion=$_POST["txtCali"];
$sql= "update recuperaciones set Nombre='$Nombre',Materia='$Materia',Calificacion='$Calificacion' where Clave='$Clave'";
if(mysqli_query($conexion,$sql)){
    header("Location: actualizar.html");
}else{
    echo "Error:".mysqli_error($conexion);
}
?>