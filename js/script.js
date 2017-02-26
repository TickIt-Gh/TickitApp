function validate_email(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email.value);
}

function validate_password(password) {
	var re = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
	return re.test(password.value);
}


function validate_name(name){
	return /^[A-Za-z\s-]+$/.test(name.value) || /^[a-zA-Z ]+$/.test( name.value);

}


function validate_login(){
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	if (email != null && password != null){
		if (validate_email(email)){
			if (validate_password(password))
				alert('Successful Login in');
			else
				alert('Password must be aleast 8 character \n one symbol \natleast an upper case \na lower case \na number');
		}else{
			alert('Please a valid email');
		}
	}else{
		alert('Provide an email and password')
	}


}

function validate_sign_up(){
	var last_name = document.getElementById('last_name');
	var first_name = document.getElementById('first_name');
	var date_of_birth = document.getElementById('date_of_birth');
	var password = document.getElementById('password');
	var email = document.getElementById('email');
	var gender = document.getElementById('gender');

	//alert(gender.value);

	/*
	if (date_of_birth.value == ""){
		alert('No date selected');
	}else
		alert(date_of_birth.value);
	alert( last_name.value +'<br>'+
		first_name.value + '<br>'+
		date_of_birth.value + '<br>'+
		password.value +'<br>'+
		email.value + '<br>'+
		male.value + '<br>'+
		female.value + '<br>'+
		'<br>');
		
		*/
		if (validate_name(last_name)){
			if (validate_name(first_name)){
				if (date_of_birth.value != ""){
					if(validate_password(password)){
						if (validate_email(email)){
							if (gender.value != 'gender'){
								alert('working');
							}else
							alert('Select your gender');
						}else
						alert('Provide valid email');
					}else
					alert('Password must be aleast 8 character \n \tone symbol \n \tatleast an upper case \n \ta lower case \n \ta number');
				}else
				alert('Select date of birth');
			}else
			alert('Provide valid first name');

		}else
		alert('Provide valid last name');
		
	}


	function validate_contact_form(){
		var nam = document.getElementById("name");
		var mail = document.getElementById("email");
		var message = document.getElementById("comment");

		if (validate_name(nam)){
			if (validate_email(mail)){
				if (message.value != ""){
					alert("your message has been sent to the tickit it team.We will respond as soon as possible");	
				}else
				alert('Enter your message');
			}else
			alert('Provide a value email');
		}else
		alert('Provide a valid name');

	}
