<?php foreach ($widgets as $widget) : ?>

        <?php if (!$widget->theme['title_hide']) : ?>
        <h2><?= $widget->title ?></h2>
        <?php endif ?>

        <?= $widget->get('result') ?>
		
<?php endforeach ?>
