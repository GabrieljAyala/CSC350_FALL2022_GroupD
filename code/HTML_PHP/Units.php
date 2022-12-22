<html>
<head>
</head>

<body>
<?php
$conn =  new mysqli('localhost',"root",'root','laundry');

$sql = "SELECT User_ID FROM laundry.login Where password is NULL order by ordering;";

$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
                echo '<div class="Units"><span class="apt-unit">Apartment Unit:</span>';
                echo '<select name="unit" id="units" class="select-button">';
                  echo '<option disabled selected value><span style="color:white">select unit</span></option>';
				while($row = $result->fetch_assoc()) {
					echo "<option value='". $row["User_ID"]. "'>". $row["User_ID"]."</option>";
					//This appends all the data into one array
					}
					 echo '</select></div>';
                echo '<input type="submit" value="Sign up" onmouseover="showAgreement();">';
				}else{
					echo "<p style='text-align:center'>All the units have been selected! Contact the Laundry Admin if you don't have an account.</p>";
				}
$conn->close();
?>

</body>



</html>
