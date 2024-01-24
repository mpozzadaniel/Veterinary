<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimony</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light Gray */
            color: #495057; /* Dark Gray */
        }

        .container-fluid {
            padding: 20px;
        }

        .testimonial-form {
            background-color: #ffffff; /* White */
            border: 4px solid #ff4081; /* Pink */
            border-radius: 10px;
           max-width:1000cm;
           max-height: 600px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        form{
            width: 500px;
            height: 320px;
        }

        .form-title {
            color: #ff4081; /* Pink */
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #343a40; /* Dark Gray */
        }

        input[type="text"],
        input[type="email"],
        textarea {
            background-color: #f8f9fa; /* Light Gray */
            border: 1px solid #ced4da; /* Gray */
            color: #495057; /* Dark Gray */
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .name-group {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .name-group input {
            width: 48%;
            margin-bottom: 10px;
        }

        .btn-submit {
            background-color: #ff4081; /* Pink */
            color: #ffffff; /* White */
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #d81b60; /* Darker Pink */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-12 offset-md-3 testimonial-form">
                <h2 class="form-title">LEAVE A MESSAGE</h2>
                <form action="proccess-dad.php" method="POST">
                    <div class="form-group name-group">
                        <div>
                            <label for="FirstName">First Name</label>
                            <input type="text" id="FirstName" class="form-control" name="FirstName"
                                placeholder="Your First Name" autocomplete="off" required>
                        </div>
                        <div>
                            <label for="LastName">Last Name</label>
                            <input type="text" id="LastName" class="form-control" name="LastName"
                                placeholder="Your Last Name" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Place">Place</label>
                        <input type="Text" id="Text" class="form-control" name="Place" placeholder="Your Place"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="Compliment">Compliment:</label>
                        <textarea id="Compliment" class="form-control" name="Compliment"
                            placeholder="Your Comment or Message" autocomplete="off" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
