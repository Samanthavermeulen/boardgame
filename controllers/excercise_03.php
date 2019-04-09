<?php
require 'session.php';

    $title = $_POST['title'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <?php echo '<title>' . $title . '</title>'; ?>
    <link href="public/css/style1.css" rel="stylesheet" />
</head>

<body>
<div class="wrap">
    <div class="sidebar">
        <?php
            include 'public/inc/learning_quotes.html';
            ?>
    </div>
    <div class="main">
        <?php echo '<h1>' . $title . '</h1>'; ?>
        <a href="excercise">Return to exercises</a>
        <?php include 'public/inc/learning_tips.html'; ?>

    </div>
    <div class="footer">Practice Completed: <?php echo date('D d M Y')?></div>
</div>
</body>
</html>