<?php

    class Employee {
        // For DBconnection
        private $conn; 
        private $table = 'Employees'; 

        // Public Attributes
        public $emp_id; 
        public $name; 


        // Constructor for DB
        public function __construct($db){
            $this->conn = $db; 
        }

        // Readfunction for Employees
        public function read(){
            //Query
            $query = 'SELECT Emp_ID, Name FROM ' . $this->table . ''; 

            //Prep Statement
            $stmt = $this->conn->prepare($query); 

            // Execute
            $stmt->execute(); 
            return $stmt; 
        }

        // Readfunction Sales for Employees
        public function readSales(){
            //Query
            $query = 'SELECT e.Emp_ID, e.Name, sum(c.Price) AS "Sales"
            FROM Employees e 
            JOIN Sales s 
            on e.Emp_ID = s.Emp_ID 
            JOIN Carmodels c 
            ON c.Car_ID = s.Car_ID
            GROUP BY e.name
            ORDER BY e.Emp_ID'; 

            //Prep Statement
            $stmt = $this->conn->prepare($query); 

            // Execute
            $stmt->execute(); 
            return $stmt; 
        }

    }
