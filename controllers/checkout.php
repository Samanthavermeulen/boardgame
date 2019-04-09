<?php
require 'session.php';

    $_SESSION["IsSignedin"]=false;
    $title = "Logout";
    $addresult = "You are succesfully logged out";
    $addresultbody = '<a href="checkin">Return to Login</a>';



require  'views/answer.view.php';