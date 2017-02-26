<?php
	require_once 'require/header.php';
?>
	<title>Contact Us</title>

<?php
	require_once 'require/nav_bar.php';
?>




	<div class="row" style="margin:50px; margin-bottom: 100px;">
		<div class="col-md-4">
			&nbsp
		</div>
		<div class="col-md-6" >
			<form class="form-signin" method="post" action="#" >
				<div>
					<input type="text" id="name" class="form-control" placeholder="Your name" required autofocus name="name">
				</div>
				<br>
				<div>
					<input type="email" class="form-control" id= "email" size="50" placeholder="Your email" required autofocus>
				</div>
				<br>
				<div>
					<textarea  rows="10" class="form-control" cols="50" id="comment" placeholder="Your message here"></textarea>
				</div>
				<br>
				<input type="submit" class="btn btn-primary btn-block" name="submit" value="SUBMIT" onclick="validate_contact_form()">

			</form>
		</div>
	</div>

	<?php
		require_once 'require/footer.php';
	?>

