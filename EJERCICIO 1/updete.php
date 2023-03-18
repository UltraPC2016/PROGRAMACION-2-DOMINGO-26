<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$cc=$_POST['cc'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE sistema SET  cc='$cc',nombres='$nombres',apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: sistema.php");
    }
?>