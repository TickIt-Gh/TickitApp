var nam = document.getElementById("name").value;
var mail = document.getElementById("email").value;
var message = document.getElementById("comment").value;


function validate()

{
	// using regular expressions to validate the email entered by the user

var regEmail=/^([A-Za-z0-9_\-\.]){1,}@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/;

//using regular expression to validat the name entered by the user
var regName=/^([A-Za-z\-]){1,} \ ([A-Za-z\-]){1,}$/;

if (nam.value =="" ||  mail.value =="" || message.value ==""){
alert("kindly fill all the fields");
}

	if else (mail.match(regEmail)==false ){
		alert("invalid email address");
	}
	
	if else(nam.match(regName)==false){
		alert("invalid name");
	}
	else
		alert("your message has successfully been sent to the tickit team.You will receive our response as soon as possible");

}
