
			<?php 
				$conn =  new mysqli('localhost',"root",'root','laundry');
				$dateArray = array();
				$sql = "
					SELECT * FROM laundry.timeslot where Is_reserved = 1;";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row

				while($row = $result->fetch_assoc()) {
					$reserve = $row['Reservation_Date'];
					echo "input[id='$reserve']{
					background-color: gray;
					pointer-events: none;}";

					array_push($dateArray,$row["Reservation_Date"]);
							
				}
				
	
				}
				//print the entire array print_r($dateArray);
				$conn->close();
			?>	

	

			
