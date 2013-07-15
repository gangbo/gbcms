<?php
/**
 * ./gbcms/admin.php
 *
 * @package default
 */

define('APP_DIR', 'admin');
define('SMARTY_DIR', 'Smarty/libs/');
include APP_DIR.'/config/app_config.php';
include 'system/GBBase.class.php';
include 'system/SmartyConfig.class.php';
use system\GBBase;

$base = new system\GBBase(APP_DIR);
$base->execute();