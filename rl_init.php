<?php

// This file must be included to work
if (count(get_included_files()) == 1) {
	require('deny.php');
	exit;
}

@set_time_limit(0);
ini_set('memory_limit', '1024M'); // Fixed: ini_alter → ini_set
if (ob_get_level()) ob_end_clean();
ob_implicit_flush(true);
clearstatcache();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); // Updated error reporting
$nn = "\r\n";
$fromaddr = 'RapidLeech';
$dev_name = 'Development Stage';
$rev_num = '43';
$plusrar_v = '4.1';
$PHP_SELF = $_SERVER['SCRIPT_NAME'];
define('RAPIDLEECH', 'yes');
define('ROOT_DIR', realpath('./'));
define('PATH_SPLITTER', ((strpos(ROOT_DIR, '\\') !== false) ? '\\' : '/'));
define('HOST_DIR', 'hosts/');
define('CLASS_DIR', 'classes/');
define('CONFIG_DIR', 'configs/');
define('BUILD', '30May2011');
define('CREDITS', '<a href="http://www.rapidleech.com/" class="rl-link"><b>RapidLeech</b></a>&nbsp;<b class="rev-dev">PlugMod (eqbal) rev. ' . $rev_num . '</b> <span class="rev-dev">' . $dev_name . '</span><br><small class="small-credits">Credits to Pramode &amp; Checkmate &amp; Kloon</small><br /><p class="rapidleechhost"><a href="http://www.rapidleechhost.com/aff.php?aff=001" target="_blank">RapidleechHost Offical Hosting</a></p>');

require_once(CONFIG_DIR . 'setup.php');

// $options['download_dir'] should always end with a '/'
if (substr($options['download_dir'], - 1) != '/') $options['download_dir'] .= '/';
define('DOWNLOAD_DIR', (substr($options['download_dir'], 0, 6) == 'ftp://' ? '' : $options['download_dir']));
define('TEMPLATE_DIR', 'templates/' . $options['template_used'] . '/');
define('IMAGE_DIR', TEMPLATE_DIR . 'images/');
// Only set headers if not already set by server/proxy
if (!headers_sent()) {
    // Security headers
    if (!header_sent('X-Frame-Options')) {
        header('X-Frame-Options: SAMEORIGIN');
    }
    if (!header_sent('X-Content-Type-Options')) {
        header('X-Content-Type-Options: nosniff');
    }
    if (!header_sent('X-XSS-Protection')) {
        header('X-XSS-Protection: 1; mode=block');
    }
    
    // Cache control (only if no_cache is enabled and not in proxy mode)
    if ($options['no_cache'] && !isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Pragma: no-cache');
    }
}

// Helper function to check if header was already sent
function header_sent($header_name) {
    $headers = headers_list();
    foreach ($headers as $header) {
        if (stripos($header, $header_name . ':') === 0) {
            return true;
        }
    }
    return false;
}
require_once(CLASS_DIR . 'other.php');


?>