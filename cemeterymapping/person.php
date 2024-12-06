<?php 
$search = isset($_POST['search']) && !empty($_POST['search']) ? $_POST['search'] : null;
$location = isset($_GET['location']) ? $_GET['location'] : '';
?>

<style type="text/css">
    .scrollxy {
        width: auto;
        height: 340px;
        overflow-y: auto; /* Enable vertical scrolling */
        overflow-x: hidden; /* Disable horizontal scrolling */
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        position: sticky;
        top: 0;
        z-index: 1;
        background-color: #fff; /* Optional: To ensure the header is visible */
    }

    th {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }

    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ccc;
    }
</style>

<div class="scrollxy">  
    <table id="" class="table">
        <thead>
            <tr>
                <th>Grave No</th>
                <th>Name of the Deceased</th>
                <th>Born</th>
                <th>Died</th>
                <th>Location</th>
                <th>Years Buried</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['location'])) {
                if (isset($_GET['name'])) {
                    $sql = "SELECT * FROM tblpeople WHERE LOCATION='".$location."' AND GRAVENO = '".$_GET['graveno']."' AND FNAME ='".$_GET['name']."'";
                    $mydb->setQuery($sql);
                    $cur = $mydb->executeQuery();
                    $numrows = $mydb->num_rows($cur);
                } else {
                    $sql = "SELECT * FROM tblpeople WHERE LOCATION='".$location."'";
                    $mydb->setQuery($sql);
                    $cur = $mydb->executeQuery();
                    $numrows = $mydb->num_rows($cur);
                }
            } elseif (!is_null($search)) {
                $sql = "SELECT * FROM tblpeople WHERE FNAME LIKE '%".$search."%'";
                $mydb->setQuery($sql);
                $cur = $mydb->executeQuery();
                $numrows = $mydb->num_rows($cur);
            } else {
                $sql = "SELECT * FROM tblpeople";
                $mydb->setQuery($sql);
                $cur = $mydb->executeQuery();
                $numrows = $mydb->num_rows($cur);
            }

            if ($numrows > 0) {
                $cur = $mydb->loadResultList();
                foreach ($cur as $res) {

                    // Format the DIEDDATE (if it exists) and calculate the age
                    $birthDate = date_create($res->BORNDATE);
                    $diedDate = date_create($res->DIEDDATE);

                    // If valid dates, calculate age
                    if ($diedDate !== false && $birthDate !== false) {
                        $age = $diedDate->diff($birthDate)->y; // Get years difference
                        $formatDiedDate = date_format($diedDate, 'm/d/Y');
                        $formatBornDate = date_format($birthDate, 'm/d/Y');
                    } else {
                        $age = 'N/A'; // If dates are invalid
                        $formatDiedDate = 'Invalid Date';
                        $formatBornDate = 'Invalid Date';
                    }

                    echo '<tr>';
                    echo '<td>' . $res->GRAVENO . '</td>';
                    echo '<td><a href="index.php?q=person&graveno=' . $res->GRAVENO . '&name=' . $res->FNAME . '&location=' . $res->LOCATION . '&section=' . $res->CATEGORIES . '">' . $res->FNAME . '</a></td>';
                    echo '<td>' . $formatBornDate . '</td>';
                    echo '<td>' . $formatDiedDate . '</td>';
                    echo '<td>' . $res->LOCATION . '</td>';
                    echo '<td>' . $age . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr>';
                echo '<td colspan="6" style="text-align:center">No Record Found!</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
