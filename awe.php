<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-GLhlTQ8i6ND87ZlNl3/jzRnI9+JDE5LlE9booIcZgnd5Pq79L4kQF5KdXv8FZ+Tb"
        crossorigin="anonymous">
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <form action="book-process.php" method="POST" class="booking-form">
                    <div class="form-title">
                        <h2>Book Now</h2>
                        <p class="lead">Secure your spot with ease</p>
                    </div>
                    <div class="form-group">
                        <label for="FullName"><i class="fas fa-user"></i> Full Name</label>
                        <input type="text" name="FullName" id="FullName" class="form-control"
                            placeholder="Your Full Name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="PhoneNumber"><i class="fas fa-phone"></i> Phone Number</label>
                        <input type="tel" name="PhoneNumber" id="PhoneNumber" class="form-control"
                            placeholder="Your Phone Number" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="Email"><i class="fas fa-envelope"></i> Email Address</label>
                        <input type="email" name="Email" id="Email" class="form-control"
                            placeholder="YourEmail@example.com" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="DateTime"><i class="far fa-calendar-alt"></i> Preferred Date & Time</label>
                        <input type="text" name="DateTime" id="DateTime" class="form-control"
                            placeholder="mm/dd/yyyy hh:mm am/pm" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>
        // Set current date and time for the DateTime input
        document.getElementById('DateTime').valueAsDate = new Date(); // Set current date
        document.getElementById('DateTime').valueAsDate.setMinutes(0); // Set minutes to 0
        document.getElementById('DateTime').valueAsDate.setSeconds(0); // Set seconds to 0
    </script>
</body>

</html>
