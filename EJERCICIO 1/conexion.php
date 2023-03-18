<?php
funcyion conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="EJERCICIO 1";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>