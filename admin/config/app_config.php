<?php
ini_set('error_reporting',E_ALL & ~E_NOTICE);
//ini_set('error_reporting',E_ALL);
ini_set('display_errors','On');

//DB
define('DB_STR','mysql:host=localhost;dbname=gbcms;unix_socket=/tmp/mysql.sock');
define('DB_USER','root');
define('DB_PWD','root');

//website
define('SITE_DOMAIN','http://localhost/gbcms');
define('STATIC_FILE_DIR','http://localhost/gbcms/static/admin');
