<?php
return array(
	'ftp'=>array(
		'run'=>false,
		'host'=>'localhost',
		'user'=>'test',
		'password'=>'test',
		'root'=>'/test',
	),
	'webdav'=>array(
		'run'=>false,
		'host'=>'localhost',
		'user'=>'test',
		'password'=>'test',
		'root'=>'/owncloud/files/webdav.php',
	),
	'google'=>array(
		'run'=>false,
		'consumer_key'=>'anonymous',
		'consumer_secret'=>'anonymous',
		'token'=>'test',
		'token_secret'=>'test',
		'root'=>'/google',
	),
	'swift'=>array(
		'run'=>false,
		'user'=>'test:tester',
		'token'=>'testing',
		'host'=>'localhost:8080/auth',
		'root'=>'/',
	),
	'amazons3'=>array(
		'run'=>false,
		'key'=>'test',
		'secret'=>'test',
		'bucket'=>'bucket',
	)
);
