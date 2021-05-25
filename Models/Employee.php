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

    }

