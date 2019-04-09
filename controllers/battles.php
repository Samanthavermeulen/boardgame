<?php require 'session.php';
$title = "Battles";


$sqlresult =  $app['database']->selectAllAss('games');


require 'views/battles.view.php';