<?php require 'partials/head.php'; ?>

    <div class="row">
        <div class="col-10 offset-1">
            <h4></h4>
        </div>
    </div>
    <div class="row">

        <div class="col-4 offset-4">
            <form class="form-signin" action="add_user" method="post">
                <h4 class="h3 mb-3 font-weight-normal">Create new account</h4>
                <input type = "text" class = "form-control"
                       name = "email" placeholder = "Email"
                       required autofocus></br>
                <input type = "text" class = "form-control"
                       name = "nickname" placeholder = "Nickname (shown on website)"
                ></br>

                <input type="submit" value="Create" class="btn btn-lg btn-primary btn-block" name="submit"/></br>
                <p>
                    <a href="checkin">I already have an account</a>
                </p>

            </form>
        </div>
    </div>

<?php require 'partials/foot.php'; ?>