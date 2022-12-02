
<?php 
    include('../../config/conexion.php');
    include('../../models/Productos.php');
    
    $b = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom=$_POST['nombre'];
        $PU=$_POST['PU'];
        $can=$_POST['cantidad'];
        $cat_id=$_POST['catid'];

        $Producto = new Productos;
        
        $Producto->postProductos_id($nom,$PU,$can,$cat_id);
        
        
        if($Producto==""){
            $b = 0;
            // echo "<script>
            //         alert('Error');
            //         location.href(administrarCategoria.php);
            //     </script>";
        }else{
            $b = 1;
            // echo "<script>
            //     alert('Bien');
            //     location.href(administrarCategoria.php);
            // </script>";
        }
       
    }
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
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
                        <li><a href="../categoria/administrarCategoria.php">Administrar</a></li>
                        <li><a href="../categoria/nuevoCategoria.php">Nuevo</a></li>
                    </ul>
                </li>
            <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>   
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="administrarProductos.php">Administrar</a></li>
                        <li><a href="nuevoProductos.php">Nuevo</a></li>
                    </ul>
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
        <h1 align="center">Nuevo Producto</h1>
        <br>
        <div class="container">
            <form action="" method="post">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <br>
                    <input type="text" placeholder="nombre de la producto" name="nombre" required class="form-control">
                    </br>
                    <label for="PU" class="form-label">PU</label>
                    <br>
                    <input type="text" placeholder="observaciones de la producto" name="PU" required class="form-control">
                    </br>
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <br>
                    <input type="text" placeholder="Cantidad de producto" name="cantidad" required class="form-control">    
                    </br>
                    <label for="Cat_id" class="form-label">No. Categoria</label>
                    <br>
                    <input type="text" name="catid" required class="form-control">
                    <br>
                    <input type="submit" value="Enviar" name="enviar" class="btn btn-success">
                    <input type="reset" value="Eliminar" class="btn btn-danger">
            </form>
        </div>


    <?php include('../alertap.php');?>
</body>
</html>