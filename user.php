<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "project_css326");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

if (isset($_POST["submit"])){
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


    $insert_sql = "INSERT INTO Patient_Information(first_name, middle_name, last_name, gender, national_id, passport_id,trip_start,address,email,contact_no)
     VALUES  ('$First_Name', '$Middle_Name', '$Last_Name', '$Gender', '$National_ID', '$Passport_ID','$Birth_Date','$Address','$Email','$Contact_Number')";
  
    $result = $mysqli->query($insert_sql);

    if (!$result){
        echo "Insert failed!<br/>";
        echo $mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>DOC-19 System</title>
<link rel="stylesheet" href="default.css">
</head>

<body>

<div id="wrapper"> 
	<div id="div_header">
		DOC-19 System 
	</div>
	<div id="div_subhead">
		<ul id="menu">
			<li><a href="user.php">User Profile</a></li>
			<li><a href="add_user.php">Add User</a></li>
			<li><a href="group.php">User Group</a></li>
			<li><a href="add_group.html">Add User Group</a></li>
		</ul>		
	</div>
	<div id="div_main">
		<div id="div_left">
				
		</div>
		<div id="div_content" class="usergroup">
			<!--%%%%% Main block %%%%-->
			
			<h2>User Profile</h2>
			<table>
                <col width="15%">
                <col width="30%">
                <col width="30%">
                <col width="20%">
                <col width="5%">

                <tr>
                    <th>Title</th> 
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Group</th>
                    <th>Edit</th>
                    <th>Del</th>
                </tr>
                <?php
                $query = "SELECT * FROM Patient_Information";
                $result = $mysqli->query($query);
                if ($result){
                  while($row=$result->fetch_array()){
                    echo "<tr>";
                    echo "<td>" . $row["first_name"] . " " . $row['last_name'] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";

                    echo '<td><a href="edit_user.php?email='. $row['email']. '">';
                    echo '<img src="images/Modify.png" width="24" height="24">';
                    echo '</a></td>';
                    echo '<td><a href="delete_user.php?email='. $row['email']. '">';
                    echo '<img src="images/Delete.png" width="24" height="24"></td>';
                    echo '</tr>';
                  }
                } else {
                  echo "Error:" . $mysqli->error;
                }
                ?>  
            </table>
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->
	
	<div id="div_footer">  
		
	</div>

</div>
</body>
</html>

