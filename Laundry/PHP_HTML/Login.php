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
					session_start();
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
