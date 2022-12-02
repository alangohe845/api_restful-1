          
<?php
//Conexion con la base de datos
include_once("../../../../../config/conexion.php");
$endpoint="http://localhost/api_restful/controllers/categoria.php?op=selectall";

//crear un arreglo para guardar el contenido de json
    $datos=json_decode(file_get_contents($endpoint),true);
// SDK de Mercado Pago
require __DIR__.'/vendor/autoload.php';

$acess_token = "TEST-1446835489871288-111100-41b982a9432f096e71d03ed5bf0f40f2-576404917";
// Agrega credenciales
MercadoPago\SDK::setAccessToken($acess_token);

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia

$item = new MercadoPago\Item();
$item->title = 'Perro';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ecommerce</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Api Paypal -->
        <script src="https://www.paypal.com/sdk/js?client-id=AaH_ph5E8E_gyzmhZHFCmpNtjLmyVcNN0S4xJPyG7ioZtlJ4YL_9qCkKDpGs8yp13h0VylRtqNoseqs5&components=buttons&currency=MXN&locale=es_MX"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Mascotas felices</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../../menu.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../../../apis/contacto.php">Contactanos</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    <form class="d-flex">
                    <a class="btn btn-outline-primary" href="login.php" type="submit">
                            <i class="bi bi-person-badge"></i>
                            Iniciar sesion
                    </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Perritos</h1>Los Mejores Perritos</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php for ($i=0;$i<count($datos);$i++){?>
                    <div class="col mb-5">                    
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../../img/<?php echo $datos[$i]['ruta']?>.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $datos[$i]['cat_nom']?></h5>
                                    <!-- Product price-->
                                    <?php echo $datos[$i]['cat_obs']?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><input type="checkbox" name="" id=""></div>
                            </div>
                        </div>
                    </div>
                    <?php }?> 
                                    
        </section> 
        <div align="center" class="py-5" id="paypal-button-container"></div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
            paypal.Buttons({
                style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay'
            },
            createOrder: function(data, actions){
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 100
                        }
                    }]
                });
            },
            onApprove: function(data, actions){
                actions.order.capture().then(function (detalles){
                    alert('Gracias por su pago');
                });
            },
            onCancel: function(data){
                alert('Pago cancelado');
            }
                }).render('#paypal-button-container');
        </script>
    </body>
</html>
