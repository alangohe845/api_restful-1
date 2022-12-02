<?php
    //clase para establecer conexion con la BD api_restful

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=api_restful","root","");
                return $conectar;
            }catch(Exception $e){
                print "¡Error en la base de datos!".$e->getMessege()."</br>";
                die("Verifica por favor.....");
            }
        }
    }
?>