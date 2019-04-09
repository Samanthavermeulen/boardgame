<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home"><img src="https://cdn0.iconfinder.com/data/icons/politicians-vol-3/426/trump_bw-512.png" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if($current == 'home') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="home">Home </a>
                </li>
            <?php endif; ?>
            <?php if($current == 'games') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="games">Games <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="games">Games </a>
                </li>
            <?php endif; ?>
            <?php if($current == 'users') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="users">Users <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="users">Users </a>
                </li>
            <?php endif; ?>
            <?php if($current == 'players') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="players">Players <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="players">Players </a>
                </li>
            <?php endif; ?>
            <?php if($issignedin) : ?>
                <?php if($current == 'battles') : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="battles">Battles <span class="sr-only">(current)</span></a>
                    </li>
                <?php else :?>
                    <li class="nav-item ">
                        <a class="nav-link" href="battles">Battles </a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($current == 'excercise') : ?>
                <li class="nav-item active ">
                    <a class="nav-link" href="excercise">Exercise <span class="sr-only">(current)</span></a>
                </li>
            <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="excercise">Exercise </a>
                </li>
            <?php endif; ?>
        </ul>
        <!-- if the user isn't signed in - show login button-->
        <?php if(!$issignedin) : ?>
            <?php if($current == 'checkin') : ?>

                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active myboardgame"><a href="checkin"></span>Login</a></li>
                </ul>
            <?php else :?>

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="checkin"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                </ul>
            <?php endif; ?>
        <?php else :?>
        <!-- if the user is logged in - show log-out button-->
            <?php if($current == 'checkin') : ?>


                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active myboardgame"><a href="checkout"></span>Logout</a></li>
                </ul>
            <?php else :?>


                <ul class="nav navbar-nav navbar-right">

                    <li><a href="checkout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
<!--        </ul>-->

    </div>
</nav>

