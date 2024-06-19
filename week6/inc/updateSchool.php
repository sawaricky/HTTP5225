<?php
include ('function.php');
    // connection string

if (isset($_POST['updateSchool'])) {
    // print_r($_POST)
// Array ( [schoolName] => TEST [schoolLevel] => rtrt [phone] => +14372547855 [email] => n01604846@humber.ca )
// displayihn the output
    $id = $_POST['id'];
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    include ('../reusable/connect.php');
    // updating the table
    $query = "UPDATE  `schools` SET `School Name`='$schoolName',`School Level`='$schoolLevel', `Phone`='$phone', `Email`='$email' WHERE `id`='$id'";

    $school = mysqli_query($connect, $query);
    // once successfully updated give success message
    if ($school) {
        set_message('School was Updated successfully!', 'success');
        header("Location: ../index.php");
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} 
// if updateSchool variable name does not exist in the form 
else {
    echo "you should not be here";
}

?>