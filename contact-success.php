<?php

$title ='Contact-Success';
require_once 'includes/header.php';
require_once 'db/conn.php';

//the below refers to the contact form --> this could be on a separate page
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $contactNumber = $_POST['contactNumber'];
    $contactText = $_POST['contactText'];
    
    $isSuccess = $crud -> insertContact($firstName, $lastName, $emailAddress, $contactNumber, $contactText);
}
?>
<!-- Text here is placeholder -->
<h1 class="text-center text-success-johari">Thankyou for your message</h1>

<br>
    <div class="card viewcard" style="width: 18rem;">
    
    <div class="card-body">
        <h5 class="card-title"> <?php echo $_POST['firstName'].' '.$_POST['lastName'];?></h5>
        <p class="card-text">Email: <?php echo $_POST['emailAddress'];?></p>
        <p class="card-text">Tel: <?php echo $_POST['contactNumber']; ?></p>
        <p class="card-text">Message: <?php echo $_POST['contactText']; ?></p>
        <a href="index.php" class="btn btn-primary home-button">Home</a>
    </div>
    </div>

<?php

?>

<?php 
require_once 'includes/footer.php';
?>