
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<?php
/**
 * Created by PhpStorm.
 * User: MAARTEN
 * Date: 19-10-2018
 * Time: 18:41
 */




echo '<ul class="list-group">';



foreach ($sqlResult as $row)
{
    echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">';
    echo "<span class=\"fa fa-star checked\"></span>";
    echo "<span class=\"fa fa-star checked\"></span>";
    echo "<span class=\"fa fa-star checked\"></span>";
    echo "<span class=\"fa fa-star checked\"></span>";
    echo "<span class=\"fa fa-star checked\"></span>";
    echo '<div class="d-flex w-100 justify-content-between">';
    echo '  <h5 class="mb-1">' . $row['Header'] . '</h5>';
    echo '  <span class="badge badge-success badge-pil ">' . $row['Tag'].'</span>';
    echo '</div>';
    echo '<p class="mb-1">' . $row['Description'].'</p>';
    echo '<small class="text-muted">Please do not play this game</small>';
    echo '</a>';

}




echo '</ul>';


