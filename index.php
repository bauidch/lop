<?php

/**
 * Configuration
 */
return [

    /**
     * Unique name that identifies your theme.
     */
    'name' => 'lop',

    /**
     * Define menu positions.
     * Will be listed in the backend so that users
     * can assign menus to these positions.
     */
    'menus' => [

        'main' => 'Main',

    ],

    /**
     * Define widget positions.
     * will be listed in the backend so that users
     * can publish widgets in these positions.
     */
    'positions' => [

        'top' => 'Top',
		'hero' => 'Hero',
		'footer' => 'Footer'

    ],
	
	/**
     * Node defaults
     */
    'node' => [
        'title_hide' => false,
        'title_large' => false,
        'alignment' => '',
        'html_class' => '',
        'sidebar_first' => false,
        'hero_image' => '',
        'hero_viewport' => '',
        'hero_contrast' => '',
        'hero_parallax' => '',
        'navbar_transparent' => '',
        'top_style' => 'uk-block-muted',
        'main_style' => 'uk-block-default',
        'bottom_style' => 'uk-block-muted'
    ],
    /**
     * Widget defaults
     */
    'widget' => [
        'title_hide' => false,
        'title_size' => 'uk-panel-title',
        'alignment' => '',
        'html_class' => '',
        'panel' => ''
    ],
	
	 /**
     * Settings url
     */
    'settings' => '@site/settings#site-theme',
	
    /**
     * Define theme configuration.
     * This is the theme's default configuration. During run-time, they will be merged with
     * settings the user has set in the backend. The default configuration can therefore
     * be overwritten.
     */
    'config' => [
		'copyright' => '<p>Powered by Pagekit - Designed with Foundation</p>',
		'header_color' => 'black'
	],
	
	'events' => [

		'view.system/site/admin/settings' => function ($event, $view) use ($app) {
            $view->script('site-theme', 'theme:app/bundle/site-theme.js', 'site-settings');
            $view->data('$theme', $this);
        },
		'view.system/site/admin/edit' => function ($event, $view) {
            $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
        },
        'view.system/widget/edit' => function ($event, $view) {
            $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
        }
   ]		

];
