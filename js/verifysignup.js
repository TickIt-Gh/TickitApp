//function to validate the form for sign up

function validate_sign_up() {

    //get the values entered by the user for validation
    var last_name = document.getElementById('last_name');
    var first_name = document.getElementById('first_name');
    var date_of_birth = document.getElementById('date_of_birth');
    var password = document.getElementById('password');
    var email = document.getElementById('email');
    var gender = document.getElementById('gender');

    //check if the values entered are valid
    if (validate_name(last_name)) {
        if (validate_name(first_name)) {
            if (date_of_birth.value != "") {
                if (validate_password(password)) {
                    if (validate_email(email)) {
                        if (gender.value != 'gender') {

                            //if all the details are valid, the user account is created
                            alert('You have created an account with TickIt');
                        } else
                            alert('Select your gender');
                    } else
                        alert('Provide valid email');
                } else
                    alert('Password must be aleast 8 character \n \tone symbol \n \tatleast an upper case \n \ta lower case \n \ta number');
            } else
                alert('Select date of birth');
        } else
            alert('Provide valid first name');

    } else
        alert('Provide valid last name');

}

//function to validate the email address
function validate_email(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email.value);
}

//function to validate the password
function validate_password(password) {
    var re = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
    return re.test(password.value);
}


//function to validate the name
function validate_name(name){
	return /^[A-Za-z\s-]+$/.test(name.value) || /^[a-zA-Z ]+$/.test( name.value);

}
