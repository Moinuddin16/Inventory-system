<?php

    class DB {

        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "inventory";
        private static $_instance;
        private $_connection;     
        
        public static function getInstance() 
        {
            if(!self::$_instance) 
            { 
                self::$_instance = new self();
            }
            
            return self::$_instance;
        }

    	private function __construct() {
            $this->_connection = new mysqli($this->servername, $this->username,$this->password, $this->dbname);
            
            if(mysqli_connect_error())
             {
			    trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);
             }
        }

        public function executeQuery($qurey)
        {
            return $this->_connection->query($qurey);
        }
        public function getId()
        {
            return mysqli_insert_id($this->_connection);
        }

        public function close() {
            $this->_connection->close();
        }
}
?>