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
include_once '../objects/leave.php';
 
$database = new Database();
$db = $database->getConnection();
 
$leave = new Leave($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
// make sure data is not empty
if(
    !empty($data->reason) &&
    !empty($data->endDate) &&
    !empty($data->startDate)
){
 
    // set leave property values
    $leave->reason = $data->reason;
    $leave->startDate = $data->startDate;
    $leave->endDate = $data->endDate;
    $leave->userId = $data->userId;
    $leave->created = date('Y-m-d H:i:s');
    // create the leave
    if($leave->create()){
        // set response code - 201 created
        http_response_code(201);
        // tell the user
        echo json_encode(array("message" => "User was created."));
    }
    // if unable to create the leave, tell the user
    else{
 
        // set response code - 503 service unavailable
        http_response_code(503);
 
        // tell the user
        echo json_encode(array("message" => "Unable to create leave."));
    }
}
 
// tell the user data is incomplete
else{
 
    // set response code - 400 bad request
    http_response_code(400);
 
    // tell the user
    echo json_encode(array("message" => "Unable to create leave. Data is incomplete."));
}
?>