<?php
/**
 * Dreaps 
 * Copyright 2015 Dreaps Group, All Rights Reserved
 *
 */
 
// Make sure we are running PHP5.
if (version_compare(phpversion(), '5.3.3', '<') === true)
{
	exit('Dreaps requires PHP 5 or newer.');
}

ob_start();

/**
 * Key to include DREAPS
 *
 */
define('DREAPS', true);

/**
 * Directory Seperator
 *
 */
define('DREAPS_DS', DIRECTORY_SEPARATOR);

/**
 * DREAPS Root Directory
 *
 */
define('DREAPS_DIR', dirname(__FILE__) . DREAPS_DS);

define('DREAPS_START_TIME', array_sum(explode(' ', microtime())));

// Require DREAPS Init
require(DREAPS_DIR . 'System' . DREAPS_DS . 'init.inc.php');


ob_end_flush();


?>