<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php'); ?>
    <main class="main">
        <div class="main-top">
            <h2 class="w-100">Mes Réalisations</h2>
        </div>
        <div class="main-center main-center__wrapper">
            <?php foreach ($albums as $album) : ?>
                <div class="main-center__content col-12 col-md-10 col-lg-5 d-flex align-items-center">
                    <h3>
                    <a href="<?= $view->url('/realisations/album/' . $album['id']) ?>">
                    <?= $album['name'] ?> (<?= $album['photo_count']?>)</a>
                    </h3>
                    <img class="rounded d-block ml-auto mr-0" src="<?= $album['picture']['url'] ?>"
                    alt="photo de l'album <?= $album['name'] ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php
    $this->inc('elements/footer.php');