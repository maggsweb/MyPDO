<?php 

/**
 * Define database connection as constants
 */
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_NAME', 'pdotest');
define('DB_PASS', '');

/**
 * Include MyPDO class file
 */
require_once 'MyPDO.php';

//include 'dumpr.php';
//dumpr(time());

/**
 * Instantiate DB class for use
 */
$db = new MyPDO();
//dumpr($db);

//See examples.php for usage examples

//////////////////////////////////////////////////////////////////////////////////////////


