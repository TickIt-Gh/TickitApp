
//function to validate the email address
function validate_email(email) {
	 return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email.value);
}

//function to validate the password 
function validate_password(password) {
	 return /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/.test(password.value);

}


//function to validate the name 
function validate_name(name){
	return /^[A-Za-z\s-]+$/.test(name.value) || /^[a-zA-Z ]+$/.test( name.value);
}


//function to validate phone number
function validate_phone_num(phone){
	return /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,7}$/.test(phone.value);
}

//function to validate the form for log in 
function validate_login(){
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	if (email != null && password != null){
		if (validate_email(email)){
			
			alert('Successful Login in');
			
		}else{
			alert('Please a valid email');
		}
	}else{
		alert('Provide an email and password')
	}


}


//function to validate the form for sign up
function validate_sign_up(){
	var last_name = document.getElementById('last_name');
	var first_name = document.getElementById('first_name');
	var date_of_birth = document.getElementById('date_of_birth');
	var password = document.getElementById('password');
	var email = document.getElementById('email');
	var gender = document.getElementById('gender');


	if (validate_name(last_name)){
		if (validate_name(first_name)){
			if (date_of_birth.value != ""){
				if(validate_password(password)){
					if (validate_email(email)){
						if (gender.value != 'gender'){

								//if all the details are valid, the user account is created 
								alert('You have created an account with TickIt');
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


    //function to validate the contact form 
    function validate_contact_form(){
    	var nam = document.getElementById("name");
    	var mail = document.getElementById("email");
    	var message = document.getElementById("comment");

    	if (validate_name(nam)){
    		if (validate_email(mail)){
    			if (message.value != ""){

					//if all the details are valid, the details are sent
					//notify the user that the details have been sent
					alert("your message has been sent to the tickit it team.We will respond as soon as possible");	
				}else
				alert('Enter your message');
			}else
			alert('Provide a value email');
		}else
		alert('Provide a valid name');

	}
