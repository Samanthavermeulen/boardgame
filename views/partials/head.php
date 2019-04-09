
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">

    <!-- Title   -->
    <?php

        echo "<title>" . $title . "</title>";

    ?>

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- CSS Bootstrap   -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Fontawesome / icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>


<body>
<!-- source navbar-->
<?php include "public/nav.php"; ?>




<div class="container-fluid" >

    <!-- if you not signed in - get a warning-->
    <?php if (!$issignedin ) :?>
        <div class="row">
            <div class="col-10 offset-1">
                <i><small> Currently you are not signed in. Please sign in using <a href="checkin">Login</a></small></i>
            </div>
        </div> <!-- End div row -->
        <hr>

    <?php else :?>
        <!-- if the admin is logged in - get a message-->
        <?php if ($isadmin ) :?>
            <div class="row">
                <div class="col-10 offset-1">
                    <i><small> Currently you are signed is as ADMIN</small></i>
                </div>
            </div> <!-- End div row -->
            <hr>
        <?php endif; ?>
    <?php endif; ?>

    <!--
    end of the div class "container-fluid" is in the footer.php
    end of the body tag is in the footer.php
    -->