<?php

define('APP_DIR','app');
define('SMARTY_DIR', 'Smarty/libs/');

include 'system/Base.class.php';
use system\Base;
include 'system/SmartyConfig.class.php';

$base = new Base(APP_DIR);
$base->execute();
