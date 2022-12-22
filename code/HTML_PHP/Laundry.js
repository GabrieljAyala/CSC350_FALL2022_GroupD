
const d = new Date();
const wDay = d.getDay();
var wStart;
var currentWeek;
var timeslots;


function getDate() { //function to get and write current date
	document.write(d.toLocaleDateString('en-us', {weekday:"long", month:"long", day:"numeric"}));
}

function weekCaps(start, end) { //function to find week first day and last day
	const wStart = new Date(d.setDate(d.getDate() - start));
	const wEnd =  new Date(d.setDate(d.getDate() + end));
	return [wStart, wEnd]
}

function weekFormatting(start, end) { //function to format the week's first and last days
	const [wStart, wEnd] = weekCaps(start, end);
	wString = `${wStart.toLocaleDateString()}-${wEnd.toLocaleDateString()}`;
	return wString;
}

function getWeek() { //function to call the weekformatting function with appropriate values

	    for (i=1; i < 7; i++) {
	    	if (wDay == 0) {
	    		currentWeek = weekFormatting(6, 6)
	    		return currentWeek;
	    	}
	    	else if (i == wDay) {
	    			currentWeek = weekFormatting(i-1, 6)
		    		return currentWeek;
	    	}
	    }
	  }

function writeWeek() { //function to write the current week
	document.write(getWeek());
}

function selectedSlotColor() { //function to change planner style onclick
	document.getElementById("MONDAY-12:00-02:00AM").style.background='#000000';
	document.getElementById("MONDAY-12:00-02:00AM").className = 'timeslot-cell-selected';
}

function getDateTime() { //function to get date and time and reset database every monday
		const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
		 /*Gets time in UTC*/
		const d = new Date();
		let day = days[d.getUTCDay()];
		var time = d.getUTCHours() + ":" + d.getUTCMinutes() + ":" + d.getUTCSeconds();
		var date = '<h3>Time:</h3>'+ day + ' ' + time;  
		return date

			}
			
			setInterval(function(){
				currentTime = getDateTime();
				/*
				If you want to test the reset, change the currentTime's string condition
				Make sure the time is in UTC and if any of the time is one character, you format it one character
				
				For example Monday 00:00:00 isn't correct, Monday 0:0:0 is correct
				01:30:01 is incorrect but 1:30:1 is correct 
				
				There is also an event on the backend that resets at monday
				*/
				if(currentTime === 'Monday 0:0:0')
				{
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function(){
					if(this.readyState == 4  && this.status == 200){
					document.getElementById('message').innerHTML = this.responseText;}
					};

					xhttp.open("GET", "ResetLaundry.php", true);
					xhttp.send();
					
				console.log('SQL Update has been triggered')
			}else{
				
			}
				document.getElementById("clock").innerHTML = currentTime;
			}, 1000);
			
		

			

function LaundryResponse(clicked_id){ //function to create a submit a reservation form
				let confirmation = document.getElementById('confirm');
				document.getElementById('message').innerHTML = '';
				let value = JSON.stringify(clicked_id);
				document.getElementById('confirm').innerHTML = `<br><h3>Confirm Reservation:</h3> ${clicked_id}<br>`;
					 
confirmation.innerHTML = confirmation.innerHTML + `<button onClick="confirmationResponse('${clicked_id}')">Reserve</button> <button onClick='cancelationResponse()'>Cancel</button>`;
				

				
			}
function confirmationResponse(clicked_id){ //function to send the selected timeslot to the appropriate php file
	
	cancelationResponse();
	
	var xhttp = new XMLHttpRequest();
					
					reservation = clicked_id;
					 
						
					xhttp.onreadystatechange = function(){
					if(this.readyState == 4  && this.status == 200){
					document.getElementById('message').innerHTML = this.responseText;}
					};
                    xhttp.open("POST", "LaundryResponse.php", true);		
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xhttp.send('reservation='+reservation);
					
				console.log('SQL Response has been triggered');	
}
function cancelationResponse(){ //function to call in case the user clicks 'cancel'
	document.getElementById('confirm').innerHTML = '';
}

