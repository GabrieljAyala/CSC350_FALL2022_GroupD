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
<body>

	<script src="Laundry.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	
	<div class="topnav">
	  <a class="active" href="#login">Login</a>
	  <a href="#signup">Sign Up</a>
	  <a href="#faq">F.A.Q</a>
	</div>

	<div class="title">
		<div>THE HEIGHTS</div>
		<div class="subtitle">LAUNDRY PLANNER</div>
	</div>
		

		<table class="table-1">
			<tr>
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
								<td class="timeslot-cell" id="0-1"> <input type="hidden"  value="MONDAY 0-2am" name="reservation" id="Monday 0-2am"></td>
								<td class="timeslot-cell" id="0-2"> <input type="hidden"  value="Tuesday 0-2am" name="reservation" id="Tuesday 0-2am"></td>
								<td class="timeslot-cell" id="0-3"> <input  type="hidden"  value="Wednesday 0-2am" name="reservation" id="Wednesday 0-2am"></td>
								<td class="timeslot-cell" id="0-4"> <input  type="hidden"  value="Thursday 0-2am" name="reservation" id="Thursday 0-2am"></td>
								<td class="timeslot-cell" id="0-5"> <input type="hidden"  value="Friday 0-2am" name="reservation" id="Friday 0-2am"></td>
								<td class="timeslot-cell" id="0-6"> <input type="hidden"  value="Saturday 0-2am" name="reservation" id="Saturday 0-2am"></td>
								<td class="timeslot-cell" id="0-7"> <input type="hidden"  value="Sunday 0-2am" name="reservation" id="Sunday 0-2am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-2" class="hours">02:00-04:00AM</p></td>
								<td class="timeslot-cell" id="0-2"> <input type="hidden"   value="Monday 2-4am"name="reservation" id="Monday 2-4am"></td>
								<td class="timeslot-cell" id="tues-2"> <input type="hidden"  value="Tuesday 2-4am" name="reservation" id="Tuesday 2-4am"></td>
								<td class="timeslot-cell" id="wed-2"> <input type="hidden"   value="Wednesday 2-4am"name="reservation" id="Wednesday 2-4am"></td>
								<td class="timeslot-cell" id="thurs-2"> <input type="hidden"  value="Thursday 2-4am" name="reservation" id="Thursday 2-4am"></td>
								<td class="timeslot-cell" id="fri-2"> <input type="hidden"   value="Friday 2-4am"name="reservation" id="Friday 2-4am"></td>
								<td class="timeslot-cell" id="sat-2"> <input type="hidden"   value="Saturday 2-4am"name="reservation" id="Saturday 2-4am"></td>
								<td class="timeslot-cell" id="sun-2"> <input type="hidden"   value="Sunday 2-4am"name="reservation" id="Sunday 2-4am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-3" class="hours">04:00-06:00AM</p></td>
								<td class="timeslot-cell" id="0-3"> <input type="hidden"   value="Monday 4-6am"name="reservation" id="Monday 4-6am"></td>
								<td class="timeslot-cell" id="tues-4"> <input type="hidden"   value="Tuesday 4-6am"name="reservation" id="Tuesday 4-6am"></td>
								<td class="timeslot-cell" id="wed-4"> <input type="hidden"   value="Wednesday 4-6am"name="reservation" id="Wednesday 4-6am"></td>
								<td class="timeslot-cell" id="thurs-4"> <input type="hidden"  value="Thursday 4-6am" name="reservation" id="Thursday 4-6am"></td>
								<td class="timeslot-cell" id="fri-4"> <input type="hidden"  value="Friday 4-6am" name="reservation" id="Friday 4-6am"></td>
								<td class="timeslot-cell" id="sat-4"> <input type="hidden"  value="Saturday 4-6am" name="reservation" id="Saturday 4-6am"></td>
								<td class="timeslot-cell" id="sun-4"> <input type="hidden"  value="Sunday 4-6am" name="reservation" id="Sunday 4-6am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-4" class="hours">06:00-08:00AM</p></td>
								<td class="timeslot-cell" id="mon-6"> <input type="hidden"  value="Monday 6-8am" name="reservation" id="Monday 6-8am"></td>
								<td class="timeslot-cell" id="tues-6"> <input type="hidden"  value="Tuesday 6-8am" name="reservation" id="Tuesday 6-8am"></td>
								<td class="timeslot-cell" id="wed-6"> <input type="hidden"  value="Wednesday 6-8am" name="reservation" id="Wednesday 6-8am"></td>
								<td class="timeslot-cell" id="thurs-6"> <input type="hidden"  value="Thursday 6-8am" name="reservation" id="Thursday 6-8am"></td>
								<td class="timeslot-cell" id="fri-6"> <input type="hidden"  value="Friday 6-8am" name="reservation" id="Friday 6-8am"></td>
								<td class="timeslot-cell" id="sat-6"> <input type="hidden"  value="Saturday 6-8am" name="reservation" id="Saturday 6-8am"></td>
								<td class="timeslot-cell" id="sun-6"> <input type="hidden"  value="Sunday 6-8am" name="reservation" id="Sunday 6-8am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-5" class="hours">08:00-10:00AM</p></td>
								<td class="timeslot-cell" id="mon-8"> <input type="hidden"  value="Monday 8-10am" name="reservation" id="Monday 8-10am"></td>
								<td class="timeslot-cell" id="tues-8"> <input type="hidden"  value="Tuesday 8-10am" name="reservation" id="Tuesday 8-10am"></td>
								<td class="timeslot-cell" id="wed-8"> <input type="hidden"  value="Wednesday 8-10am" name="reservation" id="Wednesday 8-10am"></td>
								<td class="timeslot-cell" id="thurs-8"> <input type="hidden"  value="Thursday 8-10am" name="reservation" id="Thursday 8-10am"></td>
								<td class="timeslot-cell" id="fri-8"> <input type="hidden"  value="Friday 8-10am" name="reservation" id="Friday 8-10am"></td>
								<td class="timeslot-cell" id="sat-8"> <input type="hidden"   value="Saturday 8-10am"name="reservation" id="Saturday 8-10am"></td>
								<td class="timeslot-cell" id="sun-8"> <input type="hidden"  value="Sunday 8-10am" name="reservation" id="Sunday 8-10am"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-6" class="hours">10:00-12:00PM</p></td>
								<td class="timeslot-cell" id="mon-10"> <input type="hidden"  value="Monday 10-12pm" name="reservation" id="Monday 10-12pm"></td>
								<td class="timeslot-cell" id="tues-10"> <input type="hidden"   value="Tuesday 10-12pm"name="reservation" id="Tuesday 10-12pm"></td>
								<td class="timeslot-cell" id="wed-10"> <input type="hidden"   value="Wednesday 10-12pm"name="reservation" id="Wednesday 10-12pm"></td>
								<td class="timeslot-cell" id="thurs-10"> <input type="hidden"  value="Thursday 10-12pm" name="reservation" id="Thursday 10-12pm"></td>
								<td class="timeslot-cell" id="fri-10"> <input type="hidden"   value="Friday 10-12pm"name="reservation" id="Friday 10-12pm"></td>
								<td class="timeslot-cell" id="sat-10"> <input type="hidden"  value="Saturday 10-12pm" name="reservation" id="Saturday 10-12pm"></td>
								<td class="timeslot-cell" id="sun-10"> <input type="hidden"   value="Sunday 10-12pm"name="reservation" id="Sunday 10-12pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-7" class="hours">12:00-02:00PM</p></td>
								<td class="timeslot-cell" id="mon-12"> <input type="hidden"   value="Monday 12-2pm"name="reservation" id="Monday 12-2pm"></td>
								<td class="timeslot-cell" id="tues-12"> <input type="hidden"   value="Tuesday 12-2pm"name="reservation" id="Tuesday 12-2pm"></td>
								<td class="timeslot-cell" id="wed-12"> <input type="hidden"  value="Wednesday 12-2pm" name="reservation" id="Wednesday 12-2pm"></td>
								<td class="timeslot-cell" id="thurs-12"> <input type="hidden"  value="Thursday 12-2pm" name="reservation" id="Thursday 12-2pm"></td>
								<td class="timeslot-cell" id="fri-12"> <input type="hidden"   value="Friday 12-2pm"name="reservation" id="Friday 12-2pm"></td>
								<td class="timeslot-cell" id="sat-12"> <input type="hidden"   value="Saturday 12-2pm"name="reservation" id="Saturday 12-2pm"></td>
								<td class="timeslot-cell" id="sun-12"> <input type="hidden"   value="Sunday 12-2pm"name="reservation" id="Sunday 12-2pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-8" class="hours">02:00-04:00PM</p></td>
								<td class="timeslot-cell" id="mon-14"> <input type="hidden"   value="Monday 2-4pm"name="reservation" id="Monday 2-4pm"></td>
								<td class="timeslot-cell" id="tues-14"> <input type="hidden"   value="Tuesday 2-4pm"name="reservation" id="Tuesday 2-4pm"></td>
								<td class="timeslot-cell" id="wed-14"> <input type="hidden"   value="Wednesday 2-4pm"name="reservation" id="Wednesday 2-4pm"></td>
								<td class="timeslot-cell" id="thurs-14"> <input type="hidden"  value="Thursday 2-4pm" name="reservation" id="Thursday 2-4pm"></td>
								<td class="timeslot-cell" id="fri-14"> <input type="hidden"   value="Friday 2-4pm"name="reservation" id="Friday 2-4pm"></td>
								<td class="timeslot-cell" id="sat-14"> <input type="hidden"   value="Saturday 2-4pm"name="reservation" id="Saturday 2-4pm"></td>
								<td class="timeslot-cell" id="sun-14"> <input type="hidden"   value="Sunday 2-4pm"name="reservation" id="Sunday 2-4pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-9" class="hours">04:00-06:00PM</p></td>
								<td class="timeslot-cell" id="mon-16"> <input type="hidden"  value="Monday 4-6pm" name="reservation" id="Monday 4-6pm"></td>
								<td class="timeslot-cell" id="tues-16"> <input type="hidden"   value="Tuesday 4-6pm"name="reservation" id="Tuesday 4-6pm"></td>
								<td class="timeslot-cell" id="wed-16"> <input type="hidden"  value="Wednesday 4-6pm" name="reservation" id="Wednesday 4-6pm"></td>
								<td class="timeslot-cell" id="thurs-16"> <input type="hidden"   value="Thursday 4-6pm"name="reservation" id="Thursday 4-6pm"></td>
								<td class="timeslot-cell" id="fri-16"> <input type="hidden"   value="Friday 4-6pm"name="reservation" id="Friday 4-6pm"></td>
								<td class="timeslot-cell" id="sat-16"> <input type="hidden"   value="Saturday 4-6pm"name="reservation" id="Saturday 4-6pm"></td>
								<td class="timeslot-cell" id="sun-16"> <input type="hidden"   value="Sunday 4-6pm"name="reservation" id="Sunday 4-6pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-10" class="hours">06:00-08:00PM</p></td>
								<td class="timeslot-cell" id="mon-18"> <input type="hidden"   value="Monday 6-8pm"name="reservation" id="Monday 6-8pm"></td>
								<td class="timeslot-cell" id="tues-18"> <input type="hidden"   value="Tuesday 6-8pm"name="reservation" id="Tuesday 6-8pm"></td>
								<td class="timeslot-cell" id="wed-18"> <input type="hidden"   value="Wednesday 6-8pm"name="reservation" id="Wednesday 6-8pm"></td>
								<td class="timeslot-cell" id="thurs-18"> <input type="hidden"   value="Thursday 6-8pm"name="reservation" id="Thursday 6-8pm"></td>
								<td class="timeslot-cell" id="fri-18"> <input type="hidden"   value="Friday 6-8pm"name="reservation" id="Friday 6-8pm"></td>
								<td class="timeslot-cell" id="sat-18"> <input type="hidden"   value="Saturday 6-8pm"name="reservation" id="Saturday 6-8pm"></td>
								<td class="timeslot-cell" id="sun-18"> <input type="hidden"   value="Sunday 6-8pm"name="reservation" id="Sunday 6-8pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-11" class="hours">08:00-10:00PM</p></td>
								<td class="timeslot-cell" id="mon-20"> <input type="hidden"   value="Monday 8-10pm"name="reservation" id="Monday 8-10pm"></td>
								<td class="timeslot-cell" id="tues-20"> <input type="hidden"  value='Tuesday 8-10pm' name="reservation" id="Tuesday 8-10pm"></td>
								<td class="timeslot-cell" id="wed-20"> <input type="hidden" value='Wednesday 8-10pm'  name="reservation" id="Wednesday 8-10pm"></td>
								<td class="timeslot-cell" id="thurs-20"> <input type="hidden"  value="Thursday 8-10pm" name="reservation" id="Thursday 8-10pm"></td>
								<td class="timeslot-cell" id="fri-20"> <input type="hidden"  value="Friday 8-10pm" name="reservation" id="Friday 8-10pm"></td>
								<td class="timeslot-cell" id="sat-20"> <input type="hidden"  value="Saturday 8-10pm" name="reservation" id="Saturday 8-10pm"></td>
								<td class="timeslot-cell" id="sun-20"> <input type="hidden"  value="Sunday 8-10pm" name="reservation" id="Sunday 8-10pm"></td>
							</tr>
	
							<tr>
								<td><p id="timeslot-12" class="hours">10:00-12:00AM</p></td>
								<td class="timeslot-cell" id="mon-22"> <input type="hidden" value='Monday 10pm-12am'  name="reservation" id="Monday 10pm-12am"></td>
								<td class="timeslot-cell" id="tues-22"> <input type="hidden" value='Tuesday 10pm-12am'  name="reservation" id="Tuesday 10pm-12am"></td>
								<td class="timeslot-cell" id="wed-22"> <input type="hidden" value='Wednesday 10pm-12am'  name="reservation" id="Wednesday 10pm-12am"></td>
								<td class="timeslot-cell" id="thurs-22"> <input type="hidden"  value='Thursday 10pm-12am' name="reservation" id="Thursday 10pm-12am"></td>
								<td class="timeslot-cell" id="fri-22"> <input type="hidden" value='Friday 10pm-12am'  name="reservation" id="Friday 10pm-12am"></td>
								<td class="timeslot-cell" id="sat-22"> <input type="hidden"  value='Saturday 10pm-12am' name="reservation" id="Saturday 10pm-12am"></td>
								<td class="timeslot-cell" id="sun-22"> <input type="hidden" value='Sunday 10pm-12am'  name="reservation" id="Sunday 10pm-12am"></td>
							</tr>
					</table>
				</td>

				<td class="confirm">
					<div id='clock'></div>
					Date: <script> getDate(); </script><br>
					Current Week: <script> writeWeek(); </script><br>
					<script> selectedSlot(); </script><br>
					<div id="selected-slot"></div>
					<div id='confirm'></div>
					F.A.Q
					<div id='message'></div>
				</td>
			</tr>
		</table>

	</form>
	
</body>
</html>

