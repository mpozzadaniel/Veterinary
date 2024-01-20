
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimony</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php
 require_once("connect.php");
 $limit = 6;
$query = "SELECT * FROM testimony LIMIT $limit";
$result = mysqli_query($con, $query);
if(!$result){
    die("error" .mysqli_error($con));
}

?>
<body>
    <div class="container-fluid">
        
        <div class="row" style="background-color:#00ced1;">
            <?php
           
           
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-4">
                    <div class="card" style=" background: linear-gradient(to bottom, #008080, #00CED1);">
                        <div class="card-header" style="background-color:#add8e6">
                            <?php echo $row['FirstName'] . ' ' . $row['LastName']; ?>
                        </div>
                        <div class="card-body">
                           <blockquote>
                                <h3 class="card-text" ><q> <?php echo $row['Compliment']; ?></q></h3>
                           </blockquote>
                            
                        </div>
                        <div class="card-footer">
                            <h4>From:<?php echo $row['Place']; ?></h4>
                        </div>
                        
                       
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    
   
    <script src="bootstrap.min.js"></script> 
</body>
</html>