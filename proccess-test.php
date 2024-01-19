<?php
   require_once("connect.php");

   $fn = $_POST["Firstname"];
   $sn = $_POST["Secondname"];
   $mail = $_POST["Email"];
   $comp = $_POST["Compliment"];
  
   

   $query = "INSERT INTO test (Firstname,Secondname,Email,Compliment)VALUES(?,?,?,?)";
    $statement = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($statement, "ssss",$fn, $sn, $mail, $comp );

    mysqli_stmt_execute($statement);
    echo"data submitteted successfully";
    header("Location: test.php");
    exit();
   
?>