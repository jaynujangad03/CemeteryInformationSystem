<?php
require_once("include/initialize.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect data from the form
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $section = $_POST['section'];
    $grave_slot = $_POST['grave_slot'];
    $deceased_name = $_POST['deceased_name'];
    $deceased_dob = $_POST['deceased_dob'];
    $deceased_dod = $_POST['deceased_dod'];
    $location = $_POST['location'];

    // Validate the data
    if (empty($full_name) || empty($phone_number) || empty($email) || empty($section) || empty($grave_slot) || empty($deceased_name) || empty($deceased_dob) || empty($deceased_dod) || empty($location)) {
        $error_message = "All fields are required!";
    } else {
        // Prepare the query to insert the reservation request into the database
        $sql = "INSERT INTO reservations (full_name, phone_number, email, section, grave_slot, deceased_name, deceased_dob, deceased_dod, location) 
                VALUES ('$full_name', '$phone_number', '$email', '$section', '$grave_slot', '$deceased_name', '$deceased_dob', '$deceased_dod', '$location')";

        // Execute the query
        $mydb->setQuery($sql);
        $result = $mydb->executeQuery();

        if ($result) {
            $success_message = "Your reservation request has been sent. Please wait for admin approval, and you will be contacted as soon as possible.";
        } else {
            $error_message = "There was an issue with your request. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Request</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .panel-body {
            max-height: 500px;
            overflow-y: auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-size: 18px;
            border: none;
            padding: 12px;
            transition: background-color 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group select {
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .success-message, .error-message {
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            font-size: 16px;
        }

        .success-message {
            background-color: #4CAF50;
            color: white;
        }

        .error-message {
            background-color: #f44336;
            color: white;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .popup {
            background: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            width: 300px;
            max-width: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Request Grave Reservation</h2>

        <?php
        // Show success or error messages
        if (isset($success_message)) {
            echo "<p class='success-message'>$success_message</p>";
        }
        if (isset($error_message)) {
            echo "<p class='error-message'>$error_message</p>";
        }
        ?>

        <!-- Form section with scrollable panel -->
        <div class="panel-body">
            <form id="reservationForm" action="reserve.php" method="POST">
                <div class="form-group">
                    <label for="full_name">Full Name:</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="section">Section:</label>
                    <select id="section" name="section" required>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="grave_slot">Grave Slot Number:</label>
                    <input type="text" id="grave_slot" name="grave_slot" required>
                </div>

                <div class="form-group">
                    <label for="deceased_name">Deceased Person's Name:</label>
                    <input type="text" id="deceased_name" name="deceased_name" required>
                </div>

                <div class="form-group">
                    <label for="deceased_dob">Deceased Person's Date of Birth:</label>
                    <input type="date" id="deceased_dob" name="deceased_dob" required>
                </div>

                <div class="form-group">
                    <label for="deceased_dod">Deceased Person's Date of Death:</label>
                    <input type="date" id="deceased_dod" name="deceased_dod" required>
                </div>

                <div class="form-group">
                    <label for="location">Location of Grave Slot:</label>
                    <select id="location" name="location" required>
                        <option value="Roman Catholic Memorial Gardens">Roman Catholic Memorial Gardens</option>
                        <option value="Minglanilla Celestial Cemetery">Minglanilla Celestial Cemetery</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" value="Submit Request">
                </div>
            </form>
        </div>

        <div id="overlay" class="overlay">
            <div class="popup">
                <p id="popupMessage"></p>
                <button onclick="closePopup()">Close</button>
            </div>
        </div>
    </div>

    <script>
        function showPopup(message) {
            document.getElementById("popupMessage").innerText = message;
            document.getElementById("overlay").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("reservationForm").reset();
        }

        document.getElementById("reservationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "reserve.php", true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    showPopup("Your reservation request has been sent. Please wait for admin approval.");
                } else {
                    showPopup("There was an issue with your request. Please try again later.");
                }
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>
