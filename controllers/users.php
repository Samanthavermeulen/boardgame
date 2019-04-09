<?php

//SHARED LOGIC used in every controllers
require 'session.php';

//title used in header.php(header is common for all pages, so title should be set here)
$title = "Users";


//display header because headers in the database are less readable for humans
$displayHeaders  =
    [   'ID',
        'First Name',
        'Last Name',
        'E-Mail',
        'Mobile',
        'Password (don/\t show)',
        'Password check'
    ];

//select the the table (users) in the database - put it in a associative array
$sqlResult =  $app['database']->selectPages('users');


//require the view part of the page
require  'views/users.view.php';

