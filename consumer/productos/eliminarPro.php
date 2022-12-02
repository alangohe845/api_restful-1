<?php 
include('../../config/conexion.php');
include('../../models/Productos.php');
$b="";
$id = $_GET['id'];

$Productos = new Productos;

$Productos->deleteProductos_id($id);

if($Productos==""){
    $b = 3;
}else{
    $b = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
 <?php include('../alertap.php');?> 
</body>
</html>