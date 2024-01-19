<?php
   require_once("connect.php");

   $fn = $_POST["FullName"];
   $num = $_POST["PhoneNumber"];
   $mail = $_POST["Email"];
   $dat = $_POST["DateAndTime"];
  
   

   $query = "INSERT INTO book (FullName,PhoneNumber,Email,DateAndTime)VALUES(?,?,?,?)";
    $statement = mysqli_prepare($con, $query);

    mysqli_stmt_bind_param($statement, "ssss",$fn, $num, $mail, $dat );

    mysqli_stmt_execute($statement);
    echo"data submitteted successfully";
    header("Location: book.php");
    exit();
   
?>