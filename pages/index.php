<?php
require_once '../setting/init.php';
include_once REQUIRES . 'header.php';
?>
    <title>Welcome to TickIT</title>

<?php
require_once REQUIRES . 'nav_bar.php';
?>

    <div class="jumbotron hero">
        <div class="container">
            <div class="row">
                <div class='col-md-4 col-md-push-7 phone-preview'>
                    <div class="iphone-mockup">
                        <img class="img-responsive" src="../img/apple-iphone-5s.svg" alt="Phone Here">
                        <div class="screen"></div>
                    </div>
                </div>
                <div class='col-md-6 col-md-pull-3 get-it'>
                    <h1>TickIT App</h1>
                    <p align="justify"> Welcome to TickUP Official Web Application.
                        Book a ticket with us or create a account</p>
                    <p>
                        <a class='btn btn-primary' href="../public/login.php">Buy Now!</a>
                        <a class='btn btn-success' href="../public/sign_up.php">Sign Up</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="section-colored text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2>TickIT Ticketing System: Your most reliable ticketing company</h2>
                    <p style="text-align=justify"> An easy to use ticketing system that enables you to book a ticket
                        with VIP coaches to any destination . You can book a ticket, make your payments from wherever
                        you are and just show up for your journey. Travelling has been made easy and its getting
                        better...
                        <a href="https://teamtickit.wordpress.com/about/">read more</a>
                    </p>
                    <hr>
                </div>
            </div>

        </div>

    </div>

    <div class="container colored" style="padding :5px">
        <div class="row well" style="padding:5px">
            <div class="col-lg-8 col-md-8">
                <h4>We are here to serve!</h4>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="btn btn-lg btn-primary pull-right" href="contact.php">Contact Us!</a>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <div class="col-lg-12" style="color: white;background-color: white;">
        &nbsp
    </div>

<?php
require_once REQUIRES . 'footer.php';
?>