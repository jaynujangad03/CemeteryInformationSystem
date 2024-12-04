<?php
require_once("include/initialize.php");

if (!isset($_SESSION['USERID']) || $_SESSION['user_role'] != 'admin') {
    redirect(web_root . "admin/index.php");
}

if (isset($_GET['id'])) {
    $request_id = $_GET['id'];

    $sql = "UPDATE reservations SET status = 'approved' WHERE id = $request_id";
    $mydb->setQuery($sql);
    $mydb->executeQuery();

    // Redirect back to the request page
    header('Location: request.php');
    exit();
}
?>
