<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light Gray */
            color: #495057; /* Dark Gray */
        }

        .container-fluid {
            padding: 20px;
        }

        .contact-form {
            background-color: #ffffff; /* White */
            border: 4px solid #007bff; /* Blue */
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            color: #007bff; /* Blue */
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

        .contact-details {
            margin-top: 20px;
        }

        .btn-submit {
            background-color: #007bff; /* Blue */
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
            background-color: #0056b3; /* Darker Blue */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-6 offset-md-3 contact-form">
                <h2 class="form-title">CONTACT US</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" id="Name" class="form-control" name="Name" placeholder="Your Name"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" id="Email" class="form-control" name="Email" placeholder="Your Email"
                            autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="Message">Message</label>
                        <textarea id="Message" class="form-control" name="Message"
                            placeholder="Your Message" autocomplete="off" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>

                <div class="contact-details">
                    <p><strong>WhatsApp:</strong> +256 708342426</p>
                    <p><strong>Twitter:</strong> <a href="https://twitter.com/drkirabo" target="_blank">@drkirabo</a></p>
                    <p><strong>Email:</strong> <a href="mailto:kirabo58@gmail.com">kirabo58@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
