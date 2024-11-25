<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Experience</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        h1 {
            color: #821a00;
            margin-bottom: 20px;
        }
        h3 {
            color: #00825b;
            text-decoration: underline;
            margin-top: 15px;
        }
        li {
            margin-bottom: 10px;
        }
        ul {
            list-style-type: none;
            margin-left: 20px;
            padding-left: 0;
        }
        .container-fluid {
            border-radius: 5px;
            padding: 20px;
        }
        .row {
           
        }
        .footer {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include("wed.php"); ?>
        </div>
        <div class="row" style="background-color:#ffc3d5; padding: 20px; border-radius: 5px;">
            <h1>Professional Experience</h1>
            <h3>2023: Intern at TAPROD Project under AFROHUN Uganda</h3>
            <ul>
                <li>Collaborated with Dr. James Muleme, a PHD Fellow, on a three-month project focusing on emerging Zoonotic Diseases (ZD) and One Health concepts.</li>
                <li>Engaged in capacity-building activities, including online courses and conferences.</li>
                <li>Developed a knowledge product on ZD risk mitigation under AFROHUN guidance.</li>
                <li>Shared insights at a student interns forum on implementing One Health concepts in practical settings.</li>
            </ul>
            
            <h3>2023: EUDPROMO Project Participant</h3>
            <ul>
                <li>Underwent higher education student capacity building through mentorship and tutorial sessions, with a focus on fish health and R software.</li>
            </ul>

            <h3>2023: Graduate Student Intern at Kampala Capital City Authority</h3>
            <ul>
                <li>Worked under the KCCA Veterinary Public Health Department, enhancing skills in data management.</li>
                <li>Participated in Rabies campaigns.</li>
            </ul>

            <h3>2022-2023: Veterinary In Charge at KS Vet Pharmacy</h3>
            <ul>
                <li>Represented the pharmacy at NDA.</li>
                <li>Provided veterinary drugs prescription and animal management advice to clients.</li>
            </ul>

            <h3>2022: Extension Worker under COCTU</h3>
            <ul>
                <li>Conducted trypanosomiasis screening.</li>
                <li>Provided training to farmers on animal husbandry practices.</li>
            </ul>

            <h3>2021: Livestock Student Intern under Mercy Corps Uganda</h3>
            <ul>
                <li>Conducted training for community animal health workers.</li>
                <li>Participated in mass animal treatment and spraying.</li>
                <li>Handled data entry using the CommCare system.</li>
            </ul> 
        </div>
        <div class="row footer">
            <?php include("footer.php"); ?>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>