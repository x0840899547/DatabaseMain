<?php
session_start();

// Connect to the database




if (isset($_POST["Submit"])){
    include("connection.php");
    $Vaccineselect =  $_POST['vaccine'];
    $Date =$_POST['date'];
    $Location = $_POST['location'];
    
    $patient_ID = $_SESSION['idPatient_Information'];

  $sql = "UPDATE Booking SET Vaccine_select='$Vaccineselect', Date ='$Date', Vaccination_Site ='$Location' WHERE idPatient_Information='$patient_ID'";
  
  $result = mysqli_query($con,$sql);

  if ($result){

  $row = mysqli_fetch_array($result);
        Header("Location: vaccine_certificated.php");
  }
}
?>