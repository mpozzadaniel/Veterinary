<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Kirabo Martha, DVM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #2C3E50;
            color: #fff;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #34495E;
            padding: 10px;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        .hero {
            position: relative;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .hero img {
            width: 100%;
            max-width: 1200px;
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
            font-size: 20px;
            margin-bottom: 30px;
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
            padding: 50px;
            text-align: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .about h2 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }

        footer {
            background-color: #34495E;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <header>
            <h1>Dr. Kirabo Martha, DVM</h1>
        </header>

        <section class="hero">
            <img src="mat.PNG" alt="Dr. Kirabo Martha, DVM">
            <div class="hero-content">
                <h1>Compassionate Veterinary Care for Your Pets</h1>
                <p>Your Pet's Health is Our Priority.</p>
                <a href="Book.php" class="cta-button">Schedule an Appointment</a>
            </div>
        </section>

        <section id="about" class="about">
            <div class="about-content">
                <h2>About Dr. Kirabo Martha, DVM</h2>
                <p>Passionate about providing high-quality and personalized care to pets. With years of experience and a deep love for animals, Dr. Kirabo is committed to ensuring your pet's well-being.</p>
            </div>
        </section>

        <section id="services" class="services">
            <?php include("services.php"); ?>
        </section>

        <footer>
            <p>&copy; 2024 Dr. Kirabo Martha, DVM. All rights reserved.</p>
        </footer>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
