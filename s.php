<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            max-width: 500px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        h1 {
            margin-bottom: 20px;
            color: #007bff;
        }
        
        .form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        
        .form label, .form select {
            margin-bottom: 10px;
        }
        
        .form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        
        .form button:hover {
            background-color: #0056b3;
        }
        
        .check-in-log {
            margin-top: 20px;
            width: 100%;
        }
    </style>
    <title>Sickle Cell Check-in</title>
</head>
<body>
    <div class="container">
        <h1>Sickle Cell Check-in</h1>
        <div class="form">
            <label for="painLevel">Pain Level (1-10):</label>
            <input type="number" id="painLevel" min="1" max="10">
            <label for="medicationTaken">Medication Taken:</label>
            <select id="medicationTaken">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <label for="ateFood">Ate Food:</label>
            <select id="ateFood">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <label for="goodSleep">Had a Good Sleep:</label>
            <select id="goodSleep">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
            <button id="recordButton">Record Check-in</button>
        </div>
        <div class="check-in-log" id="checkInLog">
            <!-- Log entries will be displayed here -->
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const checkInLog = document.getElementById("checkInLog");
            const recordButton = document.getElementById("recordButton");

            recordButton.addEventListener("click", () => {
                const painLevel = document.getElementById("painLevel").value;
                const medicationTaken = document.getElementById("medicationTaken").value;
                const ateFood = document.getElementById("ateFood").value;
                const goodSleep = document.getElementById("goodSleep").value;
                // Retrieve other input values here

                const formData = {
                    painLevel: painLevel,
                    medicationTaken: medicationTaken,
                    ateFood: ateFood,
                    goodSleep: goodSleep,
                    // Add other form data properties here...
                };

                sendFormDataToServer(formData);
            });

            function sendFormDataToServer(formData) {
                fetch("submit.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(formData),
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    // Handle the response from the server if needed
                    // For example, you can update the log UI here
                })
                .catch(error => {
                    console.error("Error:", error);
                    // Handle errors
                });
            }
        });
    </script>
    
  <?php
  ini_set('display_errors', 1);
error_reporting(E_ALL);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $painLevel = $_POST["painLevel"];
    $medicationTaken = $_POST["medicationTaken"];
    $ateFood = $_POST["ateFood"];
    $goodSleep = $_POST["goodSleep"];
    // Retrieve other form data here

    $to = "yusuf.usman@matcite.com"; // Replace with your email address
    $subject = "Sickle Cell Check-in";
    $message = "Pain Level: " . $painLevel . "\n";
    $message .= "Medication Taken: " . $medicationTaken . "\n";
    $message .= "Ate Food: " . $ateFood . "\n";
    $message .= "Had a Good Sleep: " . $goodSleep . "\n"; 
    // Include other data here

    $headers = "From: yusufusmandauda@gmail.com"; // Replace with a valid sender email

    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        $response = array("message" => "Form data sent successfully");
    } else {
        $response = array("message" => "Failed to send form data");
    }

    echo '<script>console.log("PHP: ' . json_encode($response) . '");</script>';
}
?>


</body>
</html>
