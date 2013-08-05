<?php
/**
 * ./gbcms/index.php
 *
 * @package default
 */

define('ENTRY_ABS_DIR',dirname(__FILE__));

require_once ENTRY_ABS_DIR.'/framework/bb.php';

$bb = new BB();
$bb->run();

