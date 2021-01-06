// window.onload = function()
// {
//     window.setInterval(stopWatch, 1000);
// }
//Define vars to hold time values
let seconds = 60;
let minutes = 59;
let hours = 1;

//Define vars to hold "display" value
let displaySeconds = 0;
let displayMinutes = 0;
let displayHours = 0;

//Define var to hold setInterval() function
let interval = null;

//Define var to hold stopwatch status
let status = "stopped";

//Stopwatch function (logic to determine when to increment next value, etc.)
function stopWatch(){

    seconds--;

    //Logic to determine when to increment next value
    if(seconds / 1 === 0){
        seconds = 60;
        minutes--;

        if(minutes === 0){
            minutes = 59;
            hours--;    
        }
    }

    //If seconds/minutes/hours are only one digit, add a leading 0 to the value
    if(seconds < 10){
        displaySeconds = "0" + seconds.toString();
    }
    else{
        displaySeconds = seconds;
    }

    if(minutes < 10){
        displayMinutes = "0" + minutes.toString();
    }
    else{
        displayMinutes = minutes;
    }

    if(hours < 10){
        displayHours = "0" + hours.toString();
    }
    else{
        displayHours = hours;
    }
    // console.log(seconds);
    // console.log('seconds'+ displaySeconds)
    // console.log(minutes);
    // console.log('minutes'+ displayMinutes)
    // console.log(hours);
    console.log('hours'+ displayHours)
    if(seconds == 60 && minutes == 0-1 && hours == 00){
        alert("its finished");
    }
    //Display updated time values to user
    document.getElementById("display").innerHTML = displayHours + ":" + displayMinutes + ":" + displaySeconds;

}

function startStop(){

    if(status === "stopped"){

        //Start the stopwatch (by calling the setInterval() function)
        interval = window.setInterval(stopWatch, 1000);
        document.getElementById("startStop").innerHTML = "Stop";
        status = "started";

    }
    else{

        window.clearInterval(interval);
        document.getElementById("startStop").innerHTML = "Start";
        status = "stopped";

    }

}

// Function to reset the stopwatch
function reset(){

    window.clearInterval(interval);
    seconds = 60;
    minutes = 59;
    hours = 1;

    document.getElementById("display").innerHTML = "00:00:00";
    document.getElementById("startStop").innerHTML = "Start";

}