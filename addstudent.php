<?php 


require 'Conection.php';


function  addstudent(){


global $con;

    $roll_no=$_POST['rollno'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    

    $sql = "INSERT INTO `students` (`rollno`, `fname`, `lname`, `age`, `email`, `gender`, `address`, `phone`) VALUES ('$roll_no', '$fname', '$lname', '$age', '$email', '$gender', '$address', '$phone')";
    
   // $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
        echo "Data Added Successfully";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
}
?>