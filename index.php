<?php 
    require_once "includes/functions.php";

    require_once "includes/dbh.php";
    require_once "includes/db-functions.php";
    
    include "includes/header.php";

    
?>


<header class="container-fluid bg-light border-bottom border-secondary p-4">
    <div class="row">
        <div class="col-12">
            <h1>Course Registration</h1>
        </div>
    </div>
</header>

<div class="container mt-3">
    <form action="includes/registration-inc.php" method="POST">
        <!-- Main Form -->
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <!-- Personal Details -->
                <div class="border p-3 mb-3">
                    <h3>Personal Details</h3>
                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" id="username" name="username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="confPassword" name="confPassword" required>
                        <label for="confPassword">Confirm Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" id="firstName" name="firstName" required>
                        <label for="firstName">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" id="lastName" name="lastName" required>
                        <label for="lastName">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <!-- Residence -->
                <div class="border p-3 mb-3">
                    <h3>Residence</h3>
                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" id="address" name="address" required>
                        <label for="address">Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" id="street" name="street" required>
                        <label for="street">Street</label>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" id="town" name="town" required>
                            <option disabled selected>Select a Town</option>
                            
                            
                        </select>
                    </div>
                </div>
                <!-- Course Selection -->
                <div class="border p-3 mb-3">
                    <h3>Course Selection</h3>
                    <div class="mb-3">
                        <select class="form-select" id="course" name="course" required>
                            <option disabled selected>Select a Course</option>
                            
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Buttons -->
        <div class="row">
            <div class="col-12 mb-3">
                <button type="submit" class="btn btn-success w-100 p-2 fs-5">Submit Application</button>
            </div>
            <div class="col-12">
                <button type="reset" class="btn btn-danger w-100 p-2 fs-5">Reset Form</button>
            </div>
        </div>
    </form>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        
            <div class="col-6 text-center border border-danger-subtle bg-danger-subtle text-danger p-2">
            </div>

            <div class="col-6 text-center border border-success-subtle bg-success-subtle text-success p-2">
                Application Registration completed successfully.
            </div>
        
        <div class="col-3"></div>
    </div>
</div>

<?php
include "includes/footer.php";
?>

