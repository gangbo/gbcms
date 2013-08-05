<?php
/**
 * ./gbcms/index.php
 *
 * @package default
 */

define('ENTRY_ABS_DIR',dirname(__FILE__));
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);

require_once ENTRY_ABS_DIR.'/framework/bb.php';

$bb = new BB();
$bb->run();

