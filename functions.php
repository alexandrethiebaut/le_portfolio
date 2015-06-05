<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

// Image Sizes

add_image_size('home-thumbnail', 640, 400, array('center', 'top'));
add_image_size('showcase-thumbnail', 1120, 520, array('center', 'center'));
add_image_size('fullsize', 1920, 1080, array('center, center'));

// Definition des constantes

// define('POST_DESCRIPTION', 30);
// define('CAT_PROJETS', 2);
// define('CAT_NON_CLASSE', 1);

define('POST_DESCRIPTION', $polylang->model->get_translation('post', 42, pll_current_language()));
define('CAT_PROJETS', $polylang->model->get_translation('category', 2, pll_current_language()));
define('CAT_NON_CLASSE', $polylang->model->get_translation('category', 1, pll_current_language()));

error_reporting(E_ALL ^ E_WARNING);