<?php
  
  class Usuario extends Conectar{

       public function getUsuarios_sesion($user,$pwd)
       {
        $conectar=parent::Conexion();
          
        $sql="select * from usuarios where user=? and pwd=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$user);
        $sql->bindValue(2,$pwd);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
       }

       public function getUsuarios()
       {
        //Llamar la cadena de conexion a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql = "select * from usuarios";

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
      public function postCategoria($cat_nom, $cat_obs)
      {
        //Llamar la cadena de conexion a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql = "INSERT INTO categoria VALUES (null, ?, ?,1)";

        //Preparar la conexion con el string
        $sql = $conectar->prepare($sql);

        //Utilizar los parametros en la consulta
        //Depende de la cantidad de parametros que va a llamar 
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
      }
      public function putCategoria($cat_nom, $cat_obs, $cat_id)
      {
        //Llamar la cadena de conexion a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql = "UPDATE categoria SET cat_nom = ?, cat_obs = ? where cat_id = ?";

        //Preparar la conexion con el string
        $sql = $conectar->prepare($sql);

        //Utilizar los parametros en la consulta
        //Depende de la cantidad de parametros que va a llamar 
        $sql->bindValue(1, $cat_nom);
        $sql->bindValue(2, $cat_obs);
        $sql->bindValue(3, $cat_id);
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