<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dr. Kirabo Martha - About</title>
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

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .about-section {
      background-color: #EDDFBB;
      padding: 20px;
    }

    .container-img {
      width: 100%;
      max-width: 600px;
      margin-bottom: 20px;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    .text {
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <?php include("nav.php") ?>
    </div>

    <div class="row about-section">
      <div class="container-img">
        <img src="fes.jpg" alt="Dr. Kirabo Martha">
        <div class="text">
          <h3>About Dr. Kirabo Martha</h3>
          <p>Dr. Kirabo Martha holds a bachelor's degree in veterinary medicine from Makerere University. Currently, she is delving into the intricacies of Veterinary Preventive Medicine at the same institution, with a focus on epidemiology, disease surveillance, and public health.</p>
          <p>With broad experience in diverse settings, Dr. Kirabo has worked in both urban environments such as Kampala city under KCCA and remote areas like the Karamoja region with Mercy Corps and Tsai Island in Kumi district under COCTU, among others.</p>
          <p>Committed to lifelong learning, she has acquired certifications in Avian Influenza Preparedness, Current Topics in Antimicrobial Resistance, and One Health Principles in Infectious Disease Management, among others.</p>
        </div>
      </div>

      <div class="container-img">
        <div class="text">
          <h3>Mission</h3>
          <p>To contribute significantly to disease prevention and control strategies in one health.</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
