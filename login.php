<?php 
session_start();
        if(isset($_POST['Submit'])){
                //connection
                include("connection.php");

                $Username = $_POST['email'];
                $Password = $_POST['national_id'];
                //query 
                echo "$Username";
                echo "$Password";
                  $sql="SELECT * FROM Patient_Information Where Email= '$Username' and National_ID= '$Password'";

                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result)==1){

                    $row = mysqli_fetch_array($result);
                    $_SESSION['idPatient_Information']=$row['idPatient_Information'];
                        Header("Location: booking_page.html");
                    }

                }
            else{
                echo "<script>";
                echo "window.history.back()";
                echo "</script>";

                }


?>