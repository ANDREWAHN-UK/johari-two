<!-- This page brings up the details of each testimonial submitted -->
<?php
$title = 'View Contact';
require_once 'includes/header.php';
require_once 'db/conn.php';

//need function to retrive data from a single entry

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $crud->getTestimonialDetails($id);
} else {
    echo "<h1 'class = text-danger'> Please check details and try again </h1>";
}
?>

<div class="card testimonialViewCard " style="width: 36rem;">

    <div class="card-body">
        <h5 class="card-title"> <?php echo $result['firstName'] . ' ' . $result['lastName']; ?></h5>
        
        <p class="card-text">Date arrived: <?php echo $result['dateArrived']; ?></p>
        <p class="card-text">Feedback: <?php echo $result['testimonialText']; ?></p>
        <a href="index.php" class="btn btn-primary home-button">Home</a>
    </div>
</div>


<?php require_once 'includes/footer.php'; ?>