<?php
    #Clase para realizar la conexion a la base de datos
    class Conexion {
        #Atributos
        private $host; //Localhots o IP
        private $db; //nombre de la base de datos
        private $usuario; //Usuario de la base de datos
        private $pass; //Contraseña del usuario de la base de datos
        private $charset; //Codificación de la base de datos (UTF8)

        #Constructor
        public function __construct(){
            $this->host = "localhost:3307";
            $this->db = "reposteria";
            $this->usuario = "root";
            $this->pass = "";
            $this->charset = "utf8";
        }

        #Metodo para conectar a la base de datos
        function conectar() {
            #Conectar a la BD --> PDO
            $com = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
            $enlace = new PDO($com, $this->usuario, $this->pass);   //Instancia de la clase PDO
            return $enlace;
        }
    }
