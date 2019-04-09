<?php
$title = "Login";
require 'partials/head.php'; ?>

    <div class="row">

        <div class="col-4 offset-4">
            <form class="form-signin" action="checkin_check" method="post">
                <h4 class="h3 mb-3 font-weight-normal">Login</h4>
                <input type = "text" class = "form-control"
                       name = "email" placeholder = "Email"
                       required autofocus></br>
                <input type = "password" class = "form-control"
                       name = "password" placeholder = "Wachtwoord" required></br>
                <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block" name="submit"/></br>
                <p>
                    <a href="signup">Sign Up</a>  |
                    <a href="checkinadmin">Admin</a> |
                    <a href="forgot_password">Forgot Password</a>
                </p>

            </form>
        </div>
    </div>

    <!--changed the line-->
<?php require 'partials/foot.php'; ?>