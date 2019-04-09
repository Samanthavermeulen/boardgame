<?php

/**
 * Setup your app
 * @bootstrap.php file to initialize database
 * @Request::uri get the uri
 * */
$query = require 'core/bootstrap.php';
$current = Request::uri();


/**
 * Where are you in your page and where do you go with the
 * routes and controllers
 *
 * @routes.php routes to different endpoints
 * @Request::uri get the uri
 * @Request::method POST or GET?
 */

/**
 * Router has a static function named load. This load function contains a require statement
 * which takes parameter named file. The code in that file is copied at the require location
 * So for example we load the routes.php into ths function Router:load.
 */
require Router::load('routes.php') //chaining!!
    ->direct(Request::uri(), Request::method());




