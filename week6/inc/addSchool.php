<?php
include('function.php');
if(isset($_POST['addSchool']))
{
// print_r($_POST)
// Array ( [schoolName] => TEST [schoolLevel] => rtrt [phone] => +14372547855 [email] => n01604846@humber.ca )
// displayihn the output
$schoolName=$_POST['schoolName'];
$schoolLevel=$_POST['schoolLevel'];
$phone=$_POST['phone'];
$email=$_POST['email'];

// connection string
include('../reusable/connect.php');

// adding into the database 
$query = "INSERT INTO schools(`School Name`, `School Level`, `Phone`, `Email`)
 VALUES (
 '" . mysqli_real_escape_string($connect, $schoolName) . "',
 '" . mysqli_real_escape_string($connect, $schoolLevel) . "',
 '" . mysqli_real_escape_string($connect, $phone) . "',
 '" . mysqli_real_escape_string($connect, $email) . "')";

$school = mysqli_query($connect, $query);
// once data is added feedback is given on the index page
if($school){
    set_message('School was added successfully!', 'success');
    header("Location: ../index.php");
}
else{
    // error
    echo "Failed: " . mysqli_error($connect);
}
}
// 
else{
    echo "you should not be here";
}

?>