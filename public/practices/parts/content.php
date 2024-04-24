<div class="content">
        <h2>The Content</h2>
    <div class="tasks">
        <?php


        if (isset($_GET["task"])) {
            require_once("./parts/{$_GET["task"]}.php");
        } else {
            ?>
            <p>Task ID is not provided</p>
            <?php
        }

        ?>
    </div>
        

</div>