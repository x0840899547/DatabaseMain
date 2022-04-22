<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "project_css326");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

if (isset($_GET["email"])){

  $email = $_GET["email"];
  
  // Exercise 2: Fill in command line to delete the row by email
  $delete_sql = "DELETE FROM Patient_Information WHERE email='$Email'";
  $result = $mysqli->query($delete_sql);

  if (!$result){
      echo "Delete failed!<br/>";
      echo $mysqli->error;
  } else {
    header( "location: user.php" );
  }
}

?>