<html>
<head>
</head>

<body>
<?php
session_start();
$reservation = $_REQUEST['reservation'];

$conn =  new mysqli('localhost',"root",'root','laundry');

$ID = $_SESSION['id'];
$condition = "SELECT User_ID, Reservation_Date FROM laundry.login where User_ID = '$ID';";
$result3 = $conn->query($condition);
$check;

while($row = $result3->fetch_assoc()) {
	$check = $row["Reservation_Date"];
}

if(empty($check)){
	
$sql = "
UPDATE laundry.timeslot
set Is_Reserved = 1
Where Reservation_date = '$reservation';
";
$result = $conn->query($sql);

$sql2 = "UPDATE laundry.login set Reservation_date = '$reservation'
Where User_ID = '$ID'";
$result2 = $conn->query($sql2);

echo "Slot selected";
}else{echo "<h2>Error:</h2>You have reserved slot '$check' already";}
$conn->close();

?>

</body>



</html>
