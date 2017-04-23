<?php
require_once '../setting/init.php';
include_once REQUIRES . 'header.php';
?>
<title>Sign Up</title>

<?php
include_once REQUIRES . 'nav_bar.php';
?>


<div class="row" style="margin:50px; margin-bottom: 100px;">
    <?php include('../unsecure/unsecure.php'); ?>
    <div class="col-md-4">
        &nbsp
    </div>
    <div class="col-md-4"
    ">

    <!--The form for the sign_up values -->
    <form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h2 class="form-signin-heading" style="text-align: center;">Provide Details</h2>
        <br>
        <small>
            <span id="error"> <?php echo $user_exists_error ; ?> </span>
        </small>

        <!---get user's firstname-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
            <input type="username" id="first_name" class="form-control" placeholder="First Name" required autofocus
                   name="firstname" value="<?php echo $fname; ?>">
            <small>
                <span id="error"> <?php echo $fname_error  ; ?> </span>
            </small>
        </div>
        <br>


        <!---get user's lastname-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
            <input type="username" id="last_name" class="form-control" placeholder="Last Name" required autofocus
                   name="lastname" value="<?php echo $lname; ?>">
            <small>
                <span id="error"> <?php echo $lname_error  ; ?> </span>
            </small>
        </div>
        <br>

        <!---get user's date of birth-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <label>
                <small>Date of Birth</small>
            </label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="<?php echo $dob; ?>"><br>

            <small>
                <span id="error"> <?php echo $date_error  ; ?> </span>
            </small>
        </div>
        <br>

        <!---get user's email-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <input type="email" id="email" class="form-control" placeholder="Email " required name="email" value="<?php echo $email; ?>">
            <small>
                <span id="error"> <?php echo $email_error  ; ?> </span>
            </small>
        </div>
        <br>
        <!--Get user's phone number-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
            <input type="text" id="phone" class="form-control" placeholder="+233503548654 " required name="tel" value="<?php echo $tel; ?>">
            <small>
                <span id="error"> <?php echo $phone_error  ; ?> </span>
            </small>
        </div>
        <br>

        <!---get user's password-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input id='password' class="form-control" type="password" placeholder="Password" name="password">
            <small>
                <span id="error"> <?php echo $password_error  ; ?> </span>
            </small>
        </div>
        <br>

        <!---get user's gender-->
        <select class="form-control" id="gender" name="gender">
            <option value="gender">Gender</option>
            <option value="M" <?php if ($gender === "M") {
                echo 'selected';
            } ?> id="gen">Male</option>
            <option value="F" <?php if ($gender === "F") {
                echo 'selected';
            } ?> id="gen">Female</option>
        </select>
        <small>
            <span id="error"> <?php echo $gender_error  ; ?> </span>
        </small>
        <br>

        <!---call the function to validate the form data on submission-->
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Sign Up</button>
    </form>

</div>
<div class="col-md-4">
    &nbsp
</div>

</div>


<!---The footer-->
<?php
include_once REQUIRES . 'footer.php';
?>
