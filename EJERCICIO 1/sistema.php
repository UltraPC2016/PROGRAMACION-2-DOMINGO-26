<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM sistema";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> SISTEMA DE CONTROL</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3">
                    <h1>FORMULARIO</H1>
                </div>

                <div class="col-md-8">
                
                <h1>MOSTRAR TABLA</H1>    
                </div>
            </div>
        
    </div>
</body>
</html>