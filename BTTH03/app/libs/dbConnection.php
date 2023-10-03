<?php
    
    require_once '../app/configs/config.php';
    
    class dbConnection
    {
        private $host;
        private $username;
        private $password;
        private $dbname;
        private $conn;
        
        /**
         * @param $host
         * @param $username
         * @param $password
         * @param $dbname
         */
        public function __construct($host, $username, $password, $dbname)
        {
            $this->host = dbHOST;
            $this->username = dbUSER;
            $this->password = dbPASS;
            $this->dbname = dbNAME;
            try {
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8",$this->username,$this->password);
                echo "Connect success";
                
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        
        public function getConnection()
        {
            return $this->conn;
            
        }
        
    }