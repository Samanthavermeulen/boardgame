<?php
require 'session.php';

$email = $_POST['email'];
$password = $_POST['password'];


if ($app['database']->checkLoginRegular($email, $password))
{
    $title = "Succesfully logedin";
    $addresult = "You have succesfully logged into our boardgame app";
    $addresultbody = '<a href="home">Go forward to Trump Boardgames</a>';

    $_SESSION["IsSignedin"]=true;
    $issignedin = true;
    $_SESSION["IsAdmin"] = false;
    $isadmin = false;
}
else
{
    $title = "Failed to login";
    $addresult = "Wrong email or password supplied";
    $addresultbody = '<a href="checkin">Return to Login</a>';
}


require  'views/answer.view.php';

