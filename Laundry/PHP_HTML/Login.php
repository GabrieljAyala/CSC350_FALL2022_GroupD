
<?php
session_start();

$unitID = $_POST["unit"];
$password = $_POST["password"];
$conn =  mysqli_connect('localhost',"root",'root','laundry');


if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
} else {
	$sql="SELECT User_ID, Password FROM login WHERE User_ID = ?";
	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, 'i', $unitID);
	mysqli_stmt_execute($stmt);

	$stmt->store_result();

	if ($stmt->num_rows > 0) {
	$stmt->bind_result($unitID, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if ($_POST['password'] === $password) {
		// Verification success! User has logged-in!
		// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
		// $name = "'SELECT * FROM login WHERE '"
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		// $_SESSION['name'] = $_POST[''];
		$_SESSION['id'] = $UnitID;
		// echo 'Welcome ' . $_SESSION['id'] . '!';
		header('Location: Laundry.php');
	} else {
		// Incorrect password
		echo 'Incorrect password!';
	}
	} else {
	// Incorrect username
	echo 'Incorrect username';
	}
}



?>