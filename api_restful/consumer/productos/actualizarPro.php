<?php
include_once('administrarProductos.php');
$entrar="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_REQUEST['id'];
$nombre=$_POST['nom'];
$pu=$_POST['pu'];
$cantidad=$_POST['cantidad'];
$cat_id=$_POST['cat_id'];

$insert_cat = json_encode(array("id"=>"$id","nom"=>"$nombre", "pu"=>"$pu", "cantidad"=>"$cantidad", "cat_id"=>"$cat_id"));

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/appwebOS/parcial2/api_restful/controllers/producto.php?op=update',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>$insert_cat,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

if ($response){
    echo"<script>alert('Se agrego con exito');</script>"; 
  }
      else{
        echo"<script>alert('Se agrego con exito')</script>"; 
    }

   }
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<div>
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="nuevoProductos.php" class="nav-link active" aria-current="page">Nuevo Producto</a></li>
            <li class="nav-item"><a href="administrarProductos.php" class="nav-link active">Administrar productos</a></li>
            <li class="nav-item"><a href="#" class="nav-link">      </a></li>
            <li class="nav-item"><a href="#" class="nav-link">      </a></li>
            <li class="nav-item"><a href="#" class="nav-link">      </a></li>
        </ul>
        </header>
    </div>
    <style>
        div{
            display: flex;
            justify-content: center;
            align-content: center;
        }
    </style>
    <br>
    <h1 align="center">Actualizar Producto</h1>
    <br><br><br>
    <div>
    <form action="" method="POST">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nom" required class="form-control">
        <br>
        <label for="cat_obs" class="form-label">PU</label>
        <input type="text" name="pu" required class="form-control">
        <br>
        <label for="est" class="form-label">Cantidad de Producto</label>
        <input type="text" name="cantidad" required class="form-control">
        <br>
        <label for="cat_id" class="form-label">No. Categoria</label>
        <input type="text" name="cat_id" required class="form-control">
        <br>
        <input type="submit" value="Enviar" name="enviar" class="btn btn-success">
        <input type="reset" value="Eliminar" class="btn btn-danger">
    </form>
</div>
    
</body>
</html>