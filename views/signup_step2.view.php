<?php require 'partials/head.php'; ?>

    <div class="row">
        <div class="col-10 offset-1">
            <h4></h4>
        </div>
    </div>
    <div class="row">

        <div class="col-4 offset-4">
            <form class="form-signin" action="add_user_step2" method="post">
                <h4 class="h3 mb-3 font-weight-normal">Finalize your account</h4>
                <input type = "text" class = "form-control"
                       name = "code" placeholder = "Code (received in email)" required autofocus
                ></br>
                <input type = "text" class = "form-control"
                       name = "fname" placeholder = "First Name (Not required)"
                ></br>
                <input type = "text" class = "form-control"
                       name = "lname" placeholder = "Last Name (Not required)"
                ></br>
                <input type = "text" class = "form-control"
                       name = "mobile" placeholder = "Mobile (Not required)"
                ></br>
                <input type = "password" class = "form-control"
                       name = "password" placeholder = "Password" required></br>
                <input type = "password" class = "form-control"
                       name = "repeatpassword" placeholder = "Repeat Password" required></br>
                <input type="submit" value="Start Gaming" class="btn btn-lg btn-primary btn-block" name="submit"/></br>


            </form>
        </div>
    </div>

<?php require 'partials/foot.php'; ?>