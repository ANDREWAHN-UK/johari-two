<!-- This page to display what needs to be edited. Actual editing to occur in editContactPost.php-->
<?php
$title = 'Edit Contact';
require_once 'includes/header.php';
require_once 'db/conn.php';

if(!isset($_GET['id'])){
    echo 'error';
} else {
    $id=$_GET['id'];
    $result = $crud->getContactDetails($id);
    // the closing } of the if statement is to be found AT THE END of the page! That means the form displays only if there is a valid id
?>


<section class="contact" id="contact">
    <div class="row ">

        <div class="col">

            <h1 class="text-center">Edit Contact Form</h1>

            <form method="post" action="editContactPost.php">
            <input type="hidden" value="<?php $contact["Id"]?>" name="id">

                <div class="d-grid col-6 mx-auto">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" value="<?php echo $result['firstName'] ?>" id="firstName" name="firstName">
                </div>

                <div class="d-grid col-6 mx-auto">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" value="<?php echo $result['lastName'] ?>" id="lastName" name="lastName">
                </div>               

                <div class="d-grid col-6 mx-auto">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" value="<?php echo $result['emailAddress'] ?>" id="emailAddress" name="emailAddress" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="d-grid col-6 mx-auto">
                    <label for="contactNumber" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" value="<?php echo $result['contactNumber'] ?>" id="contactNumber" name="contactNumber" aria-describedby="contactNumberHelp">
                    <div id="contactNumberHelp" class="form-text">We'll never share your number with anyone else.</div>
                </div>

                <div class="d-grid col-6 mx-auto">
                    <label for="contactText" class="form-label">What would you like to contact us about?</label>
                    <input type="text" class="form-control" value="<?php echo $result['contactText'] ?>"rows="5" id="contactText" name="contactText"> 
                    
                </div>
               
                <div class="d-grid col-6 mx-auto">
                    <button type="submit" class="btn btn-primary contact-button" name="submit">Edit Contact</button>
                </div>
              
            </form>

        </div>

    </div>

</section

<?php } ?>

<?php require_once 'includes/footer.php'; ?>