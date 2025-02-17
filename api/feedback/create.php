<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database connection
include_once '../config/database.php';
 
// instantiate product object
include_once '../objects/feedback.php';
 
$database = new Database();
$db = $database->getConnection();
 
$feedback = new Feedback($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// make sure data is not empty
if(
    !empty($data->rating) &&
    !empty($data->period) &&
    !empty($data->userId)
){
 
    // set feedback property values
    $feedback->period = $data->period;
    $feedback->rating = $data->rating;
    $feedback->comments = $data->comments;
    $feedback->clients = $data->clients;
    $feedback->userId = $data->userId;
    $feedback->created = date('Y-m-d H:i:s');
 
    // create the feedback
    if($feedback->create()){
 
        // set response code - 201 created
        http_response_code(201);
 
        // tell the user
        echo json_encode(array("message" => "feedback was created."));
    }
 
    // if unable to create the feedback, tell the user
    else{
 
        // set response code - 503 service unavailable
        http_response_code(503);
 
        // tell the user
        echo json_encode(array("message" => "Unable to create feedback."));
    }
}
 
// tell the user data is incomplete
else{
 
    // set response code - 400 bad request
    http_response_code(400);
 
    // tell the user
    echo json_encode(array("message" => "Unable to create feedback. Data is incomplete."));
}
?>