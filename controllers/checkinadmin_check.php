<?php
require 'session.php';

$email = $_POST['email'];
$password = $_POST['password'];
$adminid = $_POST['adminid'];



if ($app['database']->checkLoginAdmin($email, $password, $adminid))
{
    $title = "Succesfully logedin";
    $addresult = "You have succesfully logged on as ADMIN into our boardgame app";
    $addresultbody = '<a href="home">Go forward to Trump Boardgames</a>';

    $_SESSION["IsSignedin"]=true;
    $_SESSION["IsAdmin"] = true;
}
else
{
    $title = "Failed to login";
    $addresult = "Wrong email, password or adminid supplied";
    $addresultbody = '<a href="checkin">Return to Login</a>';
}


require  'views/answer.view.php';

