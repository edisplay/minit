<?php
/*
Plugin Name: Minit
Plugin URI: https://github.com/kasparsd/minit
GitHub URI: https://github.com/kasparsd/minit
Description: Combine JS and CSS files and serve them from the uploads folder.
Version: 1.6.0
Author: Kaspars Dambis
Author URI: https://kaspars.net
*/

// Until we add proper autoloading.
include __DIR__ . '/src/minit-assets.php';
include __DIR__ . '/src/minit-asset-cache.php';
include __DIR__ . '/src/minit-js.php';
include __DIR__ . '/src/minit-css.php';
include __DIR__ . '/src/minit-plugin.php';
include __DIR__ . '/src/admin.php';
include __DIR__ . '/src/helpers.php';

add_action( 'plugins_loaded', array( 'Minit_Plugin', 'instance' ) );
