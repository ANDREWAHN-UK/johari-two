<!-- This page is to view the full information from each contact form sent -->
<?php
$title = 'View Contact';
require_once 'includes/header.php';
require_once 'db/conn.php';

//need function to retrive data from a single entry

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $crud->getContactDetails($id);
} else {
    echo "<h1 'class = text-danger'> Please check details and try again </h1>";
}
?>


<div class="card viewcard" style="width: 18rem;">
    
    <div class="card-body">
        <h5 class="card-title"> <?php echo $result['firstName'].' '.$result['lastName'];?></h5>
        <p class="card-text">Email: <?php echo $result['emailAddress'];?></p>
        <p class="card-text">Tel: <?php echo $result['contactNumber']; ?></p>
        <p class="card-text">Message: <?php echo $result['contactText']; ?></p>
        <a href="index.php" class="btn btn-primary home-button">Home</a>
    </div>
    </div>


<?php require_once 'includes/footer.php'; ?>