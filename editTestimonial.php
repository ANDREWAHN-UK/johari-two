<!-- This page to display what needs to be edited. Actual editing to occur in editTestimonialPost.php-->
<?php

$title = 'Edit Testimonial';
require_once 'includes/header.php';
require_once 'db/conn.php';

if (!isset($_GET['id'])) {
    echo 'error';
} else {
    $id = $_GET['id'];
    $result = $crud->getTestimonialDetails($id);

    // the closing } of the if statement is to be found AT THE END of the page! That means the form displays only if there is a valid id

?>
    ?>

    <div class="row">

        <div class="col">

            <section class="testimonial-form" id="testimonial-form">

                <h1 class="text-center">Edit Testimonial Form?</h1>

                <form method="post" action="editTestimonialPost.php">

                    <div class="mb-3 form-field">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" value="<?php echo $result['firstName'] ?>" id="firstName" name="firstName">
                    </div>

                    <div class="mb-3 form-field">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" value="<?php echo $result['lastName'] ?>" id="lastName" name="lastName">
                    </div>

                    <div class="mb-3 form-field">
                        <label for="dateArrived" class="form-label">When did you arrive?</label>
                        <input type="text" class="form-control" value="<?php echo $result['dateArrived'] ?>" id="dateArrived" name="dateArrived">
                    </div>

                    <div class="mb-3 form-field">                        
                        <label for="testimonialText" class="form-label">Please leave your feedback here</label>
                        <textarea name="testimonialText" id="testimonialText" cols="120" rows="5">
                       <?php echo $result['testimonialText'] ?>
                        </textarea>
                        
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary" name="submit">Edit Testimonial!</button>
                    </div>
                </form>


            </section>

        </div>

    </div>


<?php
}
?>

<?php
require_once 'includes/footer.php';
?>