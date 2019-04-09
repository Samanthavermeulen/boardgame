<?php
$title = "Admin Login";
require 'partials/head.php'; ?>



        <div class="row">

            <div class="col-4 offset-4">
                <form class="form-signin" action="checkinadmin_check" method="post">

                    <h4 class="h3 mb-3 font-weight-normal">Administrator Login</h4>
                    <input type = "text" class = "form-control"
                           name = "email" placeholder = "Email"
                           required autofocus></br>
                    <input type = "password" class = "form-control"
                           name = "password" placeholder = "Wachtwoord" required></br>
                    <input type = "password" class = "form-control"
                           name = "adminid" placeholder = "Admin ID" required></br>
                    <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block" name="submit"/></br>
                    <p>
                        <a href="checkin">I am not an administrator</a>
                    </p>

                </form>
            </div>
        </div>

    <!--changed the line-->
<?php require 'partials/foot.php'; ?>