<?php
   require_once("connect.php");

   $fn = $_POST["FirstName"];
   $ln = $_POST["LastName"];
   $pl = $_POST["Place"];
   $comp = $_POST["Compliment"];
  
   

   $query = "INSERT INTO testimony (FirstName,LastName,Place,Compliment)VALUES(?,?,?,?)";
    $statement = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($statement, "ssss", $fn, $ln, $pl, $comp);

    mysqli_stmt_execute($statement);
    echo"data submitteted successfully";
    header("Location: index.php");
    exit();
   
?>