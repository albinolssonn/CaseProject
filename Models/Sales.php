<?php

    class Sales {
        // For DBconnection
        private $conn; 
        private $table = 'Sales'; 

        // Public Attributes
        public $Car_ID; 
        public $Emp_ID; 
        public $Sales_ID; 

        // Constructor for DB
        public function __construct($db){
            $this->conn = $db; 
        }

        // Readfunction for Employees
        public function read(){
            //Query
            $query = 'SELECT Car_ID, Emp_ID, Sales_ID FROM ' . $this->table . ''; 

            //Prep Statement
            $stmt = $this->conn->prepare($query); 

            // Execute
            $stmt->execute(); 
            return $stmt; 
        }
    }
