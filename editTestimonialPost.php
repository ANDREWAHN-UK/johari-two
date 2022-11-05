<!-- this page does not need to be displayed. -->

<?php
require_once 'db/conn.php';
//extract values from the post array


if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dateArrived = $_POST['dateArrived'];
    $testimonialText = $_POST['testimonialText'];

    //call crud function
    $result = $crud->editTestimonial($id, $firstName, $lastName, $dateArrived, $testimonialText);
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