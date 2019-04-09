<?php

require 'session.php';

$programmer = $_POST['programmer'];
$year = $_POST['year'];

$message = "Recognized as the first computer programmer, " . $programmer . " wrote the first computer algorithm in " . $year . ".";

$title = "Answer to Excercise 01_php_string_manipulation";
$addresult = $message;
$addresultbody = '<a href="excercise">Go back to excercises</a>';

require  'views/answer.view.php';