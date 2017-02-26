var to = document.getElementById("destination");
var departure = document.getElementById("from");
var date = document.getElementById("welc");
var time = document.getElementById("welc");


storeHere.innerHTML="Welcome to my updated code";

var count=0;

function validate ()

{
	if (departure.value =="from" ||  to.value =="to"||date.selected ==""||time.value =="Depature_Time")
		alert("Do not leave any field empty!");
}