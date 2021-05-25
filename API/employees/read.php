<?php
    <?php
    // Headers 
    header('Access-Control-Allow-Orogin: *'); 
    header('Content-Type: application/json'); 

    include_once '../../config/Database.php'; 
    include_once '../../Models/Employees.php'; 

    // Instantiate DB & Connect
    $database = new Database(); 
    $db = $database->connect(); 

    //Instantiate carmodel obj.
    $carmodel = new Carmodel($db);
    
    $result = $carmodel->read(); 
    //Get Row Count
    $num = $result->rowCount(); 

    //Check if there's any cars
    if ($num > 0) {
        // Array
        $car_array = array(); 
        $car_array['data'] = array(); 

        // Loop through array of results
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row); 

            $car_item = array(
                'Car_ID' => $Car_ID, 
                'Brand' => $Brand, 
                'Model' => $Model, 
                'Price' => $Price
            );

            // Push to data
            array_push($car_array['data'], $car_item); 
        }

        // Turn to JSON-format
        echo json_encode($car_array); 
    } else {
        echo json_encode(
            array('message' => 'No Carmodels found')
        );
    }