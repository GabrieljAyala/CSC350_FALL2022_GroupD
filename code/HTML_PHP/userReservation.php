
<?php 
session_start();
$conn =  new mysqli('localhost',"root",'root','laundry');

$reservedData;
$unit = $_SESSION['id'];
$sql = "SELECT User_ID,Reservation_Date FROM laundry.login where User_ID ='$unit'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	$reservedData = $row["Reservation_Date"];
}

if(empty($reservedData)){
	echo "<h3><u>$unit Reservation:</u></h3>None";
}
else{
	echo "<h3><u>$unit Reservation:</u></h3>$reservedData";
}
?>