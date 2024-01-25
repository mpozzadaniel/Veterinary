<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QQualifications </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      

        .h1 {
            color:chocolate  ;
           
            margin-bottom: 20px;
    
        }
        li{
            font-size: 18px       }

       
       li:before { content:"\2611\0020"; }
        ul      { list-style-type: none; }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style=" border-radius: 5px; ">
            <?php include("wed.php"); ?>
        </div>
        <div class="row" style="background-color: #ffd7e3 ;  border-radius:5px">
        <div >
            <h1 class="h1">Qualifications</h1>
            <h3> Dr Kirabo possesses excellent qualifications and is still advancing in knowledge and skills.</h3>
            <ul>
               
                <p><li>Master of Veterinary Preventive Medicine (MVPM) - Makerere University Kampala</li></p>
                <p><li>Bachelor of Veterinary Medicine (BVM) - Makerere University Kampala</li></p>
                <p><li>Certificate in Avian influenza Preparedness -  FAO Virtual Learning Center</li></p>
                <p><li>Certificate in Sustainability Food Production through Livestock Health Management, - University of Illinois.</li></p>
                <p><li>Certificate in Chicken behavior and welfare - The university of Edinburgh</li></p>
                <p><li>Certificate Training on Current Topics in Antimicrobial Resistance - Makerere University</li></p>
                <p><li>Certificate in One Health Principles in Infectious Disease Management - Makerere University</li></p>
                <p><li>Certificate in Dairy Production and Management, - The Pennsylvania State University</li></p>
            </ul>
        </div>


        </div>
        <div class="row" style="background-color:#333; border-radius: 10px;">
            <?php include("footer.php") ;?>
        </div>
    </div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>