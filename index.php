<?php
/**
 * ./gbcms/index.php
 *
 * @package default
 */

define('ENTRY_ABS_DIR',dirname(__FILE__));
define('APP_DIR',ENTRY_ABS_DIR.'/app');

require_once ENTRY_ABS_DIR.'/framework/BB.php';

$bb = new BB\BB();
$bb->run();

