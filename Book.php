<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-GLhlTQ8i6ND87ZlNl3/jzRnI9+JDE5LlE9booIcZgnd5Pq79L4kQF5KdXv8FZ+Tb" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5; 
            color: #333; 
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

        .booking-form {
            background-color: #ffe1ea ; 
            border: 1px solid #ff4081; 
            border-radius: 10px;
            padding: 30px;
            margin-top: 20px; /* Adjust the value as needed */
            margin-bottom: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            color: #ff4081; 
            text-align: center;
            margin-bottom: 30px;
        }

        col{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333; 
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="text"] {
            background-color: #f8f9fa; 
            border: 1px solid #ced4da; 
            color: #495057; 
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #ff4081; 
            color: #fff; 
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color:#d81b60; 
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style=" border-radius: 5px; ">
            <?php include("wed.php"); ?>
        </div>
        <div class="row" style="background-color:#ffe1f9 ">
            <div class="col-lg-6 mx-auto">
                <form class="booking-form" action="proccess-book.php" method="POST">
                    <div class="form-title">
                        <h2>You can Book Now</h2>
                        <p class="lead">Secure your spot with ease</p>
                    </div>
                    <div class="form-group">
                        <label for="FullName"><i class="fas fa-user"></i> Full Name</label>
                        <input type="text" name="FullName" id="FullName" class="form-control" placeholder="Full Name"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumber"><i class="fas fa-phone"></i> Phone Number</label>
                        <input type="tel" name="PhoneNumber" id="PhoneNumber" class="form-control"
                            placeholder="Phone Number" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="Email"><i class="fas fa-envelope"></i> Email Address</label>
                        <input type="email" name="Email" id="Email" class="form-control" placeholder="Email@me.com"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="DateAndTime"><i class="far fa-calendar-alt"></i> Preferred Date & Time</label>
                        <input type="text" name="DateAndTime" id="DateAndTime" class="form-control"
                            placeholder="mm/dd/yyyy" autocomplete="off" required>
                    </div>
                    <button class="btn cta-button">Book Now</button>
                </form>
            </div>
        </div>
        <div class="row" style="background-color:#333; border-radius: 10px;">
            <?php include("footer.php") ;?>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
