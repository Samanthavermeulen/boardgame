<?php



///
/// why doesn't  12.7.0.0.0 work and 888 does?

if($_SERVER['HTTP_HOST'] == 'localhost:127.0.0.1' || $_SERVER['HTTP_HOST'] == 'localhost:9999' ) {
    /**
     * GET routes
     */
    $router->get('', 'controllers/index.php');
    $router->get('home', 'controllers/index.php');
    $router->get('players', 'controllers/players.php');
    $router->get('games', 'controllers/games.php');
    $router->get('users', 'controllers/users.php');
    $router->get('battles', 'controllers/battles.php');
    $router->get('excercise', 'controllers/excercise.php');
    $router->get('checkin', 'controllers/checkin.php');
    $router->get('checkinadmin', 'controllers/checkinadmin.php');
    $router->get('signup', 'controllers/signup.php');
    $router->get('checkout', 'controllers/checkout.php');
    $router->get('forgot_password', 'controllers/forgot_password.php');
    $router->get('delete', 'controllers/delete.php');
    $router->get('signup_step2', 'controllers/signup_step2.php');
    /**
     * POST routes
     */
    $router->post('add_user', 'controllers/add_user.php');
    $router->post('add_user_step2', 'controllers/add_user_step2.php');
    $router->post('checkin_check', 'controllers/checkin_check.php');
    $router->post('checkinadmin_check', 'controllers/checkinadmin_check.php');
    $router->post('excercise_01', 'controllers/excercise_01.php');
    $router->post('excercise_02', 'controllers/excercise_02.php');
    $router->post('excercise_03', 'controllers/excercise_03.php');
    $router->post('excercise_04', 'controllers/excercise_04.php');
    $router->post('battles_step2', 'controllers/battles_step2.php');
    $router->post('battles_step3', 'controllers/battles_step3.php');
    $router->post('battles_step4', 'controllers/battles_step4.php');
    $router->post('delete_player', 'controllers/users/add_player.php');
    $router->post('upd_player', 'controllers/users/upd_player.php');
    $router->post('add_player', 'controllers/add_player.php');

} else {
    $router->get('s1123902/P1_00APP_Opdracht', 'controllers/index.php');
    $router->get('home', 'controllers/index.php');
    $router->get('players', 'controllers/players.php');
    $router->get('games', 'controllers/games.php');
    $router->get('users', 'controllers/users.php');
    $router->get('battles', 'controllers/battles.php');
    $router->get('excercise', 'controllers/excercise.php');
    $router->get('checkin', 'controllers/checkin.php');
    $router->get('checkin-admin', 'controllers/checkinadmin.php');
    $router->get('signup', 'controllers/signup.php');
}

