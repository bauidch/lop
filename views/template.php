<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/normalize.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/foundation.css">
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js') ?>
		<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    </head>
    <body>
		<nav class="menu">
			<div class="row"> 
				<?php if ($logo = $params['logo']) : ?>
				<a class="name" href="<?= $view->url()->get() ?>">
					<img src="<?= $this->escape($logo) ?>" alt="">
				</a>
				<?php endif ?>
				
				 <?php if ($view->menu()->exists('main')) : ?>
					<?= $view->menu('main', 'menu-navbar.php') ?>
				 <?php endif ?>
			  <a class="account hide-for-medium-up" href="#"><i class="fi-list"></i></a>
			  </div>
		</nav>
		
		<?php if ($view->position()->exists('hero')) : ?>
		<div id="slider">
			<?= $view->position('hero', 'position-blank.php') ?>
		</div> <!--End #slider -->
		<?php endif; ?>

        <!-- Render widget position -->
        <?php if ($view->position()->exists('sidebar')) : ?>
            <?= $view->position('sidebar') ?>
        <?php endif; ?>

        <!-- Render system messages -->
        <?= $view->render('messages') ?>

        <!-- Render content -->
		<div class="row">
			<div class="large-10 large-centered columns">
				<?= $view->render('content') ?>
			</div>
		</div>
		
		<?php if ($view->position()->exists('footer')) : ?>
		<footer class="footer">
			<div class="row">
				<div class="large-12 columns">
				  <?= $view->position('footer', 'position-blank.php') ?>
				</div>
			</div>
		</footer>
        <?php endif; ?>

        <!-- Insert code before the closing body tag  -->
        <?= $view->render('footer') ?>

    </body>
</html>
