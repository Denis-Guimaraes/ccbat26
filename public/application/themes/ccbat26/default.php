<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php'); ?>
    <main class="main">
        <div class="main-center">
            <?php
                $a = new Area('Main area');
                $a->display($c);
            ?>
        </div>
    </main>
    <?php
    $this->inc('elements/footer.php');
