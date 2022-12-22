<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>The Heights Login</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
		
		<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px solid black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 200px;
  background-color: black;
  color: white;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
	</head>
	<body>
	<?php 
	
 session_start();

    if (!isset($_SESSION['FirstVisit'])) {

    //show site for the first time part
    $_SESSION['FirstVisit'] = 1;
    
	//*******************Important Professor!!!*************************
	//We did check data stuctures only for the sql export! This code here provides data to make the website functional!
	//Saying this to prevent confusion if you see any data on the sqlbench.
	$conn =  new mysqli('localhost',"root",'root','laundry');
	
	$UnitInsert = "INSERT INTO `login` VALUES ('UnitA1',NULL,NULL,NULL,NULL,NULL,1),
			('UnitA10',NULL,NULL,NULL,NULL,NULL,10),
			('UnitA11',NULL,NULL,NULL,NULL,NULL,11),
			('UnitA12',NULL,NULL,NULL,NULL,NULL,12),
			('UnitA13',NULL,NULL,NULL,NULL,NULL,13),
			('UnitA14',NULL,NULL,NULL,NULL,NULL,14),
			('UnitA15',NULL,NULL,NULL,NULL,NULL,15),
			('UnitA16',NULL,NULL,NULL,NULL,NULL,16),
			('UnitA17',NULL,NULL,NULL,NULL,NULL,17),
			('UnitA18',NULL,NULL,NULL,NULL,NULL,18),
			('UnitA19',NULL,NULL,NULL,NULL,NULL,19),
			('UnitA2',NULL,NULL,NULL,NULL,NULL,2),
			('UnitA20',NULL,NULL,NULL,NULL,NULL,20),
			('UnitA3',NULL,NULL,NULL,NULL,NULL,3)
			,('UnitA4',NULL,NULL,NULL,NULL,NULL,4)
			,('UnitA5',NULL,NULL,NULL,NULL,NULL,5),
			('UnitA6',NULL,NULL,NULL,NULL,NULL,6)
			,('UnitA7',NULL,NULL,NULL,NULL,NULL,7),
			('UnitA8',NULL,NULL,NULL,NULL,NULL,8),
			('UnitA9',NULL,NULL,NULL,NULL,NULL,9);";
			
	$ReservationInsert = "INSERT INTO `timeslot` VALUES ('Friday 0-2am',NULL),
		('Friday 10-12pm',NULL),('Friday 10pm-12am',NULL),
		('Friday 12-2pm',NULL),('Friday 2-4am',NULL),('Friday 2-4pm',NULL),
		('Friday 4-6am',NULL),('Friday 4-6pm',NULL),('Friday 6-8am',NULL),
		('Friday 6-8pm',NULL),('Friday 8-10am',NULL),('Friday 8-10pm',NULL),
		('Monday 0-2am',NULL),('Monday 10-12pm',NULL),('Monday 10pm-12am',NULL),
		('Monday 12-2pm',NULL),('Monday 2-4am',NULL),('Monday 2-4pm',NULL),
		('Monday 4-6am',NULL),('Monday 4-6pm',NULL),('Monday 6-8am',NULL),
		('Monday 6-8pm',NULL),('Monday 8-10am',NULL),('Monday 8-10pm',NULL),
		('Saturday 0-2am',NULL),('Saturday 10-12pm',NULL),('Saturday 10pm-12am',NULL),
		('Saturday 12-2pm',NULL),('Saturday 2-4am',NULL),('Saturday 2-4pm',NULL),
		('Saturday 4-6am',NULL),('Saturday 4-6pm',NULL),('Saturday 6-8am',NULL),
		('Saturday 6-8pm',NULL),('Saturday 8-10am',NULL),('Saturday 8-10pm',NULL),
		('Sunday 0-2am',NULL),('Sunday 10-12pm',NULL),('Sunday 10pm-12am',NULL),
		('Sunday 12-2pm',NULL),('Sunday 2-4am',NULL),('Sunday 2-4pm',NULL),('Sunday 4-6am',NULL),
		('Sunday 4-6pm',NULL),('Sunday 6-8am',NULL),('Sunday 6-8pm',NULL),
		('Sunday 8-10am',NULL),('Sunday 8-10pm',NULL),('Thursday 0-2am',NULL),
		('Thursday 10-12pm',NULL),('Thursday 10pm-12am',NULL),('Thursday 12-2pm',NULL),
		('Thursday 2-4am',NULL),('Thursday 2-4pm',NULL),
		('Thursday 4-6am',NULL),('Thursday 4-6pm',NULL),('Thursday 6-8am',NULL),
		('Thursday 6-8pm',NULL),('Thursday 8-10am',NULL),('Thursday 8-10pm',NULL),
		('Tuesday 0-2am',NULL),('Tuesday 10-12pm',NULL),('Tuesday 10pm-12am',NULL),
		('Tuesday 12-2pm',NULL),('Tuesday 2-4am',NULL),('Tuesday 2-4pm',NULL),
		('Tuesday 4-6am',NULL),('Tuesday 4-6pm',NULL),('Tuesday 6-8am',NULL),
		('Tuesday 6-8pm',NULL),('Tuesday 8-10am',NULL),('Tuesday 8-10pm',NULL),
		('Wednesday 0-2am',NULL),('Wednesday 10-12pm',NULL),('Wednesday 10pm-12am',NULL),
		('Wednesday 12-2pm',NULL),('Wednesday 2-4am',NULL),
		('Wednesday 2-4pm',NULL),('Wednesday 4-6am',NULL),
		('Wednesday 4-6pm',NULL),('Wednesday 6-8am',NULL),('Wednesday 6-8pm',NULL),
		('Wednesday 8-10am',NULL),('Wednesday 8-10pm',NULL);";
		
		$Unitinsert = $conn->query($UnitInsert);
		$ReservationInsert = $conn->query($ReservationInsert);
    // Don't forget to add http colon slash slash www dot before!
$conn->close();
    } 

	
	?>
		<div class="center">

			<h1>THE HEIGHTS</h1>
			<h4>LOGIN</h4>
			
			<!--Change action from login.php to loginLogic.php-->
			<form method="post" action="LoginLogic.php">
				<div style='color:white;' id="dropDWN"></div>
				<div class="tooltip"><b>?</b>
  <span class="tooltiptext">Sign Up for your unit to show up</span>
</div>
				<div class="txt_field">
					<input type="password" name="password" required>
					<span></span>
					<label>Password</label>
				</div>
                <div class="pass">Forgot Password?</div>
                <input type="submit" value="Login">
                <p class="no-member">Not a member?</p>
                <div class="signup_link"><a href="SignUp.php">Sign up</a></div>
			</form>
			
			<script>



					//This script is for the dropdown box			

					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function(){
					if(this.readyState == 4  && this.status == 200){
					console.log('Returned True')
					document.getElementById('dropDWN').innerHTML = this.responseText;}
					};

					xhttp.open("GET", "dropdownLogin.php", true);
					xhttp.send();
					
					//If the user is logged in and tried to goto the login page it would 
					//transfer them back to the laundry.php since they are already logged in
					function phpTrigger(){

					<?php 
					
					if (isset($_SESSION['loggedin'])) {
					
					header('Location: Laundry.php');
						
					}else{
						
					}
					?>						
					}
					phpTrigger();

					</script>
		</div>
	</body>
</html>
