<?php
//name of the title for head.php
$title = "Players";
require 'session.php';

$sqlresult =  $app['database']->selectAllAss('player');

require 'views/players.view.php';