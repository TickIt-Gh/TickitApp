<?php
require_once '../setting/init.php';
include_once REQUIRES . 'header.php';
?>
<title>Log In</title>

<?php
include_once REQUIRES . 'nav_bar.php';
require_once PUBLICS . 'handle_login.php';
?>

<style>
    #error {
        color: red;
    }

</style>
<div class="row" style="margin:50px; margin-bottom: 100px;">
    <div class="col-md-4">
        &nbsp
    </div>
    <div class="col-md-4"
    ">

    <!---form for login details-->
    <form class="form-signin" method="POST" action="HandleChangePass.php">
        <h2 class="form-signin-heading" style="text-align: center;">Set new Password</h2>
        <br>

        <!--get the user email-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input type="email" id="email" class="form-control" placeholder="Email" required autofocus
                   name="email" value="<?php echo $email; ?>">
        </div>
        <br>

        <!--get the user's new password-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input class="form-control" id="password" type="password" placeholder=" New Password" name="pass" required>
        </div>
        <!--Confirm user's new password-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input class="form-control" id="Newpassword" type="password" placeholder=" New Password again" required  name="newPass">
        </div>
        <small>
            <span id="error"><?php echo $error; ?> </span>
            <br>
        </small>
        

        <!---call the validate_login function whensubmit is clicked-->
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="validate_passChange()" name="submit">Change Password
        </button>
    </form>

</div>
<div class="col-md-4">
    &nbsp
</div>

</div>


<!--the footer-->
<?php
include_once REQUIRES . 'footer.php';
?>
