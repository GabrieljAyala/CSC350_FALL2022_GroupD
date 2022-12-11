<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="laundryStyles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<title>Document</title>
</head>

<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: Login.html');
	exit;
}
?>

<body>
	

	<div class="title">
		<div>THE HEIGHTS</div>
		<div class="subtitle">LAUNDRY PLANNER</div>
	</div>
		

		<table class="table-1">
		
				<td class="planner">
					<table class="schedule" id="planner">
							<tr>
								<td><p class="days">Planner</p></td>
								<td class="day-cell"><p class="days">Mon.</p></td>
								<td class="day-cell"><p class="days">Tues.</p></td>
								<td class="day-cell"><p class="days">Wed.</p></td>
								<td class="day-cell"><p class="days">Thurs.</p></td>
								<td class="day-cell"><p class="days">Fri.</p></td>
								<td class="day-cell"><p class="days">Sat.</p></td>
								<td class="day-cell"><p class="days">Sun.</p></td>
							</tr>

<tr>
								<td><p id="timeslot-1" class="hours">00:00-02:00AM</p></td>
								<td class="timeslot-cell" id="mon-0"> <input type="submit" value="Monday 0-2am" name="reservation" onClick="LaundryResponse(this.id)" id="Monday 0-2am"></td>
								<td class="timeslot-cell" id="tues-0"> <input type="submit" value="Tuesday 0-2am" name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 0-2am"></td>
								<td class="timeslot-cell" id="wed-0"> <input  type="submit" value="Wednesday 0-2am" name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 0-2am"></td>
								<td class="timeslot-cell" id="thurs-0"> <input  type="submit" value="Thursday 0-2am" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 0-2am"></td>
								<td class="timeslot-cell" id="fri-0"> <input type="submit" value="Friday 0-2am" name="reservation" onClick="LaundryResponse(this.id)" id="Friday 0-2am"></td>
								<td class="timeslot-cell" id="sat-0"> <input type="submit" value="Saturday 0-2am" name="reservation"  onClick="LaundryResponse(this.id)"id="Saturday 0-2am"></td>
								<td class="timeslot-cell" id="sun-0"> <input type="submit" value="Sunday 0-2am" name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 0-2am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-2" class="hours">02:00-04:00AM</p></td>
								<td class="timeslot-cell" id="mon-2"> <input type="submit"  value="Monday 2-4am"name="reservation" onClick="LaundryResponse(this.id)" id="Monday 2-4am"></td>
								<td class="timeslot-cell" id="tues-2"> <input type="submit" value="Tuesday 2-4am" name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 2-4am"></td>
								<td class="timeslot-cell" id="wed-2"> <input type="submit"  value="Wednesday 2-4am"name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 2-4am"></td>
								<td class="timeslot-cell" id="thurs-2"> <input type="submit" value="Thursday 2-4am" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 2-4am"></td>
								<td class="timeslot-cell" id="fri-2"> <input type="submit"  value="Friday 2-4am"name="reservation" onClick="LaundryResponse(this.id)" id="Friday 2-4am"></td>
								<td class="timeslot-cell" id="sat-2"> <input type="submit"  value="Saturday 2-4am"name="reservation"  onClick="LaundryResponse(this.id)"id="Saturday 2-4am"></td>
								<td class="timeslot-cell" id="sun-2"> <input type="submit"  value="Sunday 2-4am"name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 2-4am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-3" class="hours">04:00-06:00AM</p></td>
								<td class="timeslot-cell" id="mon-4"> <input type="submit"  value="Monday 4-6am"name="reservation" onClick="LaundryResponse(this.id)" id="Monday 4-6am"></td>
								<td class="timeslot-cell" id="tues-4"> <input type="submit"  value="Tuesday 4-6am"name="reservation"  onClick="LaundryResponse(this.id)"id="Tuesday 4-6am"></td>
								<td class="timeslot-cell" id="wed-4"> <input type="submit"  value="Wednesday 4-6am"name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 4-6am"></td>
								<td class="timeslot-cell" id="thurs-4"> <input type="submit" value="Thursday 4-6am" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 4-6am"></td>
								<td class="timeslot-cell" id="fri-4"> <input type="submit" value="Friday 4-6am" name="reservation"  onClick="LaundryResponse(this.id)"id="Friday 4-6am"></td>
								<td class="timeslot-cell" id="sat-4"> <input type="submit" value="Saturday 4-6am" name="reservation"  onClick="LaundryResponse(this.id)"id="Saturday 4-6am"></td>
								<td class="timeslot-cell" id="sun-4"> <input type="submit" value="Sunday 4-6am" name="reservation"  onClick="LaundryResponse(this.id)"id="Sunday 4-6am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-4" class="hours">06:00-08:00AM</p></td>
								<td class="timeslot-cell" id="mon-6"> <input type="submit" value="Monday 6-8am" name="reservation"  onClick="LaundryResponse(this.id)"id="Monday 6-8am"></td>
								<td class="timeslot-cell" id="tues-6"> <input type="submit" value="Tuesday 6-8am" name="reservation"  onClick="LaundryResponse(this.id)"id="Tuesday 6-8am"></td>
								<td class="timeslot-cell" id="wed-6"> <input type="submit" value="Wednesday 6-8am" name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 6-8am"></td>
								<td class="timeslot-cell" id="thurs-6"> <input type="submit" value="Thursday 6-8am" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 6-8am"></td>
								<td class="timeslot-cell" id="fri-6"> <input type="submit" value="Friday 6-8am" name="reservation"  onClick="LaundryResponse(this.id)"id="Friday 6-8am"></td>
								<td class="timeslot-cell" id="sat-6"> <input type="submit" value="Saturday 6-8am" name="reservation" onClick="LaundryResponse(this.id)" id="Saturday 6-8am"></td>
								<td class="timeslot-cell" id="sun-6"> <input type="submit" value="Sunday 6-8am" name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 6-8am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-5" class="hours">08:00-10:00AM</p></td>
								<td class="timeslot-cell" id="mon-8"> <input type="submit" value="Monday 8-10am" name="reservation"  onClick="LaundryResponse(this.id)"id="Monday 8-10am"></td>
								<td class="timeslot-cell" id="tues-8"> <input type="submit" value="Tuesday 8-10am" name="reservation"  onClick="LaundryResponse(this.id)"id="Tuesday 8-10am"></td>
								<td class="timeslot-cell" id="wed-8"> <input type="submit" value="Wednesday 8-10am" name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 8-10am"></td>
								<td class="timeslot-cell" id="thurs-8"> <input type="submit" value="Thursday 8-10am" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 8-10am"></td>
								<td class="timeslot-cell" id="fri-8"> <input type="submit" value="Friday 8-10am" name="reservation" onClick="LaundryResponse(this.id)" id="Friday 8-10am"></td>
								<td class="timeslot-cell" id="sat-8"> <input type="submit"  value="Saturday 8-10am"name="reservation" onClick="LaundryResponse(this.id)" id="Saturday 8-10am"></td>
								<td class="timeslot-cell" id="sun-8"> <input type="submit" value="Sunday 8-10am" name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 8-10am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-6" class="hours">10:00-12:00PM</p></td>
								<td class="timeslot-cell" id="mon-10"> <input type="submit" value="Monday 10-12pm" name="reservation" onClick="LaundryResponse(this.id)" id="Monday 10-12pm"></td>
								<td class="timeslot-cell" id="tues-10"> <input type="submit"  value="Tuesday 10-12pm"name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 10-12pm"></td>
								<td class="timeslot-cell" id="wed-10"> <input type="submit"  value="Wednesday 10-12pm"name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 10-12pm"></td>
								<td class="timeslot-cell" id="thurs-10"> <input type="submit" value="Thursday 10-12pm" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 10-12pm"></td>
								<td class="timeslot-cell" id="fri-10"> <input type="submit"  value="Friday 10-12pm"name="reservation" onClick="LaundryResponse(this.id)" id="Friday 10-12pm"></td>
								<td class="timeslot-cell" id="sat-10"> <input type="submit" value="Saturday 10-12pm" name="reservation" onClick="LaundryResponse(this.id)" id="Saturday 10-12pm"></td>
								<td class="timeslot-cell" id="sun-10"> <input type="submit"  value="Sunday 10-12pm"name="reservation"  onClick="LaundryResponse(this.id)"id="Sunday 10-12pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-7" class="hours">12:00-02:00PM</p></td>
								<td class="timeslot-cell" id="mon-12"> <input type="submit"  value="Monday 12-2pm"name="reservation" onClick="LaundryResponse(this.id)" id="Monday 12-2pm"></td>
								<td class="timeslot-cell" id="tues-12"> <input type="submit"  value="Tuesday 12-2pm"name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 12-2pm"></td>
								<td class="timeslot-cell" id="wed-12"> <input type="submit" value="Wednesday 12-2pm" name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 12-2pm"></td>
								<td class="timeslot-cell" id="thurs-12"> <input type="submit" value="Thursday 12-2pm" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 12-2pm"></td>
								<td class="timeslot-cell" id="fri-12"> <input type="submit"  value="Friday 12-2pm"name="reservation"  onClick="LaundryResponse(this.id)"id="Friday 12-2pm"></td>
								<td class="timeslot-cell" id="sat-12"> <input type="submit"  value="Saturday 12-2pm"name="reservation"  onClick="LaundryResponse(this.id)"id="Saturday 12-2pm"></td>
								<td class="timeslot-cell" id="sun-12"> <input type="submit"  value="Sunday 12-2pm"name="reservation"  onClick="LaundryResponse(this.id)"id="Sunday 12-2pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-8" class="hours">02:00-04:00PM</p></td>
								<td class="timeslot-cell" id="mon-14"> <input type="submit"  value="Monday 2-4pm"name="reservation" onClick="LaundryResponse(this.id)" id="Monday 2-4pm"></td>
								<td class="timeslot-cell" id="tues-14"> <input type="submit"  value="Tuesday 2-4pm"name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 2-4pm"></td>
								<td class="timeslot-cell" id="wed-14"> <input type="submit"  value="Wednesday 2-4pm"name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 2-4pm"></td>
								<td class="timeslot-cell" id="thurs-14"> <input type="submit" value="Thursday 2-4pm" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 2-4pm"></td>
								<td class="timeslot-cell" id="fri-14"> <input type="submit"  value="Friday 2-4pm"name="reservation" onClick="LaundryResponse(this.id)" id="Friday 2-4pm"></td>
								<td class="timeslot-cell" id="sat-14"> <input type="submit"  value="Saturday 2-4pm"name="reservation" onClick="LaundryResponse(this.id)" id="Saturday 2-4pm"></td>
								<td class="timeslot-cell" id="sun-14"> <input type="submit"  value="Sunday 2-4pm"name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 2-4pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-9" class="hours">04:00-06:00PM</p></td>
								<td class="timeslot-cell" id="mon-16"> <input type="submit" value="Monday 4-6pm" name="reservation" onClick="LaundryResponse(this.id)" id="Monday 4-6pm"></td>
								<td class="timeslot-cell" id="tues-16"> <input type="submit"  value="Tuesday 4-6pm"name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 4-6pm"></td>
								<td class="timeslot-cell" id="wed-16"> <input type="submit" value="Wednesday 4-6pm" name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 4-6pm"></td>
								<td class="timeslot-cell" id="thurs-16"> <input type="submit"  value="Thursday 4-6pm"name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 4-6pm"></td>
								<td class="timeslot-cell" id="fri-16"> <input type="submit"  value="Friday 4-6pm"name="reservation" onClick="LaundryResponse(this.id)" id="Friday 4-6pm"></td>
								<td class="timeslot-cell" id="sat-16"> <input type="submit"  value="Saturday 4-6pm"name="reservation" onClick="LaundryResponse(this.id)" id="Saturday 4-6pm"></td>
								<td class="timeslot-cell" id="sun-16"> <input type="submit"  value="Sunday 4-6pm"name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 4-6pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-10" class="hours">06:00-08:00PM</p></td>
								<td class="timeslot-cell" id="mon-18"> <input type="submit"  value="Monday 6-8pm"name="reservation" onClick="LaundryResponse(this.id)" id="Monday 6-8pm"></td>
								<td class="timeslot-cell" id="tues-18"> <input type="submit"  value="Tuesday 6-8pm"name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 6-8pm"></td>
								<td class="timeslot-cell" id="wed-18"> <input type="submit"  value="Wednesday 6-8pm"name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 6-8pm"></td>
								<td class="timeslot-cell" id="thurs-18"> <input type="submit"  value="Thursday 6-8pm"name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 6-8pm"></td>
								<td class="timeslot-cell" id="fri-18"> <input type="submit"  value="Friday 6-8pm"name="reservation"  onClick="LaundryResponse(this.id)"id="Friday 6-8pm"></td>
								<td class="timeslot-cell" id="sat-18"> <input type="submit"  value="Saturday 6-8pm"name="reservation" onClick="LaundryResponse(this.id)" id="Saturday 6-8pm"></td>
								<td class="timeslot-cell" id="sun-18"> <input type="submit"  value="Sunday 6-8pm"name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 6-8pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-11" class="hours">08:00-10:00PM</p></td>
								<td class="timeslot-cell" id="mon-20"> <input type="submit"  value="Monday 8-10pm"name="reservation"  onClick="LaundryResponse(this.id)"id="Monday 8-10pm"></td>
								<td class="timeslot-cell" id="tues-20"> <input type="submit" value='Tuesday 8-10pm' name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 8-10pm"></td>
								<td class="timeslot-cell" id="wed-20"> <input type="submit"value='Wednesday 8-10pm'  name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 8-10pm"></td>
								<td class="timeslot-cell" id="thurs-20"> <input type="submit" value="Thursday 8-10pm" name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 8-10pm"></td>
								<td class="timeslot-cell" id="fri-20"> <input type="submit" value="Friday 8-10pm" name="reservation" onClick="LaundryResponse(this.id)" id="Friday 8-10pm"></td>
								<td class="timeslot-cell" id="sat-20"> <input type="submit" value="Saturday 8-10pm" name="reservation" onClick="LaundryResponse(this.id)" id="Saturday 8-10pm"></td>
								<td class="timeslot-cell" id="sun-20"> <input type="submit" value="Sunday 8-10pm" name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 8-10pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-12" class="hours">10:00-12:00AM</p></td>
								<td class="timeslot-cell" id="mon-22"> <input type="submit"value='Monday 10pm-12am'  name="reservation" onClick="LaundryResponse(this.id)" id="Monday 10pm-12am"></td>
								<td class="timeslot-cell" id="tues-22"> <input type="submit"value='Tuesday 10pm-12am'  name="reservation" onClick="LaundryResponse(this.id)" id="Tuesday 10pm-12am"></td>
								<td class="timeslot-cell" id="wed-22"> <input type="submit"value='Wednesday 10pm-12am'  name="reservation" onClick="LaundryResponse(this.id)" id="Wednesday 10pm-12am"></td>
								<td class="timeslot-cell" id="thurs-22"> <input type="submit" value='Thursday 10pm-12am' name="reservation" onClick="LaundryResponse(this.id)" id="Thursday 10pm-12am"></td>
								<td class="timeslot-cell" id="fri-22"> <input type="submit"value='Friday 10pm-12am'  name="reservation" onClick="LaundryResponse(this.id)" id="Friday 10pm-12am"></td>
								<td class="timeslot-cell" id="sat-22"> <input type="submit" value='Saturday 10pm-12am' name="reservation" onClick="LaundryResponse(this.id)" id="Saturday 10pm-12am"></td>
								<td class="timeslot-cell" id="sun-22"> <input type="submit"value='Sunday 10pm-12am'  name="reservation" onClick="LaundryResponse(this.id)" id="Sunday 10pm-12am"></td>
							</tr>
							
							
					
						
					</table>
				</td>
			<script src="Laundry.js"></script>
				<td class="confirm">
					<div id='clock'></div>

					
					<div id="selected-slot"></div>
					<h3>
					Date: </h3><br><script> getDate(); </script>
					<h3>
					Current Week: </h3><br><script> writeWeek(); </script>
					
					<div id='confirm'></div>
					<div id='message'></div>
					<a href="Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
					</div>
			
					
				</td>
			</tr>
		</table>

	</form>
	
	
	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	
</body>
</html>
