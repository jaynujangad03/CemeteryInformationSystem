<?php
if (!isset($_SESSION['U_ROLE']) || $_SESSION['U_ROLE'] != 'Administrator') {
    redirect(web_root . "admin/index.php");
}
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Reservation List</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <table id="dataTable" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Section</th>
                    <th>Grave Slot</th>
                    <th>Deceased Name</th>
                    <th>Date of Birth</th>
                    <th>Date of Death</th>
                    <th>Status</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM `reservations`";
                $mydb->setQuery($query);
                $cur = $mydb->loadResultList();

                foreach ($cur as $result) {
                    echo '<tr>';
                    echo '<td>' . $result->full_name . '</td>';
                    echo '<td>' . $result->phone_number . '</td>';
                    echo '<td>' . $result->section . '</td>';
                    echo '<td>' . $result->grave_slot . '</td>';
                    echo '<td>' . $result->deceased_name . '</td>';
                    echo '<td>' . $result->deceased_dob . '</td>';
                    echo '<td>' . $result->deceased_dod . '</td>';
                    echo '<td>' . $result->status . '</td>';
                    echo '<td><a href="approve_request.php?id=' . $result->id . '">Approve</a> | <a href="reject_request.php?id=' . $result->id . '">Reject</a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
