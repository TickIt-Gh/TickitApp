<?php
require_once '../setting/init.php';
include_once REQUIRES . 'header.php';
?>
<title>Log In</title>

<?php
//include_once REQUIRES . 'nav_bar.php';
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
    <form class="form-signin" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h2 class="form-signin-heading" style="text-align: center;">Please sign in</h2>
        <br>

        <!--get the user email-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input type="email" id="email" class="form-control" placeholder="Email" required autofocus
                   name="email" value="<?php echo $email; ?>">
        </div>
        <br>

        <!--get the user password-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input class="form-control" id="password" type="password" placeholder="Password" required name="password">
        </div>
        <small>
            <span id="error"><?php echo $error; ?> </span>
            <br>
        </small>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember_me"> Remember me
            </label>

            <!--link for password recovery-->
            <label style="padding-left: 70%">
                <a href="">forgot password?</a>
            </label>

        </div>

        <!---call the validate_login function whensubmit is clicked-->
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="validate_login()" name="login">Sign in
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
