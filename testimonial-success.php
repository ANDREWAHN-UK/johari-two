<?php

$title = 'Testimonial-Success';
require_once 'includes/header.php';

require_once 'db/conn.php';

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dateArrived = $_POST['dateArrived'];
    $testimonialText = $_POST['testimonialText'];

    $isSuccess = $crud->insertTestimonial($firstName, $lastName, $dateArrived, $testimonialText);

    if ($isSuccess) {
        echo '<h1 class = "text-center text-success-johari"> Form sent </h1>';
    } else {
        echo '<h1 class = "text-center text-danger"> Form not sent </h1>';
    }
}

?>
<!-- Text here is placeholder -->
<h1 class="text-center text-success-johari">Thankyou for your Testimonial</h1>

<br>

<div class="card testimonialViewCard" style="width: 36rem;">

    <div class="card-body">
        <h5 class="card-title"> <?php echo $_POST['firstName'] . ' ' . $_POST['lastName']; ?></h5>
        <p class="card-text">LastName: <?php echo $_POST['lastName']; ?></p>
        <p class="card-text">Date arrived: <?php echo $_POST['dateArrived']; ?></p>
        <p class="card-text">Feedback: <?php echo $_POST['testimonialText']; ?></p>
        <a href="index.php" class="btn btn-primary home-button">Home</a>
    </div>
</div>

<?php

?>

<?php
require_once 'includes/footer.php';
?>