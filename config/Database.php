<?php

    class Database{

        // DB Parameters
        private $host = 'localhost'; 
        private $db_name = 'carshop'; 
        private $username = 'root'; 
        private $password = ''; 
        private $conn; 

        //DB Connect
        public function connect(){
            $this->conn = null; 

            try{
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name,  $this->username, $this->password); 
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Sets exceptions when queryhandling goes wrong
            } catch(PDOExeption $e){
                echo 'Connection Error: ' . $e->getMessage(); 
            }

            return $this->conn; 
        }
    }