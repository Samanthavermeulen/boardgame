<?php

require 'session.php';

$email = $_POST['email'];
$nickname = $_POST['nickname'];

$id = $app['database']->addPlayer($email,$nickname);

if ($id > 0)
{
    $title = "Check your email";
    $addresult = "You have received an e-mail containing a code to finish signup";
    $addresultbody = '<a href="signup_step2">The code is' . $id . ' (only shown because mailserver is not supported)</a>';
}
else {
    $title = "Failed to add new user";
    $addresult = "The email or nickname is already present in the database";
    $addresultbody ='<a href="signup">Return to Sign Up</a>';

}

require  'views/answer.view.php';

