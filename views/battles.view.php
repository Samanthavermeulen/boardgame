<?php
$title = "Battles";
require 'partials/head.php'; ?>

    <div class="row">

        <div class="col-4 offset-4">
            <form class="form-signin" action="battles_step2" method="post">
                <h4 class="h3 mb-3 font-weight-normal">Let the battle begin</h4>
                <label for="select game" class="form-control-label">Select Game:</label>
                <select name="gameid" required class="form-control">
                    <?php
                        foreach ($sqlResult as $row)
                        {
                            echo '<option value=' . $row['id'] . '>' . $row['name'] . ' </option>';
                        }
                    ?>

                </select></br>
                <input type="submit" value="Select game" class="btn btn-lg btn-primary btn-block" name="submit"/></br>


            </form>
        </div>
    </div>

<?php require 'partials/foot.php'; ?>