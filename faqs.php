<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 20px;
        }

        h1, h2 {
            color: #333;
            text-align: center;
        }

        h2 {
            margin-top: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
        }

        details {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        summary {
            font-weight: bold;
            color: #3366cc;
        }

        p {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Frequently Asked Questions</h1>

    <!-- General Pet Care Section -->
    <h2>General Pet Care</h2>
    <ul>
        <li>
            <details onclick="toggleAnswer(this)">
                <summary>How often should I take my pet for a check-up?</summary>
                <p>It's recommended to bring your pet for a check-up at least once a year. However, older pets or those with health issues may need more frequent visits.</p>
            </details>
        </li>
        
        <!--space for more questions-->
    </ul>

    <!-- Vaccinations Section -->
    <h2>Vaccinations</h2>
    <ul>
        <li>
            <details onclick="toggleAnswer(this)">
                <summary>Which vaccinations are essential for my pet?</summary>
                <p>The core vaccinations for dogs include rabies, distemper, and parvovirus. Cats should be vaccinated against rabies, feline leukemia, and distemper.</p>
            </details>
        </li>
       <!--space for more questions-->
    </ul>

    <!-- Dental Health Section -->
    <h2>Dental Health</h2>
    <ul>
        <li>
            <details onclick="toggleAnswer(this)">
                <summary>How can I maintain my pet's dental health?</summary>
                <p>Regular brushing, dental chews, and annual dental check-ups can help maintain your pet's dental health. Avoid giving them hard treats that may cause tooth damage.</p>
            </details>
        </li>
        <!--space for more questions-->
    </ul>

    <!-- Emergency Care Section -->
    <h2>Emergency Care</h2>
    <ul>
        <li>
            <details onclick="toggleAnswer(this)">
                <summary>What should I do in case of a pet emergency?</summary>
                <p>If your pet is experiencing a medical emergency, contact our clinic immediately. After-hours emergency services are available at [Emergency Contact Number].</p>
            </details>
        </li>
       <!--space for more questions-->
    </ul>

    <script>
        function toggleAnswer(element) {
            // Toggle the 'open' attribute to show/hide the answer
            element.hasAttribute('open') ? element.removeAttribute('open') : element.setAttribute('open', 'open');
        }
    </script>

</body>
</html>
