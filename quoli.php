<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QQualifications </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      

        h1 {
            color:chocolate  ;
            text-align: center;
            margin-bottom: 20px;
    
        }

ul:first-child  li:before { content:"\2713\0020"; }  /* OR */
ul:nth-child(2) li:before { content:"\2714\0020"; }  /* OR */
ul:last-child   li:before { content:"\2611\0020"; }
ul      { list-style-type: none; }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background-color:#DBC078; border-radius: 20px;  border:solid green 2px">
            <?php include("van.php"); ?>
        </div>
        <div class="row" style="background-color: #b4c3eb; border:2px solid green; border-radius:20px">
        <div >
            <u style="color:green;"> <h1><i>Qualifications</i></h1></u>
            <ul>
                <p><li>Dr Kirabo possesses excellent qualifications and is still advancing in knowledge and skills.</li></p>
                <p><li>Master of Veterinary Preventive Medicine (MVPM) Makerere University Kampala</li></p>
                <li><p>Bachelor of Veterinary Medicine (BVM) Makerere University Kampala</p></li>
                <li><p>Certificate in Avian influenza Preparedness   FAO Virtual Learning Center</p></li>
                <li><p>Certificate in Sustainability Food Production through Livestock Health Management, University of Illinois.</p></li>
                <li><p>Certificate in Chicken behavior and welfare The university of Edinburgh</p></li>
                <li><p>Certificate Training on Current Topics in Antimicrobial Resistance Makerere University</p></li>
                <li><p>Certificate in One Health Principles in Infectious Disease Management Makerere University</p></li>
                <li><p>Certificate in Dairy Production and Management, The Pennsylvania State University</p></li>
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