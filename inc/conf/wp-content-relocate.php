<?php
// Relocating the wp-content folder

   
 define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/core/asset');
  define('WP_CONTENT_URL', $_SERVER['SERVER_NAME'] .'/core/asset');
   define('WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . 'core/asset/plugins');
    define('WP_PLUGIN_URL',  $_SERVER['SERVER_NAME'] .'core/content/plugins');
	 define('PLUGINDIR', $_SERVER['DOCUMENT_ROOT'] . 'core/asset/plugins'); 