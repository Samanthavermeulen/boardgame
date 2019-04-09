<?php require 'session.php';
$title = "Battles";
$gameid = $_SESSION['gameid'];
$nop = $_POST['nop'];

$_SESSION['nop'] = $nop;

$sqlresult =  $app['database']->getAvailablePlayers();


require 'views/battles_step3.view.php';