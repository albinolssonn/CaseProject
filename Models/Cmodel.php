<?php

    class Carmodel {

        // For DBconnection

        private $conn; 

        private $table = 'Carmodels'; 



        // Public Attributes

        public $car_id; 

        public $brand; 

        public $model; 

        public $price; 



        // Constructor for DB

        public function __construct($db){

            $this->conn = $db; 

        }



        // Readfunction for Carmodels

        public function read(){

            //Query

            $query = 'SELECT Car_ID, Brand, Model, Price FROM ' . $this->table . ''; 

            

            //Prep Statement

            $stmt = $this->conn->prepare($query); 



            // Execute

            $stmt->execute(); 



            return $stmt; 

        }

    }
