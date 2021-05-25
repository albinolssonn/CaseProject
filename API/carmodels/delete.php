<?php
    // Headers 
    header('Access-Control-Allow-Orogin: *'); 
    header('Content-Type: application/json'); 
    header('Access-Control-Allow-Methods: DELETE'); 
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-Width'); 


    include_once '../../config/Database.php'; 
    include_once '../../Models/Carmodel.php'; 

    // Instantiate DB & Connect
    $database = new Database(); 
    $db = $database->connect(); 

    //Instantiate carmodel obj.
    $carmodel = new Carmodel($db);

    // Get raw data
    $data = json_decode(file_get_contents("php://input")); 

    // Set ID to Delete
    $carmodel->Car_ID = $data->Car_ID;

    // Delete Carmodel
    if($carmodel->deleteCar()){
        echo json_encode(
            array('message' => 'Carmodel Deleted')
        );
    } else {
        echo deleteCar(
            array('message' => 'Carmodel Not Deleted')
        );
    }