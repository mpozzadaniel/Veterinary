<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        
        .hero {
            position: relative;
            text-align: center;
          
        }

        .hero img {
            width: 100%;
            max-width: 12000px;
            height: 500px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
        }

        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .hero p {
            font-size: 30px;
            color:darkcyan;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #EC7063;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
           
        }

        .cta-button:hover {
            background-color: #D35400;
        }

        .about {
            background-color: #fff;
            padding: 80px 0;
            text-align: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .about h2 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

       
       

       
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background-color:#DBC078; border-radius: 20px;  border:solid green 2px">
            <?php include("van.php"); ?>
        </div>
        <div class="row">

        
  

            <section class="hero">
                <img src="mat.PNG" alt="Happy Pet">
                <div class="hero-content">
                <h1>Compassionate Care for Happy, Healthy Pets</h1>
                <p>Your Trusted Veterinary Partner for Exceptional Pet Care.</p>
                <a href="Book.php" class="cta-button">Schedule an Appointment</a>
                </div>
            </section>

            <section id="about" class="about">
                <div class="about-content">
                <h2>About Us</h2>
                <p></p>
                </div>
            </section>

            <?php include("view.php") ;?>
        </div>
        <footer>
        
            <?php include("footer.php") ;?>
            
        </footer>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
