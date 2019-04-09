<?php
require 'session.php';

$sqlresult =  $app['database']->selectForList('games', 'name', 'description', 'dor');


require 'views/checkin.view.php';