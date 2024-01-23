
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
        
        <div class="row">
            <?php
           
           
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="row">
                    <div class="col-md-4">
                        <h1>HAPPY CLIENTS</h1>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-ride="carousel" data-bs-interval="3000">
                            <div class="carousel-inner">
                                <?php
                                $counter = 0; // Counter to track the active item
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $counter++;
                                    ?>
                                    <div class="carousel-item <?php echo ($counter === 1) ? 'active' : ''; ?>">
                                        <div class="card" style="background: linear-gradient(to bottom, #008080, #00CED1);">
                                            <div class="card-header" style="background-color:#add8e6">
                                                <?php echo $row['FirstName'] . ' ' . $row['LastName']; ?>
                                            </div>
                                            <div class="card-body">
                                                <blockquote>
                                                    <h3 class="card-text"><q><?php echo $row['Compliment']; ?></q></h3>
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
                    </div>
                    <div  class="col-md-6">
                        <?php include("dad.php") ;?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#myCarousel').carousel();
    });
</script> 
</body>
</html>