
<?php require 'partials/head.php'; ?>

    <div class="row">
        <div class="col-10 offset-1">
            <h4>Players</h4>
            <?php
                echo '<ul class="list-group">';



                foreach ($sqlResult as $row)
                {


                    echo '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">';
                    echo '<div class="d-flex w-100 justify-content-between">';
                    echo '  <p class="mb-1">' . $row['nickname'] . '</p>';
                    if ($row['gamestatus'] == 1)
                    {
                        echo '  <span class="badge badge-success badge-pil ">available</span>';
                    }
                    echo '</div>';
                    echo '</a>';

                }
                echo '</ul>';
            ?>
        </div><!-- End div - players -->
    </div> <!-- End div row -->

<?php require 'partials/foot.php'; ?>