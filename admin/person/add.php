<?php
if (!isset($_SESSION['USERID'])) {
    redirect(web_root . "index.php");
}
?>
<form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Person</h1>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="GRAVENO">Number:</label>
            <div class="col-md-8">
                <input class="form-control input-sm" id="GRAVENO" name="GRAVENO" placeholder="Grave Number" type="text" value="" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="FNAME">Full Name:</label>
            <div class="col-md-8">
                <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder="Full Name" type="text" value="" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="CATEGORIES">Section:</label>
            <div class="col-md-8">
                <select class="form-control input-sm" name="CATEGORIES" id="CATEGORIES" required>
                    <option value="None">Select Section</option>
                    <?php
                    $mydb->setQuery("SELECT * FROM `tblcategory`");
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                        echo '<option value="' . $result->CATEGORIES . '">' . $result->CATEGORIES . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="BORNDATE">Born:</label>
            <div class="col-md-8">
                <input id="BORNDATE" name="BORNDATE" type="date" class="form-control input-sm" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="DIEDDATE">Died:</label>
            <div class="col-md-8">
                <input id="DIEDDATE" name="DIEDDATE" type="date" class="form-control input-sm" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <label class="col-md-4 control-label" for="LOCATION">Location:</label>
            <div class="col-md-8">
                <select class="form-control input-sm" name="LOCATION" id="LOCATION" required>
                    <option value="None">Select Location</option>
                    <option value="Roman Catholic Memorial Gardens">Roman Catholic Memorial Gardens</option>
                    <option value="Minglanilla Celestial Cemetery">Minglanilla Celestial Cemetery</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8">
            <div class="col-md-offset-4 col-md-8">
                <button class="btn btn-primary btn-sm" name="save" type="submit"><span class="fa fa-save fw-fa"></span> Save</button>
            </div>
        </div>
    </div>
</form>
