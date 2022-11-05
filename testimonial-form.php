<?php

$title = 'Booking-Form';
require_once 'includes/header.php';
require_once 'db/conn.php'
?>

<div class="row">

    <div class="col">

        <section class="testimonial-form" id="testimonial-form">

            <h1 class="text-center">How was your stay?</h1>

            <form method="post" action="testimonial-success.php">

                <div class="mb-3 form-field">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                </div>

                <div class="mb-3 form-field">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                </div>

                <div class="mb-3 form-field">
                    <label for="dateArrived" class="form-label">When did you arrive?</label>
                    <input type="text" class="form-control" id="dateArrived" name="dateArrived">
                </div>

                <div class="mb-3 form-field">
                    <label for="testimonialText" class="form-label">Please leave your feedback here</label>

                    <textarea class="form-control" id="testimonialText" name="testimonialText" rows="5"></textarea>

                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary" name="submit">Send Feed back now!</button>
                </div>
            </form>


        </section>

    </div>

</div>


<?php

?>

<?php
require_once 'includes/footer.php';
?>