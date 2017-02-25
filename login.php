	<!DOCTYPE html>
	<html>
	<head>
		<title>TickIT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			
			p{
				font-style: justify;
			}

			.hero {
				background: url("img/vip.jpg");
				border:none;
				color: white;
				background-size: cover;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role='navigation'>
			<div class="container">
				<div class="navbar-header"><a href="#" class="navbar-brand navbar-link"><i class="glyphicon glyphicon-phone"></i>TickIT</a>
					<button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				</div>
				<div class="collapse navbar-collapse" id="navcol-1">
					<ul class="nav navbar-nav navbar-left">
						<li role="presentation" class="active"><a href="#">Home</a></li>
						<li role="presentation"><a href="#">Service</a></li>
						<li role="presentation"><a href="#">Team</a></li>
						<li role="presentation"><a href="#">About Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>

			</div>
		</nav>


		<div class="jumbotron hero">
			<div class="container">
				<div class="row">
					<div class='col-md-4 col-md-push-7 phone-preview'>
						<div class="iphone-mockup">
							<img class="img-responsive" src="img/apple-iphone-5s.svg" alt="Phone Here">
							<div class="screen"></div>
						</div>
					</div>

					<div class='col-md-6 col-md-pull-3 get-it'>
						
						

						  <div id=LogForm style="text-align: center; padding-top: 20%; padding-left: 50%;" >
	                        
	                         <h2>Log in to update bus listings</h2>
	                         <br><br><br>
	                        <form  method="post" action="busListings.php"> 
	                          <div class ='container'>
			 
	                         User name <br>
	                          <input type="text" name="name" <?php if(isset($_POST['name'])){echo ("value='".$_POST['name']."'");}?>
	                           <br><br>

	                          Password <br>
	                          <input type="password" name="password" <?php if(isset($_POST['password'])){echo ("value='".$_POST['password']."'");}?> <br><br>

	                         <input type="submit" name="submit" value="Login" style="color: black" >
	                         </div>
	                         </form>
	                         </fieldset>
	                     </div>
						
						</div>

					</div>
				</div>
			</div>

			<div class="section-colored text-center">


			</div>

			<div class="container colored" style="padding :5px">
				<div class="row well" style="padding:5px">
					<div class="col-lg-8 col-md-8">
						<h4>We are here to serve!</h4>
					</div>
					<div class="col-lg-4 col-md-4">
						<a class="btn btn-lg btn-primary pull-right" href="/about">Contact Us!</a>
					</div>
				</div>
				<!-- /.row -->
			</div>
			<div class="col-lg-12" style="color: white;background-color: white;">
				&nbsp
			</div>

			<footer style="text-align: center;">
				<div class="container">
					<div class="custom"  >
						<p>©TickIT Company Ltd. All rights reserved.</p>
						<p>1 University Avenue, PMB CT3321 | Cantonments, Accra, Ghana | Phone: +233.000.000.00</p>
						<p><a href="#" rel="alternate">TickIT Company Ltd</a> | <a href="#" rel="alternate">Ticket Booking</a></p>
					</div>
				</div>

			</footer>


		</body>
		</html>
