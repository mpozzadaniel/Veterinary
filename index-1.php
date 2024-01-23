<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f7f7f7;
        }

        header {
            background-color: #2C3E50;
            color: #fff;
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #EC7063;
        }

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
            color:slategrey;
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
            transition: background-color 0.3s ease;
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

        .about p {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
        }

        footer {
            background-color: #2C3E50;
            color: #fff;
            text-align: center;
           
            bottom: 0;
            width: 100%;
        }

        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }

       
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background-color:#DBC078; border-radius: 20px;  border:solid green 2px">
            <?php include("nav-2.php"); ?>
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
