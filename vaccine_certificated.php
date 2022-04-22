<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <title>Vaccine Information</title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    <nav>
        <h1 style="color:black ;">DOC-19</h1><br><br><br>
        <a href="vaccine_info.html">Vaccine Information</a><br />
    <a href="booking_page.html">Booking</a><br />
    <a href="vaccine_certificated.php">Vaccine Certificate</a>
    <a href="edit_user.html">Edit User</a>
    <a href="logout.php">Log Out</a>
    </nav>

    <div class="container">
        <form class="well form-horizontal" method="post" action="booking.php"  id="contact_form">
        <div class="forms">
            <div class="form-content">
            <div class="login-form">
                <div class="title">
                <b>Vaccines Certificate</b>
                </div>
                <?php 
session_start();

        
                //connection
        include("connection.php");
       $certificate_id = $_SESSION['idPatient_Information'];
                //query
                $sql="SELECT b.* ,p.* FROM Booking b,Patient_Information p Where p.idPatient_Information= '$certificate_id' and b.idPatient_Information = '$certificate_id'";

                $result = mysqli_query($con,$sql);
                
                    $row = mysqli_fetch_array($result);
                    echo "<br>"; 
                    echo "First Name: "; echo $row['First_Name']; echo "<br><br>"; 
                    echo "Middle Name: "; echo $row['Middle_Name']; echo "<br><br>";
                    echo "Last Name: "; echo $row['Last_Name']; echo "<br><br>";
                    echo "Gender: "; echo $row['Gender']; echo "<br><br>";
                    echo "Birth Date: "; echo $row['Birth_Date']; echo "<br><br>"; 
                    echo "Vaccine: "; echo $row['Vaccine_select']; echo "<br><br>";
                    echo "Dose: "; echo $row['Dose']; echo "<br><br>";
                    echo "Date: "; echo $row['Date']; echo "<br><br>";
                    echo "Vaccination Site: "; echo $row['Vaccination_Site']; echo "<br><br>";
                

        
?>
                <br><br>
            </div>        
            </div>
        </div>        
        </form>
    </div>
        
   
</body>
</html>