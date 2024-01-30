<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dr. Kirabo Martha - About</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f3f4;
      color: #333;
    }

  

    

    .about-section {
      background-color: #fddfdf;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container-img {
      width: 100%;
      max-width: 600px;
      margin: 20px auto;
      overflow: hidden;
      border-radius: 8px;
      position: relative;
    }
    .img{
      width: 300px;
      height: 300px;
      object-fit: cover;
    }

    img {
      width: 565px;
      max-width: 100%;
      height: 500px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .img-label {
      position: absolute;
      bottom: 0;
      left: 0;
      background-color: #ff477e;
      color: white;
      padding: 10px;
      margin-left: 15px;
      border-bottom-right-radius: 8px;
    }

    .text {
      padding: 20px;
      text-align: justify;
    }

    h3 {
      color: #ff477e;
    }

    p {
      margin-bottom: 15px;
    }
  </style>
</head>

<body>
 

  <div class="container-fluid">
    <div class="row" style=" border-radius: 5px; ">
      <?php include("wed.php"); ?>
    </div>
    <div class="row about-section"><center>
      <div class="container-img">
       <img src="fes.jpg" alt="Dr. Kirabo Martha performing surgery">
        <div class="img-label">Dr. Kirabo Martha carrying out surgery</div>
      </div></center>
      <div class="text">
        <h3>About Dr. Kirabo Martha</h3>
        <p>Dr. Kirabo Martha holds a bachelor's degree in veterinary medicine from Makerere University. Currently, she is delving into the intricacies of Veterinary Preventive Medicine at the same institution, with a focus on epidemiology, disease surveillance, and public health.</p>
        <p>With broad experience in diverse settings, Dr. Kirabo has worked in both urban environments such as Kampala city under KCCA and remote areas like the Karamoja region with Mercy Corps and Tsai Island in Kumi district under COCTU, among others.</p>
        <p>Committed to lifelong learning, she has acquired certifications in Avian Influenza Preparedness, Current Topics in Antimicrobial Resistance, and One Health Principles in Infectious Disease Management, among others.</p>
      </div>
    </div>

    <div class="row about-section">
      <div class="text">
        <h3>Mission</h3>
        <p>To contribute significantly to disease prevention and control strategies in one health.</p>
      </div>
      
    </div>
   <div class="row" style="background-color:#fffbfc;">
    
    <footer>
        
      <?php include("footer.php") ;?>
        
    </footer>
  </div>
</body>

</html>
