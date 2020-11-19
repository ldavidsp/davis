<?php
/*
|-------------------------------------------------------------------------|
| Config database																													|
|-------------------------------------------------------------------------|
*/
/**
 * @params $database;
**/

$database = [
	'driver' => 'mysql',
	'host' => 'localhost',
	'database' => getenv('MYSQL_DATABASE'),
	'username' => '',
	'password' => '',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => '',
];
