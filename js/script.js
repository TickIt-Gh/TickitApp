function addListing(){
  var busNumber = document.getElementById("bus_number").value;
  var departureTime = document.getElementById("departure_time").value;
  var departureDate = document.getElementById("departure_date").value;
  var availableSeats = document.getElementById("available_seats").value;
  var departurePoint = document.getElementById("departure_point").value;
  var destinationPoint = document.getElementById("destination_point").value;
  var price = document.getElementById("listing_price").value;
  var availability = document.getElementById("availability");
  var availValue = availability.options[availability.selectedIndex].value;
  var xhttp = new ajaxRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      //Parse json from server into an array of js objects
      document.getElementById("dashboard").innerHTML = this.responseText;

    }
  };

  xhttp.open("GET", "../pages/adminDashboard.php?bus_number="+busNumber+
  "&departure_time="+departureTime+"&departureDate="+departureDate+"&available_seats="+
  availableSeats+"&departure_point="+departurePoint+"&destination_point="+destinationPoint+
  "&listing_price="+price+"&listing_status="+availValue, true);
  xhttp.send();
}

function onDeleteListing(){
  var busNumber = document.getElementById("bus_number").value;
  document.getElementById("listingID").addEventListener("click", deleteListing);
}

function deleteListing() {
    document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
}


/* Creates a XMLHttpRequest request object for recent and old browsers */
  function ajaxRequest()
  {
    try // Non IE Browser?
    {
      // Yes
      var request = new XMLHttpRequest()
    }
    catch(e1)
    {
      try // IE 6+?
      {
        // Yes
        request = new ActiveXObject("Msxml2.XMLHTTP")
      }
      catch(e2)
      {
        try // IE 5?
        {
          // Yes
          request = new ActiveXObject("Microsoft.XMLHTTP")
        }
        catch(e3) // There is no AJAX Support
        {
          request = false
        }
      }
    }
    return request
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

//Function to provide a tocken number
function tocken()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 5; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}


//function to validate the name
function validate_name(name){
	return /^[A-Za-z\s-]+$/.test(name.value) || /^[a-zA-Z ]+$/.test( name.value);

}

//function to validate the form for log in
function validate_login(){
	var email = document.getElementById('email');
	var password = document.getElementById('password');

	//check if the password and email is not empty
	if (email != null && password != null){

		//validate the email
		if (validate_email(email)){

			    //if all is valid , the user successfully logs in
				alert('Successful Login in');

		}else{

			//prompt user to enter a valid email
			alert('Please enter a valid email');
		}
	}else{

		//prompt user to enter the password and email
		alert('Provide an email and password')
	}


}


//function to validate the form for sign up
function validate_sign_up(){

	//get the values entered by the user for validation
	var last_name = document.getElementById('last_name');
	var first_name = document.getElementById('first_name');
	var date_of_birth = document.getElementById('date_of_birth');
	var password = document.getElementById('password');
	var email = document.getElementById('email');
	var gender = document.getElementById('gender');

       //check if the values entered are valid
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

		//get the values from the contact us form for validation
		var nam = document.getElementById("name");
		var mail = document.getElementById("email");
		var message = document.getElementById("comment");


        //validate the values
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

//function to validate the Buy form
    function validate_buy_form(){
    	var nam = document.getElementById("name");
    	var mail = document.getElementById("email");
    	var num = document.getElementById("tel");

    	if (validate_name(nam)){
    		if (validate_email(mail)){
    			if (validate_phone_num(num)){

					//if all the details are valid, the details are sent
					//notify the user that the details have been sent
					document.getElementById('pop').innerHTML ='<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><h1 class="text-center">Thank You For Using <br> <br> TickIT</h1><h3 class="text-center"><em>Your Tocken is <strong id="tocken"></strong></em></h3><br> <h5 class="text-center"><em>It has been sent to your email and phone number</em></h5><br> <button type="button" class="btn btn-default center-block" data-dismiss="modal">Close</button> </div> </div> </div>';
					document.getElementById("tocken").innerHTML = tocken();
				}else
				alert('Enter a valid phone number');
			}else
			alert('Provide a valid email');
		}else
		alert('Provide a valid name');

	}
