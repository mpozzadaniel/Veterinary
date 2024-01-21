<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition-facts</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #000;
        }
        .container {
            width: 100%;
            padding: 0;
            display: flex;
           
            align-items: center;
        }

        .navbar-nav {
            display: flex;
            margin-right: 20px;
        }

        .navbar-nav .nav-item {
            margin-left: 30px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            margin-left: 20px;
        }

       

        .navbar {
            background-color: #DBC078 !important;
            color: white;
            border-radius: 30px;
        }

        .navbar-toggler-icon {
            background-color: red;
        }

        .navbar-nav .nav-link {
            color: green !important;
            margin-left: 50px;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color:  !important ;
            text-decoration: underline;
        }

        .img {
            padding: 0;
            border-radius: 10px;
            max-width: 10%;
            height: auto;
            object-fit: cover
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <div class="container">
            <a class="navbar-brand" href="#"></a>
                <a class="navbar-brand" href="#">
                <div class="logo-container">
                    <img src="log-2.PNG" alt="" class="img">
                </div>
                   
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="About.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Book.php">BOOK NOW</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact.php">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Pro.php">PROFFECIANAL </a>
                        </li>
                        
                       
                    </ul>
                    
                </div>
            </div>
        </nav>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
