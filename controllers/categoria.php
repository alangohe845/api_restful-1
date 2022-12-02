<?php
  //Crear el controlador que se comunique con el modelo
  //para acceder a los metodos del modelo a traves de los 
  //endpoint 

  //Agregar la siguiente linea para que la app sepa que se se utilzaran JSON
  header('Content-Type:application/json');

  require_once("../config/conexion.php");
  require_once("../models/Categoria.php");

  //crear un objeto de tipo categoria para instancias los 
  //metodos del modelo
  $categoria=new Categoria();

  //Recibir la informacion en un JSON que hay que preparar en objeto body
  $body=json_decode(file_get_contents("php://input"),true);

  //crear un switch para navegar entre los diferentes 
  //servicios que ofrece el API a traves del los endpoint
  switch($_GET["op"])
  {
    //case es para regresar todos los registros de categoria
    case "selectall": $datos=$categoria->getCategoria();
    echo json_encode($datos);
    break;
    case "selectid": $datos=$categoria->getCategoria_id($body["cat_id"]);
    echo json_encode($datos);
    break; 
    case "insert": $datos=$categoria->postCategoria($body["cat_nom"], $body["cat_obs"], $body["ruta"]);
    echo json_encode("Agregado con exito");
    break; 
    //case es para regresar un registro en particular de categoria
    case "update": $datos=$categoria->putCategoria($body["cat_nom"], $body["cat_obs"],$body["ruta"], $body["cat_id"]);
    echo json_encode("Actualizado con exito");
    break;           
    case "delete": $datos=$categoria->deleteCategoria($body["cat_id"]);
    echo json_encode("Eliminado con exito");
    break;           

  }

?>