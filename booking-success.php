<?php

$title ='Booking Success';
require_once 'includes/header.php';

require_once 'db/conn.php';

if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $emailAddress = $_POST['emailAddress'];
    $contactNumber = $_POST['contactNumber'];
    
    $isSuccess = $crud -> insertBookingRequest($firstName, $lastName, $startDate, $endDate, $emailAddress, $contactNumber);
    
    if ($isSuccess){
        echo '<h1 class = "text-center text-success-johari-johari"> Form sent </h1>';
    } else {
        echo '<h1 class = "text-center text-danger"> Form not sent </h1>';
    }
}
?>
<!-- Text here is placeholder -->
<h1 class="text-center text-success-johari">Thankyou for your request. We shall contact you shortly.</h1>

<br>

    <div class="card" style="width: 18rem;">
    
    <div class="card-body">
        <h5 class="card-title"> <?php echo $_POST['firstName'].' '.$_POST['lastName'];?></h5>
        
        <p class="card-text">From: <?php echo $_POST['startDate'];?></p>
        <p class="card-text">To: <?php echo $_POST['endDate'];?></p>
        <p class="card-text">Email: <?php echo $_POST['emailAddress'];?></p>
        <p class="card-text">Tel: <?php echo $_POST['contactNumber']; ?></p>
        <a href="index.php" class="btn btn-primary home-button">Home</a>
    </div>
    </div>

    <?php

?>

<?php 
require_once 'includes/footer.php';
?>