<?php 
include('../../config/conexion.php');
include('../../models/Categoria.php');
$id=$_REQUEST['cat_id'];

   $payload = json_encode(array("cat_id" => $id));
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/appwebOS/Parcial2/api_restful2/api_restful/controllers/categoria.php?op=delete',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_POSTFIELDS => $payload,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
if ($response){
  echo"<script>
  alert('Registro eliminado con exito');
  location.href = 'administrarCategoria.php';
  </script>"; 
}
    else{
      echo"<script>alert('Error al eliminar')</script>"; 
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
<?php
    
    if ($response) {
        $a = "elim_api";
      }
      include_once('../alerta.php');
      
    ?>
</body>
</html>