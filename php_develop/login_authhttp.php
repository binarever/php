<?php

	require_once("Auth/HTTP.php");

	$dblogin  =  array(
		'dsn'=>"mysql://corpweb:secret@localhost/corporate",
		'table'=>"logins",
		'usernamecol'=>"username",
		'passwordcol'=>"pawd",
		'cryptType'=>"md5"
		'db_fields'=>"*"
		);

	$auth  =  new Auth_HTTP("DB",$dblogin) or die("Can't connect!");

	$auth->start();

	$auth->setCancelText('Authentication credentials not accepted!');

	if ($auth->getAuth())
		echo "Welcome ,$auth->commonname<br   />";
?>