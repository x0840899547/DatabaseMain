<?php 
session_start();

        if(isset($_POST['Submit'])){
                //connection
        include("connection.php");
                $First_Name =  $_POST['first_name'];
                $Middle_Name =$_POST['middle_name'];
                $Last_Name = $_POST['last_name'];
                $Gender = $_POST['gender'];
                $National_ID = $_POST['national_id'];
                $Passport_ID = $_POST['passport_id'];
                $Birth_Date = $_POST['trip_start'];
                $Address = $_POST['address'];
                $Email =$_POST['email'];
                $Contact_Number = $_POST['contact_no'];
                //query 

        $sql = "INSERT INTO Patient_Information (First_name,Middle_name,Last_name,Gender,Birth_Date,National_ID,Passport_ID,Contact_Number,Email, Address) VALUES ('$First_Name','$Middle_Name','$Last_Name','$Gender','$Birth_Date','$National_ID','$Passport_ID','$Contact_Number','$Email','$Address')";

                $result = mysqli_query($con,$sql);

                if ($result){

                $row = mysqli_fetch_array($result);
                        Header("Location: login.html");
                }

        }
?>