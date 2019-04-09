<?php
require 'session.php';


// Program lines of code
$apollo11 = 145000;
$android = 12000000;
$osx = 86000000;

// Step 1: Create a variable named 'myLines' and set it's value equal to the integer 4000000
$myLines = $_POST['mylines'];

// Step 2: Use an if statement to check whether 'myLines' is greater than $osx, and if so, display the string "You have written more code than is included in MacOS 10.4."
if ($myLines > $osx)
{
    $message = "You have written more code than is included in MacOS 10.4.";
}
// Step 3: Add an else if statement to check whether 'myLines' is greater than $android, and if so, display the string "You have written more code than it takes to run an Android phone."
elseif ($myLines > $android)
{
    $message = "You have written more code than it takes to run an Android phone.";
}
// Step 4: Add another else if statement to check whether 'myLines' is greater than $apollo11, and if so, display the string "You have written more code than it took to launch Apollo 11."
elseif ($myLines > $apollo11)
{
    $message = "You have written more code than it took to launch Apollo 11.";
}
// Step 5: Add an else statement to display the string "Keep writing code to accomplish something great!"
else
{
    $message = "Keep writing code to accomplish something great!";
}
// Step 6: Test your code by changing the value of 'myLines' until you have reached all possibilities. (examples: -14552880, 45000000, 1449100800)

$title = "Answer to Exercise 04 php if-else";
$addresult = $message;
$addresultbody = '<a href="excercise">Go back to exercises</a>';

require  'views/answer.view.php';