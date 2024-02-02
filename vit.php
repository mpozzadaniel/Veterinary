<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Kirabo Martha - Veterinary Professional</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa; /* Soft background color */
        }

        .container-fluid {
            padding: 0;
        }

        .hero {
            position: relative;
            text-align: center;
        }

        .hero img {
            width: 100%;
            max-width: 600px; /* Adjusted image size */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #262626; /* Dark text color */
        }

        .hero h1, .hero p {
            margin: 0;
            font-weight: bold;
        }

        .hero h1 {
            font-size: 2.5em; /* Larger heading */
            margin-bottom: 10px;
            color: #343a40; /* Dark heading color */
        }

        .hero p {
            font-size: 1.8em; /* Larger paragraph text */
            color: #3498db; /* Blue text color */
            margin-bottom: 20px;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #e74c3c; /* Red button color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            font-weight: bold;
        }

        .cta-button:hover {
            background-color: #c0392b; /* Darker red on hover */
        }

        .about {
            background-color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px; /* Increased top margin */
        }

        .about h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            color: #262626;
        }

        footer {
            padding: 20px;
            background-color: #343a40; /* Dark footer background color */
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include("wed.php"); // Add header include ?>
        </div>

        <div class="row">
            <section class="hero">
                <img src="dcwq.jpg" alt="Dr. Kirabo Martha - Vet Doctor">
                <div class="hero-content">
                    <h1>Providing Expert Veterinary Care</h1>
                    <p>Dr. Kirabo Martha, DVM, MVPM</p>
                    <a href="#" class="cta-button">Explore Services</a>
                </div>
            </section>

            <section id="about" class="about">
                <div class="about-content">
                    <h2>About Dr. Kirabo Martha</h2>
                    <p>Dr. Kirabo Martha is a highly skilled veterinary professional with a degree in Veterinary Medicine and Surgery and a Master's in Veterinary Preventive Medicine.</p>
                    <!-- Add more about information here -->
                </div>
            </section>
        </div>

        <footer>
            <?php include("footer.php"); // Add footer include ?>
        </footer>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>s