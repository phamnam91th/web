<?php
    class config {
        // public $server_name = "103.200.23.160";
        // public $user_name = "digishop_viper";
        // public $password = "TiniWorld1@3";
        // public $database = "digishop_project_k2_g1";
        // public $port = "3306";
        /*   */

        public $server_name = "localhost";
        public $user_name = "root";
        public $password = "";
        public $database = "digishop_project_k2_g1";
        public $port = "3306";

        
        public $conn;

        public function __construct() {
            $dsn = "mysql:host=".$this->server_name.";port=".$this->port.";dbname=".$this->database.";charset=UTF8";
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            try {
                $this->conn = new PDO($dsn,$this->user_name,$this->password,$option);
                // echo "connect success";
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function connect() {
            return $this->conn;
        }

    }
?>