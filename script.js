
 //function below will take in a number and add leading zeros to it
function zeroPad(num, places) {
    var zero = places - num.toString().length + 1;
         return Array(+(zero > 0 && zero)).join("0") + num;
     }

var today =  new Date();
var day = today.getDay();
var hour = today.getHours()
var minute = today.getMinutes();
if (minute < 10) { //if the minute is less than 10, then the whole time will be 3 digits so we need to add leading zeros to make it four digits 
  minute= zeroPad(minute, 2);
}
          
var time = parseInt(hour.toString() + minute.toString(), 10);  //the time will be a four digit number with first 2 numbers being the hour and last 2 being the minutes
          
var weekdays = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
           
let openingHours = new Map([
    ["Sunday", "12:00P.M - 9:00P.M"],
    ["Monday", "Closed"],
    ["Tuesday", "11:30A.M - 9:00P.M"],
    ["Wednesday", "11:30A.M - 9:00P.M"],
    ["Thursday", "11:30A.M - 9:00P.M"],
    ["Friday", "11:30A.M - 9:30P.M"],
    ["Saturday", "11:30A.M - 9:30P.M"],
]);

let timeItOpens = new Map([
    ["Sunday", 1200], 
    ["Monday", 1200], 
    ["Tuesday", 1130], 
    ["Wednesday",1130], 
    ["Thursday", 1130],
    ["Friday", 1130],
    ["Saturday", 1130],
]);

//closed if it's monday or if the time is before opening times or if it's sunday-thurs and it's past 9pm or if it's fri-sat and it's past 9:30pm
if (day === 1 || time <= timeItOpens.get(weekdays[day]) || day >= 0 && day < 5 && time >= 2100 || day >= 5 && time >= 2130) {
    document.getElementById("closed-sign").innerHTML = "CLOSED";
}
else {
    document.getElementById("open-sign").innerHTML = "OPEN";
 }

document.getElementById("date").innerHTML = weekdays[day]; 
if (day != 1) { //if it's not Monday, then print out the hours that restaurant is opened for
    document.getElementById("time").innerHTML = openingHours.get(weekdays[day]);
}
     