<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php'); ?>
    <main class="main">
        <div class="main-top">
            <?php
                $a = new Area('Main top');
                $a->display($c);
            ?>
            <span class="main-top__btn"><a href="<?= $view->url('/contact') ?>">Contactez-nous</a></span>
        </div>
        <div class="main-center">
            <?php
                $a = new Area('Main center');
                $a->display($c);
            ?>
        </div>
    </main>
    <?php
    $this->inc('elements/footer.php');