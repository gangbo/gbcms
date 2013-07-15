<?php
/**
 * ./gbcms/index.php
 *
 * @package default
 */


define('APP_DIR', 'app');
define('SMARTY_DIR', 'Smarty/libs/');
define('DB_STR', 'mysql:host=localhost;dbname=cdcol');
define('DB_USER', 'root');
define('DB_PWD', '');

include 'system/GBBase.class.php';
include 'system/SmartyConfig.class.php';
include 'system/db.class.php';
use system\GBBase;

$base = new system\GBBase(APP_DIR);
$base->execute();
