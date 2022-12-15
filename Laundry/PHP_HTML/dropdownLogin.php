<html>
<head>
</head>

<body>
<?php
$conn =  new mysqli('localhost',"root",'root','laundry');

$sql = "SELECT User_ID FROM laundry.login Where password is not NULL order by ordering;";

$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
                echo '<div class="Units"><span class="apt-unit">Unit Number:</span>';
                echo '<select name="UNITS" id="unit" class="select-button">';
                  echo '<option disabled selected value><span style="color:white">select unit</span></option>';
				while($row = $result->fetch_assoc()) {
					echo "<option value='". $row["User_ID"]. "'>". $row["User_ID"]."</option>";
					//This appends all the data into one array
					}
					 echo '</select></div>';
				} else{
					echo "<p style='text-align:center;'>No user has been created yet, sign up to login!</p>";
				}
$conn->close();
?>

</body>



</html>
