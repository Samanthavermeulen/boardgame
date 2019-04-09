<?php require 'partials/head.php'; ?>

<div class="row">

    <div class="col-10 offset-1">
        <h4>Game result</h4>

        <?php
            foreach (range(1, $nop) as $i)
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
    ?>

    </div>
</div>

<?php require 'partials/foot.php'; ?>
