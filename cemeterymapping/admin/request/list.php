<?php
// Check if the user is logged in
if(!isset($_SESSION['USERID'])){
    // Redirect to login page if the user is not logged in
    redirect(web_root."admin/index.php");
}

// Ensure the user_role session variable is set before using it
if (isset($_SESSION['user_role'])) {
    // Store the user role in a variable
    $user_role = $_SESSION['user_role'];
} else {
    // If the user role is not set, handle the error gracefully
    echo "User role is not set!";
    exit;
}

$title = 'Request List';  // Title of the page

// Determine which view to load, default to 'list'
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
    case 'list':
        // Set the content file for displaying the list
        $content = 'list.php';        
        break;

    default:
        // Default content to display
        $content = 'list.php';
}

// Include the template
require_once '../theme/Templates.php';
?>
