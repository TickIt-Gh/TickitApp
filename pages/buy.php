<?php
require_once '../setting/init.php';
include_once REQUIRES . 'header.php';
?>
<title>Buy</title>

<?php
include_once REQUIRES . 'nav_bar.php';
?>


<div class="row" style="margin:50px; margin-bottom: 100px;">

    <!--Creating space on the left of the page content-->
    <div class="col-md-4">
        &nbsp
    </div>

    <!--Getting User Information-->
    <div class="col-md-6">
        <form class="form-signin" method="POST" action="#">

            <h2 class="form-signin-heading text-center">Travel Details</h2>

            <div>
                <input type="text" id="name" class="form-control" placeholder="Your name" required autofocus
                       name="name">
            </div>
            <br>

            <div>
                <input type="email" class="form-control" id="email" size="50" placeholder="Your email" required
                       autofocus>
            </div>
            <br>

            <div>
                <input type="text" id="tel" class="form-control" placeholder="Tel- (+233503548654)" required autofocus
                       name="tel">
            </div>
            <br>

            <!-- Large modal -->
            <button type="submit" class="btn btn-primary center-block btn-lg btn-block" onclick="validate_buy_form()"
                    data-toggle="modal" data-target=".bs-example-modal-lg">Buy
            </button>

            <!--Dive to have the modal information-->
            <div id="pop">

            </div>

            <!--including the javascript-->
            <script type="text/javascript" src="../js/script.js"></script>

        </form>
    </div>

    <!--Creating empty space at the page content-->
    <div class="col-md-4">
        &nbsp
    </div>

</div>

<!--The Footer of every page-->
<?php
include_once REQUIRES . 'footer.php';
?>
