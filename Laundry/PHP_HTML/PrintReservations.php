<html>
<head>
</head>

<body>
			<?php 
				$conn =  new mysqli('localhost',"root",'root','laundry');
				$dateArray = array();
				$sql = "
					SELECT * FROM laundry.timeslot where Is_reserved = 1;";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
				echo "Reserved Dates: <br>";
				while($row = $result->fetch_assoc()) {
					echo "<br>". $row["Reservation_Date"];
					//This appends all the data into one array
					array_push($dateArray,$row["Reservation_Date"]);
					}
				}
				//print the entire array print_r($dateArray);
				$conn->close();
			?>	

</body>



</html>
