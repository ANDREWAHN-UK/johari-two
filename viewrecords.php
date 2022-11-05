<!-- This page summarises information from the booking, testimonial and contact forms sent -->

<?php
$title = 'Records';
require_once 'includes/header.php';
require_once 'db/conn.php';

$bookingResult = $crud->getBookingData();
$contactResult = $crud->getContactData();
$testimonialResult = $crud->getTestimonialData();

?>

<br>
<br>

<!-- Each table has a view option. Clicking this will lead to a different page for each table to display the information in full -->
<!-- Only first and last name from each form to be displayed -->
<table class="table bookingTable">
    <thead>
        <tr>
            <th scope="col">Booking Requests:</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($r = $bookingResult->fetch(PDO::FETCH_ASSOC)) { //open in one php block   
        ?>
            <tr>
                <th scope="row"><?php echo $r['bookingId'] ?></th>

                <!-- therefore everything here is html, not php. So our data gets displayed as html -->
                <!--But inside each td, we shall need another PHP block!-->

                <td> <?php echo $r['firstName'] ?></td>
                <td> <?php echo $r['lastName'] ?></td>
                <td>
                    <a href="viewBooking.php?id=<?php echo $r['bookingId'] ?>" class="btn btn-primary">View</a>
                    <a href="editBooking.php?id=<?php echo $r['bookingId'] ?>" class="btn btn-warning">Edit</a>
                </td>
            <?php  } //close in another php block
            ?>
            </tr>
    </tbody>
</table>

<br>

<table class="table contactsTable">
    <thead>
        <tr>
            <th scope="col">Contacts:</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($r = $contactResult->fetch(PDO::FETCH_ASSOC)) { //open in one php block   
        ?>
            <tr>
                <th scope="row"><?php echo $r['id'] ?></th>

                <!-- therefore everything here is html, not php. So our data gets displayed as html -->
                <!--But inside each td, we shall need another PHP block!-->

                <td> <?php echo $r['firstName'] ?></td>
                <td> <?php echo $r['lastName'] ?></td>
                <td>
                    <a href="viewContact.php?id=<?php echo $r['id'] ?>" class="btn btn-primary">View</a>
                    <a href="editContact.php?id=<?php echo $r['id'] ?>" class="btn btn-warning">Edit</a>
                </td>
            <?php  } //close in another php block
            ?>
            </tr>
    </tbody>
</table>

<br>

<table class="table testimonialsTable">
    <thead>
        <tr>
            <th scope="col">Testimonials:</th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($r = $testimonialResult->fetch(PDO::FETCH_ASSOC)) { //open in one php block   
        ?>
            <tr>
                <th scope="row"><?php echo $r['testimonial_id'] ?></th>

                <!-- therefore everything here is html, not php. So our data gets displayed as html -->
                <!--But inside each td, we shall need another PHP block!-->

                <td> <?php echo $r['firstName'] ?></td>
                <td> <?php echo $r['lastName'] ?></td>
                <td>
                    <a href="viewTestimonial.php?id=<?php echo $r['testimonial_id'] ?>" class="btn btn-primary">View</a>
                    <a href="EditTestimonial.php?id=<?php echo $r['testimonial_id'] ?>" class="btn btn-warning">Edit</a>
                </td>

            <?php  } //close in another php block
            ?>
            </tr>
    </tbody>
</table>

<?php require_once 'includes/footer.php'; ?>