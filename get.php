

<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Header, Authorization, X-Request-With');

include('Studentlist.php');


$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){

$StudentList = StudentList();
echo $StudentList;


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


