<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Header, Authorization, X-Request-With');

include('addstudent.php');


$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "POST"){

$addstudent = addstudent();
echo $addstudent;


}else
{
    $data = [
        'status' => 405,
        'message' => $requestMethod. "Not Allowed",
    ];

    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}

?>