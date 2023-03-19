<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$cc=$_POST['cc'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO sistema VALUES('$cod_estudiante','$cc','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: sistema.php");
    
}else {
}
?>