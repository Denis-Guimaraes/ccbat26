<?php defined('C5_EXECUTE') or die("Access Denied.");
$site = Site::getSite();
?>

<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="<?=$view->getStylesheet('main.less')?>" rel='stylesheet' type='text/css'>
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
    ]);
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="<?php echo $c->getPageWrapperClass()?>">

<div class="wrapper">
    <div class="contact">
        <div class="contact-div">
            <i class="fas fa-mobile-alt contact-div__icon"></i>
            <span>
                <?= $site->getAttribute('phone') ?>
            </span>
        </div>
        <div class="contact-div mr-2">
            <i class="far fa-envelope contact-div__icon"></i>
            <span>
                <?= $site->getAttribute('email') ?>
            </span>
        </div>
        <div class="contact-div ml-auto mr-4">
            <div class="fb-like" data-href="https://www.facebook.com/ccbat26/"
            data-layout="button_count" data-action="recommend" data-size="small"
            data-show-faces="false" data-share="true"></div>
        </div>
    </div>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark header__nav">
            <h1 class="header__title">
                <?= $site->getSiteName() ?>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <?php
                    $dNav = BlockType::getByHandle('autonav');
                    $dNav->controller->displayPages = 'top';
                    $dNav->controller->orderBy = 'display_asc';
                    $dNav->controller->displaySubPages = 'all';
                    $dNav->controller->displaySubPagesLevels = 'all';
                    $dNav->render();
                ?>
            </div>
        </nav>
    </header>
