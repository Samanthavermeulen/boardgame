<?php
$title = "Login";
require 'partials/head.php'; ?>

    <div class="row">
        <div class="col-4 offset-4">
            <form class="form-signin" action="forgot_password_check" method="post">
                <h4 class="h3 mb-3 font-weight-normal">Retrieve password for account</h4>
                <input type = "text" class = "form-control"
                       name = "email or nickname" placeholder = "Email or Nickname"
                       required autofocus></br>

                <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block" name="submit"/></br>
                <p>
                    <a href="checkin">Return to checkin</a>
                </p>
            </form>
        </div>
    </div>

<?php

require 'partials/foot.php'; ?>