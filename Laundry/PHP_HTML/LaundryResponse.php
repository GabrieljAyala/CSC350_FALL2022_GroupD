<html>
<head>
</head>

<body>
<?php

$reservation = $_REQUEST['reservation'];

$conn =  new mysqli('localhost',"root",'root','laundry');



$sql = "
UPDATE laundry.timeslot
set Is_Reserved = 1
Where Reservation_date = '$reservation';";

$result = $conn->query($sql);

$conn->close();
?>

</body>



</html>
