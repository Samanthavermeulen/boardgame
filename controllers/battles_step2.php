<?php
require 'session.php';
$title = "Battles";
$gameid = $_POST['gameid'];

$_SESSION['gameid'] = $gameid;

$sqlresult =  $app['database']->getNumberOfPlayerArr($gameid);


require 'views/battles_step2.view.php';