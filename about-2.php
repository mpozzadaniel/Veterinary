<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container-fluid {
      width: 80%;
      margin: 0 auto;
    }

    .img-label {
      position: absolute;
      bottom: 0;
      left: 0;
      background-color: #ff477e;
      color: white;
      padding: 10px;
      border-radius: 17px;
    }

   

    h3 {
      margin-bottom: 20px;
    }

    .container-img {
      display: flex;
      align-items: flex-end; 
      position: relative; 
    }

    .container-img img {
      max-width: 20%; 
      margin-right: 20px;
      border-radius: 5px;
      border:solid green 2px ;
    }

    .text {
      flex: 1;
    }

    p {
      margin-bottom: 10px;
    }

    .about-section {
      background-color: #EDDFBB;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
  <title>About</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row" style="background-color:#DBC078; border-radius: 20px;  border:solid green 2px">
      <?php include("nav-2.php"); ?>
    </div>
    <div class="row" style="background-color:#EDDFBB; border-radius: 20px; border:solid green 2px">
      <h3>About</h3>
      <div class="container-img">
        <img src="fes.jpg" alt="Kirabo">
        <div class="img-label">Dr. Kirabo Martha providing surgery</div>
        <div class="text">
          <p>Dr Kirabo Martha holds a bachelor's degree in veterinary medicine from Makerere University. Currently, she is delving into the intricacies of Veterinary Preventive Medicine at the same institution, with a focus on epidemiology, disease surveillance, and public health. Dr Kirabo is working with AFROHUN Uganda as a graduate intern under the TAPROD Project.</p>
          <p>Dr. Kirabo possesses broad experience in diverse settings, having worked in both urban environments such as Kampala city under KCCA, and remote areas like the Karamoja region with Mercy Corps and Tsai Island in Kumi district under COCTU plus many others.</p>
          <p>Committed to lifelong learning, she has acquired certifications in Avian Influenza Preparedness, Current Topics in Antimicrobial Resistance, and One Health Principles in Infectious Disease Management, among others. These enriching experiences have broadened my perspective and enhanced my skills.</p>
        </div>
      </div>
      <div class="row about-section">
        <div class="text">
          <h3>Mission</h3>
          <p>To contribute significantly to disease prevention and control strategies in one health.</p>
        </div>
      </div>
    </div>
    <div class="row" style="background-color:#333; border-radius: 10px;">
        <?php include("footer.php") ;?>
    </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
