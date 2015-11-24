<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	//localhost database
	'connectionString' => 'mysql:host=localhost;dbname=botasbom',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',

	// ipage database
	// 'connectionString' => 'mysql:host=techinccommx.ipagemysql.com;dbname=botasbom',
	// 'emulatePrepare' => true,
	// 'username' => 'botasbom',
	// 'password' => 'B0t@sB0m',
	// 'charset' => 'utf8',
);