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

        // Create Carmodel
        public function createCar(){
            // Query
            $query = 'INSERT INTO ' . $this->table . ' SET Brand = :Brand, Model = :Model, Price= :Price';

            // Prepare Statement
            $stmt = $this->conn->prepare($query); 

            // Clean Data - A bit extra
            $this->Brand = htmlspecialchars(strip_tags($this->Brand));
            $this->Model = htmlspecialchars(strip_tags($this->Model));
            $this->Price = htmlspecialchars(strip_tags($this->Price));

            // Bind Data
            $stmt->bindParam(':Brand', $this->Brand); 
            $stmt->bindParam(':Model', $this->Model); 
            $stmt->bindParam(':Price', $this->Price);
            
            // Execute Query
            if($stmt->execute()){
                return true; 
            }
            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt->error);
            return false; 






        }

    }
