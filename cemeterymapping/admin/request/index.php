<?php
require_once("../../include/initialize.php");

// Check if the admin is logged in
if (!isset($_SESSION['USERID']) || $_SESSION['user_role'] != 'admin') {
    redirect(web_root . "admin/index.php");
}

$sql = "SELECT * FROM reservations"; // Fetch all reservation requests
$mydb->setQuery($sql);
$reservation_requests = $mydb->loadResultList(); // Fetch results into an array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Requests</title>
</head>
<body>
    <h2>Reservation Requests</h2>
    
    <table border="1">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Section</th>
                <th>Grave Slot</th>
                <th>Deceased Name</th>
                <th>Deceased Date of Birth</th>
                <th>Deceased Date of Death</th>
                <th>Location</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($reservation_requests) {
                foreach ($reservation_requests as $request) {
                    echo "<tr>";
                    echo "<td>{$request->full_name}</td>";
                    echo "<td>{$request->phone_number}</td>";
                    echo "<td>{$request->email}</td>";
                    echo "<td>{$request->section}</td>";
                    echo "<td>{$request->grave_slot}</td>";
                    echo "<td>{$request->deceased_name}</td>";
                    echo "<td>{$request->deceased_dob}</td>";
                    echo "<td>{$request->deceased_dod}</td>";
                    echo "<td>{$request->location}</td>";
                    echo "<td>{$request->status}</td>"; // Assuming you have a status field
                    echo "<td><a href='approve_request.php?id={$request->id}'>Approve</a> | <a href='reject_request.php?id={$request->id}'>Reject</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='11'>No reservation requests found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
