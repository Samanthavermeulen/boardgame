<?php
require 'session.php';
$sqlResult =  $app['database']->selectForList('games', 'name', 'description', 'dor');


require 'views/games.view.php';