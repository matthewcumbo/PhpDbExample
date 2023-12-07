<?php 
    require_once "includes/functions.php";

    require_once "includes/dbh.php";
    require_once "includes/db-functions.php";
    
    include "includes/header.php";

?>

<header class="container-fluid bg-light border-bottom border-secondary p-4">
    <div class="row">
        <div class="col-12">
            <h1>Course Details</h1>
        </div>
    </div>
</header>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Course Title</h4>
                </div>
                <div class="card-body border-bottom">
                    <p>
                        <b class="card-title">Course Code:</b>
                        <span class="card-text">
                            Course Code
                        </span>
                    </p>
                    <p>
                        <b class="card-title">ECTS:</b>
                        <span class="card-text">
                            ECTS
                        </span>
                    </p>
                    <p>
                        <b class="card-title">Mode:</b>
                        <span class="card-text">
                            Mode
                        </span>
                    </p>
                    <p>
                        <b class="card-title">Duration:</b>
                        <span class="card-text">
                            Duration
                        </span>
                    </p>
                </div>
                <div class="card-body border-bottom">
                    <p class="card-text">
                        Description
                    </p>
                </div>
                <div class="card-body border-bottom">
                    <p>
                        <p class="card-title fw-bold">Entry Requirements:</p>
                        <span class="card-text">
                            Entry Requirements
                        </span>
                    </p>
                </div>
                <div class="card-body d-grid">
                    <a href="courses.php" class="btn btn-primary">Back to Course List</a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
include "includes/footer.php";
?>

