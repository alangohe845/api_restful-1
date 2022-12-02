<?php
//Crear una interfaz para mostrar en pantalla todos los registros de la tabla categoria

//Consumir la api_restful

$endpoint="http://localhost/appwebOS/Parcial2/api_restful2/api_restful/controllers/productos.php?op=selectall";

//crear un arreglo para guardar el contenido de json
    $datos=json_decode(file_get_contents($endpoint),true);

    // echo "</br>";
    // echo "<a href='nuevoCategoria.php'>Categorias->Nuevo</a>";
    // echo "<center>";
    // echo "<h1>Registros de Productos</h1>";
    // echo "<hr>";

    // echo "<table border=1>";
    // echo "<tr>";
    // echo "<th>No.</th>";
    // echo "<th>Nombre</th>";
    // echo "<th>PU</th>";
    // echo "<th>Cantidad</th>";
    // echo "<th>Cat_id</th>";
    // echo "<th>Acciones</th>";
    // echo "</tr>";
    // for ($i=0;$i<count($datos);$i++){
    //     echo "<tr>";
    //     echo "<td>".$datos[$i]["id"]."</td>";
    //     echo "<td>".$datos[$i]["nombre"]."</td>";
    //     echo "<td>".$datos[$i]["PU"]."</td>";
    //     echo "<td>".$datos[$i]["cantidad"]."</td>";
    //     echo "<td>".$datos[$i]["cat_id"]."</td>";
    //     echo "<td><a href='actualizar.php'>Actualizar</a> <a href='eliminar.php'>Eliminar</a></td>";
        
    //     echo "</tr>";
    // }
    
    // echo "</table>";
    // echo "<hr>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<style>
        .form-control-dark {
    border-color: var(--bs-gray);
    }
    .form-control-dark:focus {
    border-color: #fff;
    box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
    }

    .text-small {
    font-size: 85%;
    }

    .dropdown-toggle {
    outline: 0;
    }
</style>
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
    <center>
        <h1>Administrar Productos</h1>
        <hr>
        <div class="container">
        <table id="table_id" class="table table-primary table-striped">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>PU</th>
                <th>Cantidad</th>
                <th>Cat_Id</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=0;$i<count($datos);$i++){?>
            <tr>
                
                <td class="table-warning"><?php echo $datos[$i]['id']?></td>
                <td class="table-warning"><?php echo $datos[$i]['nombre']?></td>
                <td class="table-warning"><?php echo $datos[$i]['pu']?></td>
                <td class="table-warning"><?php echo $datos[$i]['cantidad']?></td>
                <td class="table-warning"><?php echo $datos[$i]['cat_id']?></td>
                <td class="table-warning"><a href="actualizarPro.php?id=<?php echo $datos[$i]['id']?>" class="btn btn-primary"><i class="bi bi-arrow-repeat"></i></a>  
               <a href="eliminarPro.php?id=<?php echo $datos[$i]['id']?>" class="btn btn-danger"> <i class="bi bi-cart-dash-fill"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
        </table>
    </div>
        <hr>
    </center>
    

</body>
</html>