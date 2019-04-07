<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

    <footer id="concrete5-brand" class="footer">
        <div class="d-flex justify-content-between p-2">
            <span><?php echo t('&copy; 2019 CCbat26 ') ?></span>
            <span class="pull-right ml-auto">
                <?php echo Core::make('helper/navigation')->getLogInOutLink() ?>
            </span>
        </div>
    </footer>
</div>
<?php View::element('footer_required'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2">
</script>
</body>
</html>
