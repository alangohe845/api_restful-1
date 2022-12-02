<?php

//Clase que se utilizara para crear el modelo que interactua con la base de datos api_restful
include_once("../config/conexion.php");

class Categoria extends Conectar
{
    //funcion para traer todos los registros de la tabla categoria
    public function getCategoria()
    {
        //Llamar la cadena de conexion a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql = "select * from categoria where est = 1";

        //Preparar la conexion con el string
        $sql = $conectar->prepare($sql);

        //Ejecutar la consulta
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    //Funcion para traes un registro en particular
    public function getCategoria_id($cat_id)
    {
        //Llamar la cadena de conexion a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql = "select * from categoria where est = 1 and cat_id = ?";

        //Preparar la conexion con el string
        $sql = $conectar->prepare($sql);

        //Utilizar los parametros en la consulta 
        $sql->bindValue(1, $cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    //Funcion para insertar datos
    public function postCategoria($cat_nom, $cat_obs, $ruta)
    {
        //Llamar la cadena de conexion a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql = "INSERT INTO categoria VALUES (null, ?, ?, ?,1)";

        //Preparar la conexion con el string
        $sql = $conectar->prepare($sql);

        //Utilizar los parametros en la consulta
        //Depende de la cantidad de parametros que va a llamar 
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->bindValue(3, $ruta);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function putCategoria($cat_nom, $cat_obs,$ruta, $cat_id)
    {
        //Llamar la cadena de conexion a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql = "UPDATE categoria SET cat_nom = ?, cat_obs = ?, ruta = ? where cat_id = ?";

        //Preparar la conexion con el string
        $sql = $conectar->prepare($sql);

        //Utilizar los parametros en la consulta
        //Depende de la cantidad de parametros que va a llamar 
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->bindValue(3, $ruta);
        $sql->bindValue(4, $cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteCategoria($cat_id)
    {
        //Llamar la cadena de conexion a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql = "DELETE FROM categoria WHERE cat_id = ?";

        //Preparar la conexion con el string
        $sql = $conectar->prepare($sql);

        //Utilizar los parametros en la consulta
        //Depende de la cantidad de parametros que va a llamar 
        $sql->bindValue(1, $cat_id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>