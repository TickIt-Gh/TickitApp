<?php
require_once '../setting/init.php';
include_once REQUIRES . 'header.php';
?>
<title>Contact Us</title>

<?php
include_once REQUIRES . 'nav_bar.php';
?>


<div class="row" style="margin:50px; margin-bottom: 100px;">
    <div class="col-md-3">
        &nbsp
    </div>
    <div class="col-md-6">
        <div>
            &emsp;
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
                <textarea rows="10" class="form-control" cols="50" id="comment"
                          placeholder="Your message here"></textarea>
        </div>
        <br>
        <input type="submit" class="btn btn-primary btn-block" name="submit" value="SUBMIT"
               onclick="validate_contact_form()">

    </div>

    <div class="col-md-3">
        &nbsp
    </div>
</div>

<?php
include_once REQUIRES . 'footer.php';
?>

