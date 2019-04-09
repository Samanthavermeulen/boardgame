<?php
$title = "Exercises";
require 'partials/head.php'; ?>

    <div class="row">
        <div class="col-10 offset-1">
        <h4>Exercises</h4>
        <p>
            Pressing a link below will start a download. Unzip the downloaded file to a directory. Within the
            comments is written what to do. If you have questions let me know.
        </p>
        <ul>
            <li>
                <a href="Excersice/01_php_string_manipulation/index.php.zip" >01 php string manipulation</a>
            </li>
            <li>
                <a href="Excersice/02_php_integer_manipulation/index.php.zip" >02 php integer manipulation</a>
            </li>
            <li>
                <a href="Excersice/03_php_include-html_start/index.php.zip" >03 php include-html start</a>
            </li>
            <li>
                <a href="Excersice/04_php_if-else/index.php.zip" >04 php if-else</a>
            </li>
        </ul>
    </div>
    </div>
    <hr>
    <div class="row">
       <div class="col-6 offset-3">

            <form class="form-signin" action="excercise_01" method="post">

                <h4 class="h3 mb-3 font-weight-normal">Solution to exercise 01_php_string_manipulation</h4>
                <input type = "text" class = "form-control"
                       name = "programmer" placeholder = "Programmer (f.e. Ada Lovelace)"
                       required autofocus></br>
                <input type = "text" class = "form-control"
                       name = "year" placeholder = "Year (f.e. 1834)" required></br>

                <input type="submit" value="Show answer" class="btn btn-lg btn-primary btn-block" name="submit"/></br>


            </form>
        </div> <!-- End div greeting -->
    </div>
    <hr>
    <div class = "row">
        <div class="col-6 offset-3">

            <form class="form-signin" action="excercise_02" method="post">

                <h4 class="h3 mb-3 font-weight-normal">Solution to exercise 02 php integer manipulation</h4>
                <input type = "text" class = "form-control"
                       name = "hours" placeholder = "Hours (f.e. 40)"
                       required autofocus></br>
                <input type = "text" class = "form-control"
                       name = "productivity" placeholder = "Productivity (f.e. 10.5)" required></br>

                <input type="submit" value="Show answer" class="btn btn-lg btn-primary btn-block" name="submit"/></br>


            </form>
        </div> <!-- End div greeting -->
    </div>
    <hr>
    <div class = "row">
        <div class="col-6 offset-3">

            <form class="form-signin" action="excercise_03" method="post">

                <h4 class="h3 mb-3 font-weight-normal">Solution to exercise 03 php include-html start</h4>
                <input type = "text" class = "form-control"
                       name = "title" placeholder = "Title (f.e. Top 5 Learning Tips)"
                       required autofocus></br>

                <input type="submit" value="Show answer" class="btn btn-lg btn-primary btn-block" name="submit"/></br>


            </form>
        </div> <!-- End div greeting -->
    </div>
    <hr>
    <div class = "row">
        <div class="col-6 offset-3">

            <form class="form-signin" action="excercise_04" method="post">

                <h4 class="h3 mb-3 font-weight-normal">Solution to exercise 04 php if-else</h4>
                <input type = "text" class = "form-control"
                       name = "mylines" placeholder = "Lines of code (f.e.  4000000) "
                       required autofocus></br>

                <input type="submit" value="Show answer" class="btn btn-lg btn-primary btn-block" name="submit"/></br>


            </form>
        </div> <!-- End div greeting -->
    </div>

<?php require 'partials/foot.php'; ?>