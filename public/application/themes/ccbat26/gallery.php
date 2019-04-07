<?php
defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header.php'); ?>
    <main class="main">
        <div class="main-top">
            <h2 class="w-100"><?= $photos['name'] ?> (<?= $photos['photo_count'] ?>)</h2>
        </div>
        <div class="main-center main-center__wrapper">
            <?php foreach ($photos['photos'] as $photo) : ?>
                <div class="main-center__content">
                    <a href="<?= $photo['big'] ?>">
                        <img class="rounded" src="<?= $photo['small'] ?>" alt="photo de <?= $photos['name'] ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php
    $this->inc('elements/footer.php');