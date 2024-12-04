<?php
require_once("include/initialize.php"); // Include your initialization file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect data from the form
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $section = $_POST['section'];
    $grave_slot = $_POST['grave_slot'];
    $deceased_name = $_POST['deceased_name'];
    $deceased_dob = $_POST['deceased_dob']; // Date of Birth
    $deceased_dod = $_POST['deceased_dod']; // Date of Death
    $location = $_POST['location'];
    
    // Validate the data (you can add more validation as needed)
    if (empty($full_name) || empty($phone_number) || empty($email) || empty($section) || empty($grave_slot) || empty($deceased_name) || empty($deceased_dob) || empty($deceased_dod) || empty($location)) {
        $error_message = "All fields are required!";
    } else {
        // Prepare the query to insert the reservation request into the database
        $sql = "INSERT INTO reservations (full_name, phone_number, email, section, grave_slot, deceased_name, deceased_dob, deceased_dod, location) 
                VALUES ('$full_name', '$phone_number', '$email', '$section', '$grave_slot', '$deceased_name', '$deceased_dob', '$deceased_dod', '$location')";
        
        // Execute the query using the Database class
        $mydb->setQuery($sql);
        $result = $mydb->executeQuery();
        
        if ($result) {
            $success_message = "Your reservation request has been sent. Please wait for admin approval and it will call you as soon as possible";
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
    <!-- Include your CSS file here -->
</head>
<body>
    <h2>Request Grave Reservation</h2>
    
    <?php
    // Show success or error messages
    if (isset($success_message)) {
        echo "<p style='color: green;'>$success_message</p>";
    }
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <form action="reserve.php" method="POST">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="section">Section:</label>
        <input type="text" id="section" name="section" required><br><br>

        <label for="grave_slot">Grave Slot Number:</label>
        <input type="text" id="grave_slot" name="grave_slot" required><br><br>

        <label for="deceased_name">Deceased Person's Name:</label>
        <input type="text" id="deceased_name" name="deceased_name" required><br><br>

        <label for="deceased_dob">Deceased Person's Date of Birth:</label>
        <input type="date" id="deceased_dob" name="deceased_dob" required><br><br>

        <label for="deceased_dod">Deceased Person's Date of Death:</label>
        <input type="date" id="deceased_dod" name="deceased_dod" required><br><br>

        <label for="location">Location of Grave Slot:</label>
        <input type="text" id="location" name="location" required><br><br>

        <input type="submit" value="Submit Request">
    </form>
</body>
</html>
