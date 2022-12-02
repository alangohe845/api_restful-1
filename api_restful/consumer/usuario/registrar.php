
<?php 
    include('../../config/conexion.php');
    include('../../models/Usuario.php');
    
    $b = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom=$_POST['user'];
        $PU=$_POST['pwd'];
        $can=$_POST['privilegio'];

        $Producto = new Productos;
        
        $Producto->postProductos_id($nom,$PU,$can);
        
        
        if($Producto==""){
            // $b = 0;
            echo "<script>
                    alert('Error');
                </script>";
        }else{
            //$b = 1;
             echo "<script>
                 alert('Bien');
             </script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
        <div class="" style="margin-top:200px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Registrar usuario</h3>
                        </div>
                        <form action="" method="post">
                            <div class="p-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="Usuario" name="user">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="password" class="form-control" placeholder="Contraseña" name="pwd">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input type="text" class="form-control" placeholder="Contraseña" name="privilegio">
                                </div>
                                <button class="btn btn-primary text-center mt-2" type="submit">
                                    Iniciar
                                </button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>


    <?php include('../alertap.php');?>
</body>
</html>