<?php
header("Content-Type: aplication/json");

require_once("../config/conexion.php");
require_once("../models/Productos.php");
//crear un objeto de tipo categoria para instanciar los metodos.
//metodos del modelo

$Productos=new Productos();

//recibir la info en json que hay que preparar en el objeto body
$body=json_decode(file_get_contents("php://input"), true);

//crear un switch para navegar entre los diferentes 
//servicios que ofre el API a traves de los endpoint

switch($_GET["op"]){
    //case para regresar todos los registros de categoria
    case "selectall": $datos=$Productos->getProductos();
                echo json_encode($datos);
                break;
    //regresar un registro en particular
    //case para regresar todos los registros de categoria
    case "selectid": $datos=$Productos->getProductos_id($body["id"]);
                echo json_encode($datos);
                break;
    //case para insertar en la tabla categoria
    case "insert": $datos=$Productos->postProductos_id($body["nombre"],$body["PU"],$body["cantidad"],$body["cat_id"]);
                echo json_encode("Registro insertado exitosamente");
                break;
                //case para actualizar
    case "put": $datos=$Productos->putProductos_id($body["id"],$body["nombre"],$body["PU"],$body["cantidad"],$body["cat_id"]);
                echo json_encode("Actualizado exitosamente");
                break;
    //case para eliminar
    case "del": $datos=$Productos->deleteProductos_id($body["id"]);
                echo json_encode("Eliminado exitosamente");
                break;
}

?>