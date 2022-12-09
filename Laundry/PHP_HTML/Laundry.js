
const d = new Date();
const wDay = d.getDay();
var wStart;
var currentWeek;
var timeslots;


function getDate() {
	document.write(d.toLocaleDateString('en-us', {weekday:"long", month:"long", day:"numeric"}));
}

function weekCaps(start, end) {
	const wStart = new Date(d.setDate(d.getDate() - start));
	const wEnd =  new Date(d.setDate(d.getDate() + end));
	return [wStart, wEnd]
}

function weekFormatting(start, end) {
	const [wStart, wEnd] = weekCaps(start, end);
	wString = `${wStart.toLocaleDateString()}-${wEnd.toLocaleDateString()}`;
	return wString;
}

function getWeek() {

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

function writeWeek() {
	document.write(getWeek());
}

function selectedSlotColor() {
	document.getElementById("MONDAY-12:00-02:00AM").style.background='#000000'; //for later
	document.getElementById("MONDAY-12:00-02:00AM").className = 'timeslot-cell-selected';
}

function getDateTime() {
		const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
		 /*Gets time in UTC*/
		const d = new Date();
		let day = days[d.getUTCDay()];
		var time = d.getUTCHours() + ":" + d.getUTCMinutes() + ":" + d.getUTCSeconds();
		var date = day + ' ' + time;  
		return date

			}
			
			setInterval(function(){
				currentTime = getDateTime();
				/*
				If you want to test the reset, change the currentTime's string condition
				Make sure the time is in UTC and if any of the time is one character, you format it one character
				
				For example Monday 00:00:00 isn't correct, Monday 0:0:0 is correct
				01:30:01 is incorrect but 1:30:1 is correct 
				*/
				if(currentTime === 'Thursday 6:18:40')
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
			
			
			setInterval(function(){
				/*
				If you want to test the reset, change the currentTime's string condition
				Make sure the time is in UTC and if any of the time is one character, you format it one character
				
				For example Monday 00:00:00 isn't correct, Monday 0:0:0 is correct
				01:30:01 is incorrect but 1:30:1 is correct 
				*/

					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function(){
					if(this.readyState == 4  && this.status == 200){
					document.getElementById('message').innerHTML = this.responseText;}
					};

					xhttp.open("GET", "PrintReservations.php", true);
					xhttp.send();
					
					
					
				console.log('SQL Update has been triggered')

				
			}, 1000);

function LaundryResponse(clicked_id){
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

function selectedSlot() {
var table = document.getElementById("planner"), rIndex, cIndex;
            // table rows
            for(var i = 1; i < table.rows.length; i++)
            {
                // row cells
                for(var j = 0; j < table.rows[i].cells.length; j++)
                {
                    table.rows[i].cells[j].onclick = function()
                    {
                        rIndex = this.parentElement.rowIndex;
                        cIndex = this.cellIndex-1;

                        timeslots = [
                        	["MONDAY","TUESDAY","WEDNESDAY","THURSDAY","FRIDAY","SATURDAY","SUNDAY"],
                        	["12:00-02:00AM","02:00-04:00AM","04:00-06:00AM",
                        		"06:00-08:00AM","08:00-10:00AM","10:00-12:00PM",
                        		"12:00-02:00PM","02:00-04:00PM","04:00-06:00PM",
                        		"06:00-08:00PM","08:00-10:00PM","10:00-12:00AM"],
                        	["Monday", "Tuesday", "Wednesday", "Thursday","Friday","Saturday","Sunday"],
                        	["0-2am","2-4am","4-6am","6-8am","8-10am","10-12pm","12-2pm","2-4pm","4-6pm",
                        		"6-8pm","8-10pm","10pm-12am"]
                        ];
                   
                        for (n=0; n < 12; n++) {
                        	for (k=0; k < 8; k++) {
                        		if (rIndex == n && cIndex == k) {

                        			console.log(`day: ${timeslots[0][k]} timeslot: ${timeslots[1][n]}`);

                        			document.getElementById('selected-slot').innerHTML = "<p class='day'>" + `${timeslots[0][k]}` + "</p>" + 
                        			"<p class='timeslot'>" + `${timeslots[1][n+1]}` + "</p>";
                        			var timeslot = `${timeslots[2][k]} ${timeslots[3][n-1]}`;
                        			document.getElementById("confirm").innerHTML=`<form onsubmit="${LaundryResponse(timeslot)};">`+
															'<input type="submit" value="confirm"></form>';
									console.log(timeslot);
                        			// document.getElementById('confirm').innerHTML = `<button onclick="LaundryResponse(${timeslot});"></button>`;
                        		}
                        	}
                        }
                    };
                }
            }


};