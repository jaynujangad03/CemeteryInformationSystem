<?php
require_once("../../include/initialize.php");

if(!isset($_SESSION['USERID']) || $_SESSION['U_ROLE'] != 'Administrator') {
    redirect(web_root . "admin/index.php");
}

$title = 'Reservation Requests';
$content = 'list.php';  // List reservations

// Handle the view request
$view = isset($_GET['view']) && $_GET['view'] != '' ? $_GET['view'] : 'list';

switch ($view) {
    case 'list':
        $content = 'list.php';
        break;
    default:
        $content = 'list.php';
}

require_once '../theme/Templates.php';
?>
