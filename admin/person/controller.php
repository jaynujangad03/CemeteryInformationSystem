<?php
require_once("../../include/initialize.php");

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
    case 'add':
        doInsert();
        break;

    case 'edit':
        doEdit();
        break;

    case 'delete':
        doDelete();
        break;
}

function doInsert() {
    global $mydb;

    if (isset($_POST['save'])) {
        $graveno = $_POST['GRAVENO'];
        $categories = $_POST['CATEGORIES'];
        $location = $_POST['LOCATION'];

        // Check if all required fields are filled
        if ($_POST['FNAME'] == "" || $graveno == "" || $categories == "" || $location == "") {
            message("All fields are required!", "error");
            redirect('index.php?view=add');
        } else {
            // Query to check if the Grave Number already exists in the specified section and location
            $sql = "SELECT * FROM `tblpeople` WHERE `GRAVENO` = '$graveno' AND `CATEGORIES` = '$categories' AND `LOCATION` = '$location'";
            $mydb->setQuery($sql);
            $result = $mydb->loadSingleResult();

            if ($result) {
                // If a record already exists
                message("Grave number is already taken in the selected section and location!", "error");
                redirect('index.php?view=add');
            } else {
                // Proceed to insert the new record
                $borndate = $_POST['BORNDATE'];
                $dieddate = $_POST['DIEDDATE'];

                $autonumber = New Autonumber();
                $res = $autonumber->set_autonumber('PEOPLEID');

                $p = New Person();
                $p->PEOPLEID = $res->AUTO;
                $p->FNAME = $_POST['FNAME'];
                $p->CATEGORIES = $categories;
                $p->BORNDATE = $borndate;
                $p->DIEDDATE = $dieddate;
                $p->LOCATION = $location;
                $p->GRAVENO = $graveno;
                $p->create();

                // Update the autonumber
                $autonumber->auto_update('PEOPLEID');

                message("New Record created successfully!", "success");
                redirect("index.php");
            }
        }
    }
}

function doEdit() {
    if (isset($_POST['save'])) {
        $borndate = $_POST['BORNDATE'];
        $dieddate = $_POST['DIEDDATE'];

        $p = New Person();
        $p->FNAME = $_POST['FNAME'];
        $p->CATEGORIES = $_POST['CATEGORIES'];
        $p->BORNDATE = $borndate;
        $p->DIEDDATE = $dieddate;
        $p->GRAVENO = $_POST['GRAVENO'];
        $p->LOCATION = $_POST['LOCATION'];
        $p->update($_POST['PEOPLEID']);

        message("Record has been updated!", "success");
        redirect("index.php");
    }
}

function doDelete() {
    if (!isset($_POST['selector'])) {
        message("Select the records first before you delete!", "error");
        redirect('index.php');
    } else {
        $id = $_POST['selector'];
        $key = count($id);

        for ($i = 0; $i < $key; $i++) {
            $p = New Person();
            $p->delete($id[$i]);
        }

        message("Record has been deleted!", "info");
        redirect('index.php');
    }
}
