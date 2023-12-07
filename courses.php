<?php 
    require_once "includes/functions.php";

    require_once "includes/dbh.php";
    require_once "includes/db-functions.php";
    
    include "includes/header.php";

?>

<header class="container-fluid bg-light border-bottom border-secondary p-4">
    <div class="row">
        <div class="col-12">
            <h1>Course List</h1>
        </div>
    </div>
</header>


<div class="container-fluid py-3 border-bottom">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-3">
            <form method="GET">
                <select class="form-select" id="courseLevel" name="courseLevel" onChange="this.form.submit();">
                    <option disabled selected>Select a Course Level</option>
                    
                </select>
            </form>
        </div>
        <div class="col-5">
       
        </div>
        <div class="col-2"></div>
    </div>
</div>


<?php
include "includes/footer.php";
?>

