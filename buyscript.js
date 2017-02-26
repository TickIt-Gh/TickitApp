var to = document.getElementById("destination");
var departure = document.getElementById("from");
var date = document.getElementById("date");
var time = document.getElementById("time");

function validate ()

{
	if (departure.value =="from" ||  to.value =="to"||date.value ==""||time.value =="Depature_Time")
		alert("Please fill all fields!");
	else{
		document.getElementById('pop').innerHTML ='<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><h1 class="text-center">Thank You For Using <br> <br> TickIT</h1><h3 class="text-center"><em>Your Tocken is <strong id="tocken"></strong></em></h3><br> <button type="button" class="btn btn-default center-block" data-dismiss="modal">Close</button> </div> </div> </div>';
		document.getElementById("tocken").innerHTML = tocken();
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