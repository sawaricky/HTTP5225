<?php
// connection to the database
  require('../reusable/connect.php');
  include('function.php');
    // if the deleteSchool variable name exists corrently process the delete
  if(isset($_GET['deleteSchool'])){
    $id = $_GET['id'];
    $query = "DELETE FROM schools WHERE `id` = '$id'";
    $school = mysqli_query($connect, $query);

    if($school){
      set_message('School was deleted successfully!', 'danger');
      header('Location: ../index.php');
    }else{
      echo "Failed: " . mysqli_error($connect);
    }

  }
//   if the variable name did not exist correctly do not delete 
  else{
    echo "Not Authorized";
  }
