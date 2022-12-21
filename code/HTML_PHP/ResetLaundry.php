<html>
<head>
</head>

<body>
				<?php 
				$conn =  new mysqli('localhost',"root",'root','laundry');
				$sql = "
					update laundry.timeslot SET Is_Reserved = 0;";
				$result = $conn->query($sql);
				$conn->close();					
				?>

</body>



</html>
