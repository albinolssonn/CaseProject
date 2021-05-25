<?php
    // Headers 
    header('Access-Control-Allow-Orogin: *'); 
    header('Content-Type: application/json'); 

    include_once '../../config/Database.php'; 
    include_once '../../Models/Employee.php'; 

    // Instantiate DB & Connect
    $database = new Database(); 
    $db = $database->connect(); 

    //Instantiate Employee obj.
    $employee = new Employee($db);
    
    $result = $employee->read(); 
    //Get Row Count
    $num = $result->rowCount(); 

    //Check if there's any cars
    if ($num > 0) {
        // Array
        $emp_array = array(); 
        $emp_array['data'] = array(); 

        // Loop through array of results
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row); 

            $emp_item = array(
                'Emp_ID' => $Emp_ID, 
                'Name' => $Name, 

            );

            // Push to data
            array_push($emp_array['data'], $emp_item); 
        }

        // Turn to JSON-format
        echo json_encode($emp_array); 
    } else {
        echo json_encode(
            array('message' => 'No Employees found')
        );
    }