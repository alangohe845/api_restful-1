
<?php 
    // include_once('../../config/conexion.php');
    // include_once('../../models/Categoria.php');
    
    $entrar="";
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $cat_nom=$_POST['cat_nom'];
    $cat_obs=$_POST['cat_obs'];
    $ruta=$_POST['ruta'];
    $est=$_POST['est'];
    
    
    $insert_cat = json_encode(array("cat_nom"=>"$cat_nom", "cat_obs"=>"$cat_obs","ruta"=>"$ruta", "est"=>"$est"));
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost/api_restful/controllers/categoria.php?op=insert',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $insert_cat,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    
    if ($response){
        echo"<script>alert('Se agrego con exito')</script>"; 
      }
          else{
            echo"<script>alert('Se agrego con exito')</script>"; 
        } 
    
       }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="#"><i style="color:white; margin-right: 1rem" class="fa-solid fa-tape"></i></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="width:100%">
            <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>   
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="administrarCategoria.php">Administrar</a></li>
                        <li><a href="nuevoCategoria.php">Nuevo</a></li>
                    </ul>
                </li>
            <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>   
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a href="../productos/administrarProductos.php">Administrar</a></li>
                        <li><a href="../productos/nuevoProductos.php" aria-current="page">Nuevo</a></li>
                        
                    </ul>
                    <li class="nav-item">
                    <a href="../salir.php" class="nav-link">Salir</a>
                </li>
                </li>
            </ul>
        </div>
    </div>
    </nav>
<style>
        div{
            display: flex;
            justify-content: center;
            align-content: center;
        }
    </style>
        <h1 align="center">Nueva categoria</h1>
        <br><br> 
        <div>
            <form action="" method="post">
                
                    <label for="cat_nom" class="form-label"></label>
                    <input type="text" placeholder="nombre de la categoria" name="cat_nom" class="form-control">
                    </br>
                
                    <label for="cat_obs" class="form-label"></label>
                    <select name="cat_obs" class="form-control">
                            <option value="Venta">Venta</option>
                            <option value="Adopcion">Adopcion</option>
                     </select>
                    </br>
                    
                    <label for="cat_obs" class="form-label"></label>
                    <select name="ruta" class="form-control">
                            <option value="1">french poodle 1</option>
                            <option value="2">French poodle 2</option>
                            <option value="3">Husky</option>
                            <option value="4">Firulais</option>
                            <option value="5">Pug</option>
                            <option value="6">Golden retriever</option>
                     </select>
                    </br>
                    
                
                    <label for="est" class="form-label"></label>
                    <select name="est" class="form-control">
                            <option value="0">Inactivo</option>
                            <option value="1">Activo</option>
                     </select>
                     </br>
                
                
                    <input type="submit" value="Enviar" name="enviar" class="btn btn-success">
                    <input type="reset" value="Eliminar" class="btn btn-danger">
                
            </form>
    </div>
</body>
</html>
