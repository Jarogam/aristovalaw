<?php
// Get the project derivation
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

// Get the URL addresses
define('SITE_URL', ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']);
define('CURRENT_URL', ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

// Functions for connecting styles
function get_css_url($dir) {
    return SITE_URL . '/pages/assets/css/' . $dir;
}
function get_js_url($dir) {
    return SITE_URL . '/pages/assets/js/' . $dir;
}
function get_img_url($dir) {
    return SITE_URL . '/pages/assets/img/' . $dir;
}

// Functions for connecting parts of the template
function display_header( ) {
    include DOCUMENT_ROOT . '/pages/inc/header.php';
}
function display_footer( ) {
    include DOCUMENT_ROOT . '/pages/inc/footer.php';
}