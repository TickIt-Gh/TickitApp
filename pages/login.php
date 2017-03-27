<?php
require_once '../require/header.php';
?>
<title>Log In</title>

<?php
require_once '../require/nav_bar.php';
?>


<div class="row" style="margin:50px; margin-bottom: 100px;">
    <div class="col-md-4">
        &nbsp
    </div>
    <div class="col-md-4"
    ">

    <!---form for login details-->
    <form class="form-signin" method="POST" action="admin.php">
        <h2 class="form-signin-heading" style="text-align: center;">Please sign in</h2>
        <br>

        <!--get the user email-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input type="email" id="email" class="form-control" placeholder="Email" required autofocus
                   name="email">
        </div>
        <br>

        <!--get the user password-->
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input class="form-control" id="password" type="password" placeholder="Password" required name="password">
        </div>
        <br>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember_me"> Remember me
            </label>

            <!--link for password recovery-->
            <label style="padding-left: 70%">
                <a href="">forgot password?</a>
            </label>
        </div>
        <br>

        <!---call the validate_login function whensubmit is clicked-->
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="validate_login()">Sign in</button>
    </form>
</div>
<div class="col-md-4">
    &nbsp
</div>

</div>


<!--the footer-->
<?php
require_once '../require/footer.php';
?>
