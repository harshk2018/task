<?php

require 'Conection.php';


global $dataofs;
function StudentList(){

global $con;

$query = "SELECT * FROM students";
$query_run =mysqli_query($con,$query);

if($query_run){

        if(mysqli_num_rows($query_run)>0)
        {
            $res= mysqli_fetch_all($query_run, MYSQLI_ASSOC);
            $dataofs=$res;
        
            $data = [
                'status' => 200,
                'message' => "Success",
                'data' => $res,
                 
            ];
        
            header("HTTP/1.0 200 Success");
            return json_encode($data);

        }else{
            
            
    $data = [
        'status' => 404,
        'message' => "Student Not Found",
    ];

    header("HTTP/1.0 404 Student Not Found");
    return json_encode($data);
        }

}else{


    $data = [
        'status' => 500,
        'message' => "Internal Server Error",
    ];

    header("HTTP/1.0 500 Internal Server Error");
    return json_encode($data);
}

}

?>

