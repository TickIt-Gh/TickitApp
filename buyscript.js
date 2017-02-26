var to = document.getElementById("destination");
var departure = document.getElementById("from");
var date = document.getElementById("date");
var time = document.getElementById("time");

document.getElementById('tocken').innerHTML = tocken();

function validate ()

{
	if (departure.value =="from" ||  to.value =="to"||date.selected ==""||time.value =="Depature_Time")
		alert("Do not leave any field empty!");
	else{
		//document.getElementById('test').innerHTML =
		//test.innerHTLM;
	}
}

function tocken()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    
    return text;
}