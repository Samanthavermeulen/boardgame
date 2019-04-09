<?php require 'session.php';
$title = "Battles";
$nop = $_SESSION[ 'nop'];
$gameid = $_SESSION[ 'gameid'];




$players = [];
$result = [];

foreach (range(1, $nop) as $i)
{
    $players[] =  $_POST['player_' . $i];
    $result[]  =rand(0, 300);
}


$sqlresult =  $app['database']->createBattleResults($gameid, $players, $result);



require 'views/battles_step4.view.php';

