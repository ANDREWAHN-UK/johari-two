<!-- this page does not need to be displayed. -->
<?php
require_once 'db/conn.php';
//extract values from the post array

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $emailAddress = $_POST['emailAddress'];
    $contactNumber = $_POST['contactNumber'];

    //call crud function
    $result = $crud->editBooking($id, $firstName, $lastName, $startDate, $endDate, $emailAddress, $contactNumber);
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