<!-- This page to display what needs to be edited. Actual editing to occur in editBookingPost.php-->
<?php

$title = 'Edit Booking';
require_once 'includes/header.php';
require_once 'db/conn.php';

if (!isset($_GET['id'])) {
    echo 'error';
} else {
    $id = $_GET['id'];
    $result = $crud->getBookingDetails($id);
    // the closing } of the if statement is to be found AT THE END of the page! That means the form displays only if there is a valid id
?>
    <section class="booking-form" id="booking-form">
        <div class="row">

            <div class="col">

                <h1 class="text-center">Edit Booking</h1>

                <form method="post" action="editBookingPost.php">
                   <!-- the hidden input below allows the id of the item being adjusted to be sent along with the rest of the information -->
                    <input type="hidden" name="id" value="<?php $result['bookingId'] ?>" />
                    <div class="mb-3 form-field">
                        <label for="firstName" class="form-label">First Name</label>

                        <!-- the value label below retrieves the relevant value from the database -->
                        <input type="text" class="form-control" value="<?php echo $result['firstName'] ?>" id="firstName" name="firstName">
                    </div>

                    <div class="mb-3 form-field">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" value="<?php echo $result['lastName'] ?>" id="lastName" name="lastName">
                    </div>

                    <div class="mb-3 form-field">
                        <label for="startDate" class="form-label">Start Date</label>
                        <input type="text" class="form-control" value="<?php echo $result['startDate'] ?>" id="startDate" name="startDate">
                    </div>

                    <div class="mb-3 form-field">
                        <label for="endDate" class="form-label">End Date</label>
                        <input type="text" class="form-control" value="<?php echo $result['endDate'] ?>" id="endDate" name="endDate">
                    </div>

                    <div class="mb-3 form-field">
                        <label for="inputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" value="<?php echo $result['emailAddress'] ?>" id="emailAddress" name="emailAddress" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3 form-field">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" value="<?php echo $result['contactNumber'] ?>" id="contactNumber" name="contactNumber" aria-describedby="contactNumberHelp">
                        <div id="contactNumberHelp" class="form-text">We'll never share your number with anyone else.</div>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="viewrecords.php" class="btn btn-info">View Records</a>
                        <button type="submit" class="btn btn-success" name="submit">Save Changes!</button>
                    </div>
                </form>

            </div>

        </div>
    </section>

<?php  }  //this closes the if block
?>

<?php
require_once 'includes/footer.php';
?>