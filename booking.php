<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>*{
    box-sizing: border-box;
    font-family: sans-serif;
}


body {
    margin:0;

}
nav {
    position:fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100%;
    background: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
nav a {
    display:inline-block;
    text-decoration: none;
    padding: 5px 15px;
    font-size: 0.9em;
    font-weight: bold;
    color:black;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}
nav a:hover {
    color:seagreen;
}
main {
    margin-left:250px;
    padding:10px;

}


</style>
<body>
  <nav>
    <h1 style="color:black ;">DOC-19</h1><br><br><br>
    <a href="vaccine_info.html">Vaccine Information</a><br />
    <a href="booking_page.html">Booking</a><br />
    <a href="vaccine_certificated.php">Vaccine Certificate</a>
    <a href="edit_user.html">Edit User</a>
    <a href="logout.php">Log Out</a>
  </nav>
  <?php 
session_start();

        if(isset($_POST['Submit'])){
                //connection
        include("connection.php");
                $Vaccineselect =  $_POST['vaccine'];
                $Date =$_POST['date'];
                $Location = $_POST['location'];
                $WhogetVac = $_SESSION['idPatient_Information'];
                //query
                echo "Vaccine Name: "; 
                print_r($Vaccineselect) ;
                echo "<br>";
                echo "Date: "; 
                print_r($Date);
                echo "<br>";
                echo "Location: "; 
                print_r($Location);
        $sql = "INSERT INTO Booking(Vaccine_select,Dose,Date,Vaccination_Site,idPatient_Information) 
        VALUES ('$Vaccineselect','1','$Date','$Location','$WhogetVac')";
        
                $result = mysqli_query($con,$sql);

        }
?>
</body>
</html>