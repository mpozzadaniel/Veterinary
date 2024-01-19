<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "veterinary";
    $con = mysqli_connect($host, $user, $password, $database);
    if($con){
    // echo"connected successfuly to database";

    }
    else{
        //echo"connection to database failed";
    }
?>