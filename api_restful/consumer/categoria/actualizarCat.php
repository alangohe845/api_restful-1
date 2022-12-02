<?php
$endpoint = "http://localhost/appwebOS/parcial2/api_restful/controllers/categoria.php?op=selectall";

//crear un arreglo para guardar el contenido de json
$datos = json_decode(file_get_contents($endpoint), true);
$entrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_REQUEST['cat_id'];
    $cat_nom = $_POST['cat_nom'];
    $cat_obs = $_POST['cat_obs'];
    $ruta = $_POST['ruta'];
    $est = $_POST['est'];
    $insert_cat = json_encode(array("cat_id" => "$id", "cat_nom" => "$cat_nom", "cat_obs" => "$cat_obs", "ruta" => "$ruta", "est" => "$est"));

    $curl = curl_init();

    curl_setopt_array(
        $curl,
        array(
            CURLOPT_URL => 'http://localhost/appwebOS/parcial2/api_restful/controllers/categoria.php?op=update',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $insert_cat,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        )
    );

    $response = curl_exec($curl);

    curl_close($curl);

    if ($response) {
        echo "<script>alert('Se agrego con exito');</script>";
    } else {
        echo "<script>alert('Se agrego con exito')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="#"><i style="color:white; margin-right: 1rem" class="fa-solid fa-tape"></i></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="width:100%">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="administrarCategoria.php">Administrar</a></li>
                            <li><a href="nuevoCategoria.php">Nuevo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="../salir.php" class="nav-link">Salir</a>
                    </li>

                </ul>

                </ul>
            </div>
        </div>
    </nav>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-content: center;
        }
    </style>
    <br>
    <h1 align="center">Actualizar Categoria</h1>
    <br><br>
    <div>
        <form action="" method="POST">

            <label for="cat_nom" class="form-label">Nombre</label>
            <input type="text" name="cat_nom" required class="form-control" value="">
            <br>
            <label for="cat_obs" class="form-label">Observaciones</label>
            <input type="text" name="cat_obs" required class="form-control" value="">
            <br>
            <label for="cat_obs" class="form-label">Ruta</label>
            <input type="text" name="ruta" required class="form-control" value="">
            <br>
            <label for="est" class="form-label">Estatus</label>
            <input type="text" name="est" required class="form-control" value="">
            <br>
            <input type="submit" value="Enviar" name="enviar" class="btn btn-success">
            <input type="reset" value="Eliminar" class="btn btn-danger">

        </form>
    </div>

</body>

</html>