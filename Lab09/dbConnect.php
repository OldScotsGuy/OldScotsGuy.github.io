<?php
/**
 * Created by PhpStorm.
 * User: 1813014
 * Date: 25/02/2019
 * Time: 10:20
 */

define('DB_SERVER', 'CSDM-WEBDEV');
//define('DB_SERVER', 'localhost');
define('DB_USERNAME', '1813014');
define('DB_PASSWORD', '1813014');
define('DB_DATABASE', 'db1813014_cmm007');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
