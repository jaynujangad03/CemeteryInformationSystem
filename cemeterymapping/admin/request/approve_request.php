<?php
require_once("../../include/initialize.php");

if (!isset($_SESSION['USERID']) || $_SESSION['U_ROLE'] != 'Administrator') {
    redirect(web_root . "admin/index.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Update the reservation status to 'Approved'
    $sql = "UPDATE `reservations` SET `status` = 'Approved' WHERE `id` = '$id'";
    $mydb->setQuery($sql);
    $result = $mydb->executeQuery();

    if ($result) {
        redirect("request.php");
    } else {
        echo "Error in approving the reservation request.";
    }
}
?>
