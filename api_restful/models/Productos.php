<?php
    //clase que se utilizara para crear el modelo que interactua con la base datos api_rest

    class Productos extends Conectar{
        
        //atributos



        //metodos
        //funcion para traer todos los registros de la tabla categoria
        public function getProductos(){
            //Llamar la cadena de conexion a la BD
            $conectar=parent::Conexion();

            //string para la consulta
            $sql="SELECT * FROM productos";

            //preparar la conexion con el string 
            $sql=$conectar->prepare($sql);

            //Ejecutar la consulta
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getProductos_id($id){
            
            $conectar=parent::Conexion();

            
            $sql="SELECT * FROM productos where id = ?";

            $sql=$conectar->prepare($sql);
            //utilizar los parametros en la consulta
            $sql->bindValue(1, $id);
            
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        //funcion para insertar un registro en la tabla de categoria
        public function postProductos_id($nombre,$PU,$cantidad,$cat_id){
            
            $conectar=parent::Conexion();

            
            $sql="Insert into productos values ('',?,?,?,?)";

            
            $sql=$conectar->prepare($sql);
            //utilizar los parametros en la consulta
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $PU);
            $sql->bindValue(3, $cantidad);
            $sql->bindValue(4, $cat_id);
            
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        //Actualizar
        public function putProductos_id($id,$nombre,$PU,$cantidad,$cat_id){
            
            $conectar=parent::Conexion();

            
            $sql="update productos set nombre = ?, PU = ?, cantidad = ?, cat_id = ? where id = ?";

            
            $sql=$conectar->prepare($sql);
            //utilizar los parametros en la consulta
            $sql->bindValue(1, $nombre);
            $sql->bindValue(2, $PU);
            $sql->bindValue(3, $cantidad);
            $sql->bindValue(4, $cat_id);
            $sql->bindValue(5, $id);
            
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
        //Eliminar categoria
        public function deleteProductos_id($id){
            
            $conectar=parent::Conexion();

            
            $sql="delete from productos where id = ?";

            
            $sql=$conectar->prepare($sql);
            //utilizar los parametros en la consulta
            $sql->bindValue(1, $id);
            
            
            $sql->execute();

            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

    }


    

?>