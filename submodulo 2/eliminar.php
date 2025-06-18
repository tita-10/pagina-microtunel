<?php
include("conexion.php");
$Clave=$_POST["txtClave"];
$sql= "delete from recuperaciones where Clave='$Clave'";
if(mysqli_query($conexion,$sql)){
    header("Location: eliminar.html");
}else{
    echo "Error:".mysqli_error($conexion);
}
?>