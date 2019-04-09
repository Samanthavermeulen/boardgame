<?php
$title = "Battles";
require 'partials/head.php'; ?>

    <div class="row">

        <div class="col-4 offset-4">
            <form class="form-signin" action="battles_step4" method="post">
                <h4 class="h3 mb-3 font-weight-normal">Let the battle begin</h4>
                <label for="select game" class="form-control-label">Select your players</label>

                <?php

                foreach (range(1, $nop) as $i)
                {
                    echo '<select name="player_' . $i .'"required class="form-control">';

                    foreach ($sqlResult as $row)
                    {
                        echo '<option value=' . $row['id'] . '>' . $row['nickname'] . '</option>';
                    }

                    echo '</select></br>';
                }
                ?>
                <input type="submit" value="Trump will defeat them all" class="btn btn-lg btn-primary btn-block" name="submit"/></br>


            </form>
        </div>
    </div>

<?php require 'partials/foot.php'; ?>