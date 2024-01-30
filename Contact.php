<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color:#ff94ea; 
        }

        .container-fluid {
            padding: 0px;
        }

        .contact-form {
            background-color: #ffd5ec; 
            border: 2px solid #ff94b5; 
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            color: #ff4081;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #343a40; 
        }

        input[type="text"],
        input[type="email"],
        textarea {
            background-color: #f8f9fa; 
            border: 1px solid #ced4da;
            color: #495057; 
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        .contact-details {
            margin-top: 20px;
        }

        .btn-submit {
            background-color: #d81b60;
            color:#d81b60; 
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #d81b60; 
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style=" border-radius: 5px; ">
            <?php include("wed.php"); ?>
        </div>
        <div class="row mt-3" style="background-color:#fdd5ff;">
            <div class="col-md-5 offset-md-3 contact-form">
                <h2 class="form-title">CONTACT US</h2>
                <form action="#" method="POST" onsubmit="sendEmail(); reset(); return false;">
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

                
            </div>
            <div class="col-3">
                <div class="contact-details">
                    <p style="color:black;"><strong style="color:#ff4081;">WhatsApp:</strong> +256 708342426</p>
                    <p><strong style="color:#ff4081;">Twitter:</strong> <a href="https://twitter.com/drkirabo" target="_blank">@drkirabo</a></p>
                    <p><strong style="color:#ff4081;">Email:</strong> <a href="mailto:kirabo58@gmail.com">kirabo58@gmail.com</a></p>
                </div>
            </div>   
        </div>
       
        <div class="row" style="background-color:#333; border-radius: 10px;">
            <?php include("footer.php") ;?>
        </div>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail() {
            Email.send({
                Host : "smtp.gmail.com",
                Username : "kirabo58@gmail.com",
                Password : "password",
                To : 'kirabo58@gmail.com',
                From : document.getElementById("email").value,
                Subject : "New Contact Form Enquiry",
                Body : "Name: " + document.getElementById("name").value
               + "<br> Email: " + document.getElementById("email").value
               + "<br> Message: " + document.getElementById("massege").value
                }).then(
                message => alert(Massage sent successfuly)
                );
        }
    </script>
</body>

</html>
