function validate_email(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email.value);
}

function validate_password(password) {
	var re = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
	return re.test(password.value);
}


function validate_name(name){
	return /^[A-Za-z\s-]+$/.test(name.value)
}

function validate_login(){
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	if (email != null && password != null){
		if (validate_email(email)){
			if (validate_password(password))
				alert('Successful Login in');
			else
				alert('Password must be aleast 8 character, one symbol, atleast an upper case, a lower case and a number');
		}else{
			alert('Please provide all details');
		}
	}else{
		alert('Provide email and password')
	}

}


