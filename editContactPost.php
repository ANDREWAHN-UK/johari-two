<!-- this page does not need to be displayed. -->

<?php
require_once 'db/conn.php';
//extract values from the post array

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $contactNumber = $_POST['contactNumber'];
    $contactText = $_POST['contactText'];

    //call crud function
    $result = $crud->editContact($id, $firstName, $lastName, $emailAddress, $contactNumber, $contactText);
    //redirect to a suitable page
    if ($result) {
        header("Location: viewrecords.php");
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}


?>