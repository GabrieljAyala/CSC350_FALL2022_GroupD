
<?php
session_start();

$unitID = $_POST["UNITS"];
$password = $_POST["password"];
$conn =  mysqli_connect('localhost',"root",'root','laundry');


	


if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
} else {

	
	$result = mysqli_query($conn,"SELECT User_ID, Password FROM login WHERE User_ID = '$unitID' and Password = '$password'");


    $row  = mysqli_fetch_array($result);	
	

if(is_array($row)) {
		
		// Verification success! User has logged-in!
		// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
		// $name = "'SELECT * FROM login WHERE '"
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		// $_SESSION['name'] = $_POST[''];
		
		//This had a bug was spelt UnitID which prevented a stored session!
		$_SESSION['id'] = $row['User_ID'];
		// echo 'Welcome ' . $_SESSION['id'] . '!';
		
		header('Location: Laundry.php');
	} else {
		// Incorrect password
		echo 'Incorrect password or username!';
		header('Location: Login.php');
	}

}



?>