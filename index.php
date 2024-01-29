<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .container-fluid {
            width: 100%; 
            padding: 0px;
            margin: 0px;
           
        }
        .hero {
            position: relative;
            text-align: center;
          
        }

        .hero img {
            width: 8000px;
            max-width: 1000px;
            height: 1400px;
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
            padding:  0px;
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
    <div class="container-fluid" style="background-color:#2C3E50;">
        <div class="row" style=" border-radius: 5px; ">
            <?php include("wed.php"); ?>
        </div>
        <div class="row">

        
  

            <section class="hero">
                <img src="dcwq.jpg" alt="Happy Pet">
                <div class="hero-content">
                <a href="exa-2.php" class="cta-button">  QUALIFICATIONS </a>
                <!--<h1>Compassionate Care for Happy, Healthy Pets</h1>-->
                <p>Dr Kirabo possesses excellent qualifications and is still advancing in knowledge and skills.</p>
                
              
               
                </div>
            </section>

            <section id="about" class="about">
                <div class="about-content">
                <a href="" class="cta-button"></a>
                <p></p>
                </div>
            </section>

            
        </div>
        <footer>
        
            <?php include("footer.php") ;?>
            
        </footer>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
