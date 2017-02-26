var nam = document.getElementById("name");
var mail = document.getElementById("email");
var message = document.getElementById("comment");


function validate ()

{
if (nam.value =="" ||  mail.value =="" || message.value ==""){
alert("kindly fill all the fields");
}
else
{
alert("your message has been sent to the tickit it team.We will respond as soon as possible");	
}
}
