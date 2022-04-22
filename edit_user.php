<?php
session_start();

// Connect to the database




if (isset($_POST["Submit"])){
    include("connection.php");
    $First_Name =  $_POST['first_name'];
    
    $Last_Name = $_POST['last_name'];
    $Gender = $_POST['gender'];
    
    
    
    $Email =$_POST['email'];
    
    $patient_ID = $_SESSION['idPatient_Information'];

  $sql = "UPDATE Patient_Information SET first_name='$First_Name', last_name='$Last_Name', gender='$Gender', email = '$Email' WHERE idPatient_Information='$patient_ID'";
  
  $result = mysqli_query($con,$sql);

  if ($result){

  $row = mysqli_fetch_array($result);
        Header("Location: vaccine_info.html");
  }
}
?>