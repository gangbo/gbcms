<?php

define('APP_DIR','app');
define('SMARTY_DIR', 'Smarty/libs/');
define('DB_STR','mysql:host=localhost;dbname=cdcol');
define('DB_USER','root');
define('DB_PWD','');

include 'system/Base.class.php';
use system\Base;
include 'system/SmartyConfig.class.php';
include 'system/db.class.php';

$base = new system\Base(APP_DIR);
$base->execute();
