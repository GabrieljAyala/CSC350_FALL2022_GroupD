
<?php

if (isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['password'], $_POST['unit'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$unit = $_POST['unit'];

$conn =  mysqli_connect('localhost',"root",'root','laundry');

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
} else {

	$sql = "UPDATE login SET FirstName=?, LastName=?, Email=?, Password=? WHERE User_ID = ?";
	// INSERT INTO login (FirstName, LastName, Email, Password) VALUES (?,?,?,?) WHERE User_ID = ?
	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email, $password, $unit);
	mysqli_stmt_execute($stmt);

	if ($sql) { //(if insertion successful)
		echo "success";
	} else {
		echo "oops";
	}

}

}


?>