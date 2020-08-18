<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */
define('LARAVEL_PUBLIC_DIR', __DIR__.'/..');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' 
    && substr($uri, 0, 8) != '/laravel' 
    && file_exists(LARAVEL_PUBLIC_DIR.$uri)) {
    return false;
}

require_once LARAVEL_PUBLIC_DIR.'/index.php';
