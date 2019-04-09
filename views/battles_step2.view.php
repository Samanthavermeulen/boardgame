<?php
$title = "Battles";
require 'partials/head.php'; ?>

    <div class="row">

        <div class="col-4 offset-4">
            <form class="form-signin" action="battles_step3" method="post">
                <h4 class="h3 mb-3 font-weight-normal">Let the battle begin</h4>
                <label for="select game" class="form-control-label">Number of players:</label>
                <select name="nop" required class="form-control">
                    <?php
                    foreach ($sqlResult as $row)
                    {
                        echo '<option value=' . $row . '>' . $row . ' players </option>';
                    }
                    ?>

                </select></br>
                <input type="submit" value="Select number of players" class="btn btn-lg btn-primary btn-block" name="submit"/></br>


            </form>
        </div>
    </div>

<?php require 'partials/foot.php'; ?>