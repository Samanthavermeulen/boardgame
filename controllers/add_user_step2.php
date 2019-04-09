<?php

require 'session.php';

$code = $_POST['code'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$repeatpassword = $_POST['repeatpassword'];

//$sqlresult =  $app['database']
if ($repeatpassword != $password)
{
    $title = "Failed to add new user";
    $addresult = "The password did not match the control password";
    $addresultbody = '<a href="signup_step2">Return to Sign Up</a>';

}
else
{
    $app['database']->updatePlayer($code,$password, $fname, $lname, $mobile);
    $title = "Your account is complete";
    $addresult = "Your data has been updated. Your account is complete";
    $addresultbody = '<a href="checkin">Go to login</a>';
}

require  'views/answer.view.php';