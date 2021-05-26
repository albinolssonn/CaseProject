<!-- This class is for testing -->

<?php
    // Headers 
    header('Access-Control-Allow-Orogin: *'); 
    header('Content-Type: application/json'); 

    include_once '../../config/Database.php'; 
    include_once '../../Models/Sales.php'; 

    // Instantiate DB & Connect
    $database = new Database(); 
    $db = $database->connect(); 

    //Instantiate Sales obj.
    $sale = new Sales($db);
    
    $result = $sale->read(); 
    //Get Row Count
    $num = $result->rowCount(); 

    //Check if there's any cars
    if ($num > 0) {
        // Array
        $sale_array = array(); 
        $sale_array['data'] = array(); 

        // Loop through array of results
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row); 

            $sale_item = array(
                'Car_ID' => $Car_ID, 
                'Emp_ID' => $Emp_ID, 
                'Sales_ID' => $Sales_ID, 

            );

            // Push to data
            array_push($sale_array['data'], $sale_item); 
        }

        // Turn to JSON-format
        echo json_encode($sale_array); 
    } else {
        echo json_encode(
            array('message' => 'No Employees found')
        );
    }