<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimony</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: 20px;
        }

        .testimonial-form {
            background-color: #fff;
            border: 4px solid #28a745;
            border-radius: 10px;
            padding: 20px;
        }

        .form-title {
            color: #28a745;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        textarea {
            resize: vertical;
        }

        .btn-submit {
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-6 offset-md-3 testimonial-form" style="background-color: #fa8072;">
                <h2 class="form-title">LEAVE US A MESSAGE</h2>
               <form action="proccess-test.php" method="POST">
                    <center><div class="form-group">
                        <label for="Firstname">Firstname</label>
                        <input type="text" id="Firstname" class="form-control" name="Firstname" placeholder="Surname" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="Secondname">Secondname</label>
                        <input type="text" id="Secondname" class="form-control" name="Secondname" placeholder="Given Name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" id="Email" class="form-control" name="Email" placeholder="Email" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="Compliment">Compliment:</label>
                        <textarea id="Compliment" class="form-control" name="Compliment" placeholder="Comment or Message" autocomplete="off" required></textarea>
                    </div></center>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
