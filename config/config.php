<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:host=localhost;dbname=dotinstall_shs_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'yokohisa');

define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();
