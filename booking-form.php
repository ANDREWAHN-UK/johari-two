<?php

$title ='Booking-Form';
require_once 'includes/header.php';
require_once 'db/conn.php';

?>



        <section class="booking-form" id="booking-form">            

            <h1 class ="text-center">Come stay with us</h1>

            <form method="post" action="booking-success.php">

            <div class="mb-3 form-field">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </div>

            <div class="mb-3 form-field">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
            </div>

            <div class="mb-3 form-field">
                <label for="startDate" class="form-label">Start Date</label>
                <input type="text" class="form-control" id="startDate" name="startDate">
            </div>

            <div class="mb-3 form-field">
                <label for="endDate" class="form-label">End Date</label>
                <input type="text" class="form-control" id="endDate" name="endDate">
                </div>

            <div class="mb-3 form-field">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            
            <div class="mb-3 form-field">
                <label for="contactNumber" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contactNumber" name="contactNumber" aria-describedby="contactNumberHelp">
                <div id="contactNumberHelp" class="form-text">We'll never share your number with anyone else.</div>
            </div> 

            <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary" name="submit">Book now!</button>
            </div>
            </form>


        </section>

 


<?php

?>

<?php 
require_once 'includes/footer.php';
?>